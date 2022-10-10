<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FormController extends Controller
{
        // 
        public function contact()
        {
                return view('contact');
        }

        public function postcontact(Request $request)
        {
                Mail::send(
                        'email',
                        [
                                'nume' => $request->nume,
                                'telefon' => $request->telefon
                        ],
                        function ($message) {
                                $message->from('test@adines.ro');
                                $message->to('gheorghe.tirean@gmail.com', 'Gheorghe Tirean')
                                        ->subject('Down & Feather - Contact Form');
                        }
                );
                return back()->with('success', 'Thanks for contacting me, I will get back to you soon!');
        }
}
