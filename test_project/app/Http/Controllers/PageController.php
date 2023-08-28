<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
   public function acceuil ()
    {
        return view('welcome');
    }

    public function apropos ()
    {
        return view('apropos');
    }

    public function contact ()
    {
        return view('contact');
    }
}

