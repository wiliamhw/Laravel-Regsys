<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use \App\Mail\Contact; // only for HTML email

class ContactController extends Controller
{
    public function show()
    {
        return view('contact');
    }

    public function store()
    {
        request()->validate(['email' => 'required|email']);

        // send raw email
        // Mail::raw('It just works!', function ($message) {
        //     $message->to(request('email'))
        //         ->subject('Hello There');
        // });

        // send HTML email
        Mail::to(request('email'))
            ->send(new Contact('shirts'));

        return redirect('/contact')
            ->with('message', 'Email sent!');
    }
}
