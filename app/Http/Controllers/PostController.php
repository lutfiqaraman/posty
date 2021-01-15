<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class PostController extends Controller
{
    public function Index()
    {
        $posts = Post::with(['user', 'likes'])->paginate(10);

        return view('posts.index', [
            'posts' => $posts
        ]);
    }

    public function Store(Request $request): RedirectResponse
    {
        try {
            $this->validate($request, [
                'body' => 'required'
            ]);
        } catch (ValidationException $e) {
            dd($e);
        }

        $request->user()->posts()->create(
            $request->only('body')
        );

        return back();
    }
}
