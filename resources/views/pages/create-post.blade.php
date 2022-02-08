@extends('layouts.main-layout')
@section('content')
    <form action="{{route('post.storePost')}}" method="POST">
        @method('POST')
        @csrf

        <h3>Crea qui il nuovo post:</h3>
        {{-- titolo --}}
        <div class="form-group row">
            <label for="title" class="col-md-4 col-form-label text-md-right">Titolo:</label>
            <div class="col-md-6">
                <input type="text" name="title">
            </div>
        </div>
        
        {{-- sottotitolo --}}
        <div class="form-group row">
            <label for="sub_title" class="col-md-4 col-form-label text-md-right">Sottotitolo:</label>
            <div class="col-md-6">
                <input type="text" name="sub_title">
            </div>
        </div>
        
        {{-- categoria --}}
        <div class="form-group row">
            <label for="category" class="col-md-4 col-form-label text-md-right">Categoria:</label>
            <div class="col-md-6">
                <select name="category"> 
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}"> {{$category->name}} </option>                       
                    @endforeach
                </select>
            </div>
        </div>
        
        {{-- contenuto --}}
        <div class="form-group row">
            <label for="content" class="col-md-4 col-form-label text-md-right">Contenuto:</label>
            <div class="col-md-6">
                <textarea name="content" cols="30" rows="10"></textarea>
            </div>
            {{-- tags --}}
            <div class="col-md-2">
                <h5>Tags:</h5>
                @foreach ($tags as $tag)
                    <input type="checkbox" name="tags[]" value="{{$tag->id}}"> {{$tag->name}} <br>
                @endforeach
            </div>
        </div>

        {{-- buttons --}}
        <div class="form-group row mb-0">
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary" value="CREATE">
                    Add
                </button>
                <a href="{{route('home')}}" class="btn btn-primary">
                    Indietro
                </a>
            </div>
        </div>
    </form>
@endsection