<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
	public function login()
	{
		if (!empty(Auth::check())) {
			return redirect('dashboard');
		}
		return view('auth.login');
	}

	public function AuthLogin(Request $request)
	{
		$remember = !empty($request->remeber) ? true : false;
		if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $remember)) {
			return redirect('dashboard');
		} else {
			return redirect()->back()->with('error', 'email atau password salah');
		}
	}

	public function logout()
	{
		Session::flush();

		Auth::logout();

		return redirect('login');
	}
}
