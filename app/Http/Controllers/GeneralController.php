<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GeneralController extends Controller
{
    // Function to show the dashboard
    function indexOfDashboard() {
        // $userData = Auth::user();
        // return view('Pages.home', compact('userData'));
        return view('Pages.home');
    }
}
