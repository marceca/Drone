<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\ContactSubmit;

class pagesController extends Controller
{
    public function about(){
        return view('pages.about');
    }

    public function services(){
        return view('pages.services');
    }

    public function pilot(){
        return view('pages.pilot');
    }





        /* CONTACTS */

    public function contacts(){
        return view('pages.contacts');
    }

    public function contactSubmit(Request $request){
        $this->validate($request, [
            'firstName'         => 'required',
            'lastName'          => 'required',
            'city'              => 'required',
            'state'             => 'required',
            'typeOfProject'     => 'required',
        ]);

        $user = new ContactSubmit;

        $user->firstName        = $request['firstName'];
        $user->lastName         = $request['lastName'];
        $user->city             = $request['city'];
        $user->state            = $request['state'];
        $user->email            = $request['email'];
        $user->number           = $request['number'];
        $user->aboutYourProject = $request['aboutYourProject'];

        $user->save();

        return view('pages.contacts');
    }





        /* GALLERY */
    public function gallery(){

        return view('pages.gallery');
    }

    public function photography(){
        return view('pages.photography');
    }

    public function videography(){
        return view('pages.videography');
    }
}
