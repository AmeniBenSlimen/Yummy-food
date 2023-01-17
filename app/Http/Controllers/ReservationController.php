<?php

namespace App\Http\Controllers;
use App\Models\Reservation;
use App\Models\Contact;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function Reservation(Request $request){
        
        $reservation = new Reservation();
        $reservation->nom=$request->nom;
        $reservation->mail=$request->mail;
        $reservation->phone=$request->phone;
        $reservation->date=$request->date;
        $reservation->personne=$request->personne;
        $reservation->message=$request->message;
        $reservation->save();
    //    dd($reservation);
    return redirect()->back()->with('success','Votre Réservation est ajouter avec succes');
    }
    public function Reservation2(Request $request){
        $contact=new Contact();
        $contact->nom=$request->nom;
        $contact->mail=$request->mail;
        $contact->sujet=$request->sujet;
        $contact->message=$request->message;
        $contact->save();
        return redirect()->back();
       
    }
}
