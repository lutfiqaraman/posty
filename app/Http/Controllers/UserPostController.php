<?php

namespace App\Http\Controllers;

use App\Models\User;


class UserPostController extends Controller
{
    public function Index(User $user)
    {
        $posts = $user->posts()->with('user', 'likes')->paginate(10);

        return view('users.posts.index', [
            'user' => $user,
            'posts' => $posts
        ]);
    }
}
