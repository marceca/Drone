<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class pagesController extends Controller
{
    public function about(){
        return view('pages.about');
    }

    public function services(){
        return view('pages.services');
    }

    public function gallery(){

        return view('pages.gallery');
    }
}
