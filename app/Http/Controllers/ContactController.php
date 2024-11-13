<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //
    public function index()
    {
        return view(view: 'contact');
    }

    public function submit(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'message' => 'required|string',
        ]);

        // Prepare the data, including `user_id` if the user is authenticated
        $messageData = $request->only(['name', 'email', 'phone', 'message']);
        $messageData['user_id'] = auth()->id();

        // Save message in the database
        $message = Message::create($messageData);

        try {
            // Send the email
            Mail::to(env('SUPPORT_EMAIL'))->send(new ContactMail($message));
        } catch (\Exception $ex) {
        
        }

        // Redirect back with success message
        return back()->with('contact_success', 'تم إرسال رسالتك بنجاح');
    }
}
