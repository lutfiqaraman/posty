<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    /**
     * LoginController constructor.
     */
    public function __construct()
    {
        $this->middleware(['guest']);
    }

    public function Index()
    {
        return view('auth.login');
    }

    public function Store(Request $request): RedirectResponse
    {
        $loginInfo = $request->only('email', 'password');
        $remember  = $request->input('remember');

        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if (!auth()->attempt($loginInfo, $remember)) {
            return back()->with('status', 'Invalid login details');
        }

        return redirect()->route('dashboard');
    }
}
