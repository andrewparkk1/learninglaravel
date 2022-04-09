<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//used after the user logins

class DashboardController extends Controller
{

    public function __construct() {
        $this->middleware('auth');
    }


    public function index() {
        // dd(auth()->user());

        //goes to dashboard.blade.php
        return view('dashboard');
    }
}
