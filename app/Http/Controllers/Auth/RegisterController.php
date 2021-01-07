<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class RegisterController extends Controller
{
    public function Index()
    {
        return view('auth.register');
    }

    public  function Store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'max:255'],
            'username' => ['required', 'max:255'],
            'email' => ['required', 'email'],
            'password' => ['required', 'confirmed']
        ]);
    }
}
