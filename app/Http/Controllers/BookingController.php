<?php

namespace App\Http\Controllers;

use App\Mail\BookSessionMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class BookingController extends Controller
{
    public function bookSession(Request $request)
    {
        // Validate incoming request data
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'mobile' => 'required',
            'school_name' => 'required|string',
            'address' => 'required|string',
            'message' => 'nullable|string',
        ]);

        try {
            // Send the email to the provided email
            Mail::to($data['email'])->send(new BookSessionMail($data));

            // Store success message in session and redirect
            return redirect()->back()->with('success', 'Your session has been successfully booked!');
        } catch (\Exception $e) {
            // Log the error for debugging
            Log::error('Error sending session booking email: ' . $e->getMessage());

            // Store failure message in session and redirect
            return redirect()->back()->with('error', 'Failed to send the booking email. Please try again later.');
        }
    }
}
