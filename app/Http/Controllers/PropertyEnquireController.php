<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PropertyEnquire;
use App\Mail\EnquireEmail;
use Illuminate\Support\Facades\Mail;

class PropertyEnquireController extends Controller
{
    public function enquire(Request $request, $propertyID)
    {
        $request->validate([
            'name'  => ['required', 'max:255'],
            'phone' => ['required', 'max:255'],
            'email' => ['email', 'required', 'max:255'],
            'message' => ['required', 'max:255']
        ]);

        // $request->message .= '\nThis message was sent from '. route('singleProperty',$propertyID) . ' website.';

        PropertyEnquire::create([
            'name'  => $request->name,
            'phone'  => $request->phone,
            'email'  => $request->email,
            'message'  => $request->message . '\nThis message was sent from '. route('single-property',$propertyID) . ' website.',
        ]);

        // Send User & Admin mail/message
        $data = [$request->all(), 'propertyURL' => route('single-property', $propertyID)];

        Mail::send(new EnquireEmail($data));


        return redirect()->back()->with(['message'=>'Message sent successfully']);
    }
}
