<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    //
    public function create(){
        return view('contact.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'nombre'=>['required'],
            'email'=>['required','email'],
            'message'=>['required'],
        ]);
        $email = $request['email'];
        Mail::to($email)->send(new ContactMail($data));
        return "Thanks Check your Email ";
    }
}
