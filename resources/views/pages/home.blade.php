@extends('layouts.main-layout')
@section('content')

{{-- Visualizza errori nella digitazione dei campi form precedenti --}}
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@guest
    {{-- sezione login --}}
    <form action="{{route('login')}}" method="POST">
        @method('POST')
        @csrf


        <h3>Effettua il tuo Login:</h3>
        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>
            <div class="col-md-6">
                <input type="email" name="email">
            </div>
        </div>

        <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
            <div class="col-md-6">
                <input type="password" name="password">
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary" value="LOGIN">
                    Login
                </button>
                
                <a href="{{ url('/register') }}" type="submit" class="btn btn-primary" value="LOGIN">
                    Registrati
                </a>
            </div>
        </div>

    </form>

    
@else
    {{-- Componente Vue --}}
    {{-- <posts-component></posts-component> --}}
    <a class="btn btn-info my-3" href="{{route('post.createPost')}}">Add Post</a>

@endguest
    {{-- caricamento posts --}}
    <h3 class="h3">Lista Posts:</h3>
    @foreach ($posts as $post)
        <div class="mt-2"> 
            Titolo: {{$post->title}} - Sottotitolo: {{$post->sub_title}} <br> 
            - Autore: {{$post->author}} - Data: {{$post->created_at->format('d/m/Y H:s')}} <br> {{-- formato ora cambiato  --}}
            - Categoria: {{$post->category->name}} <br>
            - Tags: 
            @foreach ($post->tags as $tag)
                <span> #{{$tag -> name}} </span>
            @endforeach
        </div>
    @endforeach


@endsection