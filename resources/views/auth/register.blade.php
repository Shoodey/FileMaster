@extends('app')

@section('title', '- Inscription')

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="page-header">
                <h1>S'inscrire</h1>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-10 col-md-offset-1">

                    {!! BootForm::open()->post()->action(url('auth/register')) !!}
                    <div class="row">
                        <div class="col-md-6">
                            {!! BootForm::text(null, 'firstname')->required()->value(old('firstname'))->addClass('floating-label')->placeholder('Prénom') !!}
                        </div>
                        <div class="col-md-6">
                            {!! BootForm::text(null, 'lastname')->required()->value(old('lastname'))->addClass('floating-label')->placeholder('Nom') !!}
                        </div>
                    </div>

                    {!! BootForm::email(null, 'email')->required()->value(old('email'))->addClass('floating-label')->placeholder('Email') !!}

                    <div class="row">
                        <div class="col-md-6">
                            {!! BootForm::password(null, 'password')->required()->value(old('password'))->addClass('floating-label')->placeholder('Mot de passe') !!}
                        </div>
                        <div class="col-md-6">
                            {!! BootForm::password(null, 'password_confirmation')->required()->value(old('password_confirmation'))->addClass('floating-label')->placeholder('Confirmez le mot de passe') !!}
                        </div>
                    </div>

                    {!! BootForm::submit('S\'inscrire')->class('btn btn-primary center-block') !!}

                    {!! BootForm::close() !!}

        </div>
    </div>


@endsection