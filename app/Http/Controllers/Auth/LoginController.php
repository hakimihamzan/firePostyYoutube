<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    // you can only register, if you are not currently signed in
    public function __construct()
    {
        $this->middleware(['guest']);
    }

    public function index()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        // Validate
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required', // this related to forms with password_confirmation field
        ]);

        if (!auth()->attempt($request->only('email', 'password'), $request->remember)) {
            return back()->with('status', 'Invalid login details');
        };

        return redirect()->route('dashboard');
    }
}
