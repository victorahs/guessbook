<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignaturesController extends Controller
{
    //
    /**
    * Display the Guestbook homepage.
    *
    * @return \Illuminate\Contracts\View\Factory\Illuminate\View\View
    */
    public function index()
    {
       return view('signatures.index');
    }

    public function create()
    {
        return view('signatures.sign');
           
    }
}
