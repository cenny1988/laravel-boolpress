<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function createPost()
    {
        return view('pages.create-post');
    }

    public function storePost(Request $request)
    {
        $data = $request -> validate([
            'title' => 'required|string',
            'sub_title' => 'required|min:3|max:150',
            'content' => 'nullable|string'
        ]);

        $data['author'] = Auth::user()->name;
        $post = Post::create($data);

        return redirect()->route('home');
    }
}
