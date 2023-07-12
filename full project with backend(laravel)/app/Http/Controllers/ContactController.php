<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{

    public function store(Request $req)
    {
        if(session('name')==$req->name && session('email')==$req->email && session('phone')==$req->phone && session('subject')==$req->subject && session('message')==$req->message)
        {
            echo 111111111111111;

            // echo session('name').session('email').session('phone').session('subject').session('message');
            return  redirect('/#contact')->with(['redundant'=>
                            "This form has already submitted before !!"])->withInput();
        }
        else
        {
            echo 22222222222222;
            // $req->validate([
            //     'name'=> 'required',
            //     'email' => 'required|email',
            //     'phone' => 'required|digits:10|numeric',
            //     'subject' => 'required',
            //     'message' => 'required',
            // ]);
    
            Contact::create($req->all());

            // store values in session
            session(['name'=> $req->name,'email'=> $req->email, 'phone'=> $req->phone,
            'subject'=> $req->subject, 'message'=> $req->message]);

            return redirect('/#contact')->with(['success' =>
                                'Thank you for contact us. we will contact you shortly.'])->withInput(); 
        }
    }



}

