<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function newContact(){
        $newContact = new Contact();
        $newContact->name = "Safa Ouardeni";
        $newContact->email = "safawardeni@gmail.com";
        $newContact->message = "Bonjour voici un nouveau contact";

        $newContact->save();

    }

    public function listContacts(){
        $contacts= Contact::all();
        return view('contacts',['contacts'=>$contacts]);
    }
}
