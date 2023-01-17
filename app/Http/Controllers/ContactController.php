<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function Message(Request $request){
        $contact=new Contact();
        $contact->nom=$request->nom;
        $contact->mail=$request->mail;
        $contact->sujet=$request->sujet;
        $contact->message=$request->message;
        $contact->save();
       
    }
}
