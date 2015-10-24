@extends('layouts.app')

@section('nav')
@include('includes.nav')
@endsection

@section('body')
@include('includes.editProfile')

<img src=" {{ $user->avatar }}" id="img-update">
@endsection

@if(session()->has('data'))
<p>Success!</p>
@endif

@section('footer')
@include('includes.footer')
@endsection
