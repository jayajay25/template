<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileInformationController extends Controller
{
    public function __invoke(Request $request, $identifier)
    {
       return view('profile', ['username' => $identifier]);
    }
    
    public function index()
    {
       return view('profile');
    }
}
