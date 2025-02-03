<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // Validate form input
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'message' => 'required|string',
        ]);

        // Send email
        Mail::to('admin@schoolapp.com')->send(new ContactFormMail(
            $request->name,
            $request->email,
            $request->phone,
            $request->message
        ));

        return back()->with('success', 'Message sent successfully!');
    }
}
