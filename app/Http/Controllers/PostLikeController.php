<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\RedirectResponse;

class PostLikeController extends Controller
{
    public function Store(Post $post): RedirectResponse
    {
        $post->likes()->create([
           'user_id' => $post->user_id
        ]);

        return back();
    }
}
