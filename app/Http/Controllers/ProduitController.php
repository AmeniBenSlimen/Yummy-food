<?php

namespace App\Http\Controllers;
use App\Models\Produit;

use Illuminate\Http\Request;

class ProduitController extends Controller
{
    public function GetFormProduct(){
        return view('GetFormProduct');
    }
    public function AddProduitBD(Request $request){
        $produit = new Produit();
        $produit->nom=$request->nom;
        $produit->description=$request->description;
        $produit->prix=$request->prix;
        $produit->image=$request->image;
        if($request->hasfile('image')){
            $file=$request->file('image');
            $ext=$file->getClientOriginalExtension();
            $filename=time().'.'.$ext;
            $file->move('public/images/',$filename);
            $produit->photo=$filename;
        } 
        $produit->save();
        return redirect()->back()->with('success','Produit ajouter avec succes');

    }
    
    public function ListeProduit(){
        $produit=Produit::all();
        return view('ListeProduit',compact('produit'));
    }

    public function UpdateProduit($id){
        

        $produit=Produit::where('id',$id)->first();
        return view('UpdateProduit',compact('produit'));
    }
    
    public function UpdateProduitBD(Request $request){
        $produit=Produit::where('id',$request->id)->first();
        $produit->nom=$request->nom;
        $produit->description=$request->description;
        $produit->prix=$request->prix;
        $produit->image=$request->image;
        if($request->hasfile('image')){
            $file=$request->file('image');
            $ext=$file->getClientOriginalExtension();
            $filename=time().'.'.$ext;
            $file->move('public/images/',$filename);
            $produit->image=$filename;
        } 
        $produit->update();
       
        return redirect()->route('ListeProduit')->with('success','Produit Modifier avec success');
    
       }

       public function DeletProduitBD($id){
        
        $produit=Produit::where('id',$id)->first();
        $produit->delete();
        return redirect()->route('ListeProduit')->with('success','Produit Supprimer avec success');
    }
}
