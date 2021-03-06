<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class GuestController extends Controller
{
    
    public function home()
    {

        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('pages.home', compact('posts'));
    }

    public function register()
    {
        return view('pages.register');
    }
    
}
