<?php

namespace App\Http\Controllers;

use App\Mail\ContactUs;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
   // Create Contact Form
    public function createForm(Request $request) {

    return view('ContactUs');
  }

  // Store Contact Form data
    public function contactUs(Request $request) {

      // Form validation
      $this->validate($request, [
          'name' => 'required',
          'email' => 'required|email',
          'subject'=>'required',
          'message' => 'required'
       ]);

      //  Store data in database

      $contact=Contact::create($request->all());

      Mail::to('jashanmittal75511@gmail.com')->send(new ContactUs($contact));
      return back()->with('success', 'successfully submitted');
    }

}
