<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostFavoriteController extends Controller
{

    public function index()
    {
     // https://scotch.io/tutorials/implement-a-favoriting-feature-using-laravel-and-vue-js
     // https://www.npmjs.com/package/vue-favorite
    }
    public function store(Post $post)
    {
        Auth::user()->favorites()->attach($post->id);

        return response()->json(null,200);

    }

    public function destroy(Post $post)
    {

        Auth::user()->favorites()->detach($post->id);

        return response()->json(null,200);
    }
}
