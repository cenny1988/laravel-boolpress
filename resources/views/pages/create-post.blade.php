@extends('layouts.main-layout')
@section('content')
    <form action="{{route('post.storePost')}}" method="POST">
        @method('POST')
        @csrf

        <h3>Crea qui il nuovo post:</h3>
        <div class="form-group row">
            <label for="title" class="col-md-4 col-form-label text-md-right">Titolo:</label>
            <div class="col-md-6">
                <input type="text" name="title">
            </div>
        </div>
        
        <div class="form-group row">
            <label for="sub_title" class="col-md-4 col-form-label text-md-right">Sottotitolo:</label>
            <div class="col-md-6">
                <input type="text" name="sub_title">
            </div>
        </div>
        
        <div class="form-group row">
            <label for="content" class="col-md-4 col-form-label text-md-right">Contenuto:</label>
            <div class="col-md-6">
                <textarea name="content" cols="30" rows="10"></textarea>
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary" value="Create">
                    Add
                </button>
                <a href="{{route('home')}}" class="btn btn-primary">
                    Indietro
                </a>
            </div>
        </div>
    </form>
@endsection