@extends('app')

@section('title', '- Connexion')

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="page-header">
                <h1>Se connecter</h1>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-10 col-md-offset-1">

            {!! BootForm::open()->post()->action(url('auth/login')) !!}

            {!! BootForm::email(null, 'email')->required()->value(old('email'))->addClass('floating-label')->placeholder('Email') !!}

            {!! BootForm::password(null, 'password')->required()->value(old('password'))->addClass('floating-label')->placeholder('Mot de passe') !!}

            <div class="checkbox checkbox-primary">
                <label>
                    <input type="checkbox" name="remember"> Se souvenir de moi
                </label>
            </div>

            {!! BootForm::submit('Se connecter')->class('btn btn-primary center-block') !!}

            {!! BootForm::close() !!}

        </div>
    </div>


@endsection