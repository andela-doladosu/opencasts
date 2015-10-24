@extends('layouts.app')

@section('nav')
@include('includes.nav')
@endsection

@section('body')
 <div class="wrapper">
    <div class="content">
        <div id="body">

            <div class="text-center">   
                <p class="logo"> {{ $video->title }} </p>
                <p> {{ $video->description }} </p>
                    <iframe src="{{ $video->url }}" width="800" height="500"></iframe>
            </div>
 @endsection

@section('footer')
@include('includes.footer')
@endsection