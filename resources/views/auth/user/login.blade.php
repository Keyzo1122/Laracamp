@extends('layouts.appLogin')

@section('content')
    <section class="login-user">
        <div class="left">
            <img src="/assets/images/ill_login_new.png" alt="">
        </div>
        <div class="right">
            <a href="{{ route('welcome') }}">
                <img src="/assets/images/logo.png" class="logo" alt="">
            </a>
            <h1 class="header-third">
                Start Today
            </h1>
            <p class="subheader">
                Because tomorrow become never
            </p>
            <p>
                <a class="btn btn-border btn-google-login" href="{{ route('user.login.google') }}">
                    <img src="/assets/images/ic_google.svg" class="icon" alt=""> Sign In with Google
                </a>
            </p>
            <img src="/assets/images/people.png" class="people" alt="">
        </div>
    </section>
@endsection
