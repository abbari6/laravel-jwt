<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;

class contactController extends Controller
{
    function list($key)
    {
        return Contact::where('user_id','Like',"%$key%")->get();
    }
    function addContact(Request $req)
    {
       

        $contact= new Contact;
        $contact->firstname=$req->input('firstname');
        $contact->lastname=$req->input('lastname');
        $contact->user_id=$req->input('user_id');
        $contact->email=$req->input('email');
        $contact->company=$req->input('company');
        $contact->save();
        return $contact;
    }
}
