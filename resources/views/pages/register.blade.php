@extends('layouts.app')
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
@section('nav')
@include('includes.nav')
@endsection

@section('body')
<div class="wrapper">

    <div class="content">
        <div id="body">




<!-- REGISTRATION FORM -->
<div class="text-center" style="padding:50px 0">
    <div class="logo">register</div>
    <!-- Main Form -->
    <div class="login-form-1">
        <a href="/twitter"><i class="fa social-link fa-twitter fa-2x"></i></a>
        <a href="/facebook"><i class="fa social-link fa-facebook fa-2x"></i></a>
        <a href="/github"><i class="fa social-link fa-github fa-2x"></i></a>

        <form id="register-form" method="post" class="text-left">
            <div class="login-form-main-message"></div>
            <div class="main-login-form">
                <div class="login-group">
                    <div class="form-group">
                        <label for="reg_email" class="sr-only">Email</label>
                        <input type="text" class="form-control" id="reg_email" name="email" placeholder="email">
                    </div>
                    <div class="form-group">
                        <label for="reg_username" class="sr-only">Email address</label>
                        <input type="text" class="form-control" id="reg_username" name="username" placeholder="username">
                    </div>
                    <div class="form-group">
                        <label for="reg_password" class="sr-only">Password</label>
                        <input type="password" class="form-control" id="reg_password" name="password" placeholder="password">
                    </div>
                    <div class="form-group">
                        <label for="reg_password_confirm" class="sr-only">Password Confirm</label>
                        <input type="password" class="form-control" id="reg_password_confirm" name="password_confirmation" placeholder="confirm password">
                    </div>
                    
                    <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />

                    
                </div>
                <button type="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>
            </div>
            <div class="etc-login-form">
                <p>already have an account? <a href="/login">login here</a></p>
            </div>
        </form>
    </div>
    <!-- end:Main Form -->
                @if($errors->any())
                @include('includes.errors')

                @endif
</div>
</div>
</div>
@endsection

@section('footer')
@include('includes.footer')
@endsection

