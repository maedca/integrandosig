<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function create()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
       $data = $request->validate([
           'name' => 'required',
           'email' => 'required|email',
           'phone' => 'required',
           'type' =>'required',
           'message' => 'required'
       ]);

       Mail::to('comercial@integrandosig.com')->send(new ContactFormMail($data));
        return redirect('/');
    }
}
