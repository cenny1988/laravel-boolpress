<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;
use App\Category;
use App\Tag;

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
        $tags=Tag::all();
        $categories=Category::all();
        return view('pages.create-post',compact('categories', 'tags'));
    }

    public function storePost(Request $request)
    {
        // recupero i dati dal form
        $data = $request -> validate([
            'title' => 'required|string',
            'sub_title' => 'required|min:3|max:150',
            'content' => 'nullable|string'
        ]);

        // aggiungo autore al nuovo data
        $data['author'] = Auth::user()->name;

        // cerco la categoria selezionata e faccio il make del post
        $category = Category::findOrFail($request -> get('category'));
        $post = Post::make($data);

        // associo al post la categoria creando la relazione e salvo
        $post -> category() -> associate($category);
        $post -> save(); // <--- questa salva sulla tabella post

        // qui cerco i tags selezionati dal form li associo al post creando la relazione 
        // ND associate() per relazioni 1 a n 
        // attach()per relazioni n a n
        $tags = Tag::findOrFail($request -> get('tags'));
        $post -> tags() -> attach($tags);

        $post -> save(); // <--- questa salva sulla tabella pivot

        return redirect()->route('home');
    }
}
