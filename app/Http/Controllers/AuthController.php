<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function logout()
    {
        Session::flush();
        
        Auth::logout();

        return redirect('login');
    }
}
