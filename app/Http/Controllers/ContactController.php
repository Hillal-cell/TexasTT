<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
     public function sendEmail(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        // Send email
         try {
            Mail::to('sayrunjogi@gmail.com')->send(new ContactFormMail($validatedData));
            
            return redirect()->back()->with('sucess', 'Your message has been received thank you.');

        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while sending your message. Please try again later.');
        }

    }
}
