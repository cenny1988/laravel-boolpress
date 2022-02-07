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

<form action="{{route('register')}}" method="POST">
    
    @method('POST')
    @csrf


    <h3>Registrati qui:</h3>
    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-right">Nome</label>
        <div class="col-md-6">
            <input type="name" name="name">
        </div>
    </div>

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
    
    <div class="form-group row">
        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Conferma password</label>
        <div class="col-md-6">
            <input type="password" name="password_confirmation">
        </div>
    </div>

    <div class="form-group row mb-0">
        <div class="col-md-8 offset-md-4">
            <button type="submit" class="btn btn-primary" value="REGISTER">
                Registrati
            </button>
            <a href="{{route('home')}}" class="btn btn-primary" value="REGISTER">
                Indietro
            </a>
        </div>
    </div>

</form>
    
@endsection