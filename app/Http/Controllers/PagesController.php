<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;

class PagesController extends Controller
{
  
    public function home()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('about');
    }

    public function service()
    {
        return view('service');
    }
}