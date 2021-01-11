<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class PostController extends Controller
{
    public function Index()
    {
        return view('posts.index');
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

        $request->user()->posts()->create([
            'body' => $request->input('body')
        ]);

        return back();
    }
}
