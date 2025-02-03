<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SessionBookingMail;

class SessionBookingController extends Controller
{
    /**
     * Handle form submission and send an email.
     */
    public function bookSession(Request $request)
    {
        // Validate the incoming request data
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'mobile' => 'required|string|max:20',
            'school_name' => 'required|string|max:255',
            'address' => 'required|string',
            'message' => 'nullable|string',
        ]);

        // Send the email using Mailtrap
        Mail::to('mayank07feb@gmail.com')->send(new SessionBookingMail($data));

        // Redirect back with a success message
        return back()->with('success', 'Your request has been sent successfully!');
    }
}
