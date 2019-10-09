<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function create(){
        $bodyClass='contact';
        $headerTitle = 'Contact';
        return view('contact.create', compact(['bodyClass','headerTitle']));
    }
    public function store(){
        $data=\request()->validate([
            'name'=>'required',
            'email'=>'required|email',
            'subject'=>'required',
            'message' => 'nullable',
        ]);

        Mail::to('thuyoanh21790@gmail.com')->send (new ContactFormMail($data));

        return redirect('contact');
        //dd(\request()->all());
    }
}
