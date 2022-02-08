<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;
use App\Category;

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
        $categories=Category::all();
        return view('pages.create-post',compact('categories'));
    }

    public function storePost(Request $request)
    {
        $data = $request -> validate([
            'title' => 'required|string',
            'sub_title' => 'required|min:3|max:150',
            'content' => 'nullable|string'
        ]);

        $data['author'] = Auth::user()->name;
        $category = Category::findOrFail($request -> get('category_id'));
        $post = Post::make($data);

        $post -> category() -> associate($category);
        $post -> save();

        return redirect()->route('home');
    }
}
