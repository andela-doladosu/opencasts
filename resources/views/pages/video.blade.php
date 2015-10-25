@extends('layouts.app')

@section('nav')
@include('includes.nav')
@endsection

@section('body')
 <div class="wrapper">
    <div class="content">
        <div id="body">

            <div class="text-center"> 
                            <p class=""> <a href="/categories/{{ $video->category }} ">More {{ $video->category }} videos </a></p>
  
                <p class="logo"> {{ $video->title }} : {{ $video->description }} </p>
                    <iframe src="{{ $video->url }}?autoplay=1" width="800" height="500"></iframe>
            </div>
            </div>
            </div>
 @endsection

@section('footer')
@include('includes.footer')
@endsection