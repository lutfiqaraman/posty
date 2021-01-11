<?php

namespace App\Http\Controllers;

use App\Models\Post;
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
        $this->validate($request, [
           'body' => 'required'
        ]);

        Post::create([
            'user_id'=> auth()->id(),
            'body'=> $request->input('body')
        ]);
    }
}
