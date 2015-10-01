@extends('app')

@section('title', '')

@section('content')
    <div class="jumbotron">
        <h1>Hello !</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aliquam doloribus est fugit itaque nobis sequi. Adipisci deleniti expedita sint?</p>
        <p><a class="btn btn-primary btn-lg" href="{{ url('auth/login') }}">Login</a></p>
    </div>
@endsection