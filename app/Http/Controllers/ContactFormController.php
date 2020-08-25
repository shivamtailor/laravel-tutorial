<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function create()
    {
        return view('contact.create');
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Send An Email
        Mail::to('shivamphp@gmail.com')->send(new ContactFormMail($data));

        // Option-01
        //return redirect('contact')->with('message','Thank you for your message. We will get back to you shortly.');

        // Option-02
        session()->flash('message','Thank you for your message. We will get back to you shortly.');
        return redirect('contact');
    }
}

