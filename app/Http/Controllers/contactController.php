<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class contactController extends Controller
{
    public function contact(Request $req){
        $contact = new Contact();
        $contact->name = $req->input('name');
        $contact->Email = $req->input('email');
        $contact->subject = $req->input('subject');
        $contact->message = $req->input('message');

        $contact->save();

        return redirect() -> route('home');
    }
}
