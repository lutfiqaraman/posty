<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function Index()
    {
        return view('posts.index');
    }

    public function Store(Request $request): RedirectResponse
    {
        dd('Post ok ...');
    }
}
