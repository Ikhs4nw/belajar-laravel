<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'title' => 'Home'
        ]);
    }

    public function dashboard()
    {
        return view('home',[
            'title' => 'Dashboard'
        ]);
    }
}
