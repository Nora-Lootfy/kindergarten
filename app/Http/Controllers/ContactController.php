<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;


class ContactController extends Controller
{
    public function send(Request $request)
    {
        $contact = $request->validate(
            [
                'name'      => 'required|string|max:255',
                'email'     => 'required|email',
                'subject'   => 'required|string|max:255',
                'message'   => 'required|string',
            ]
        );

        Contact::create($contact);
        Mail::to(env('MAIL_FROM_ADDRESS'))->send(new ContactMail($contact));

        return 'data sent successfully';
    }
}
