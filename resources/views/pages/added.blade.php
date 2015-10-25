


@extends('layouts.app')

@section('nav')
@include('includes.nav')
@endsection

@section('body')
 <div class="wrapper">
    <div class="content">
        <div id="body">

 @if(isset($video)) 
 <div class="text-center">   
    <p class="logo"> Your video has been added <a href="/new">add another</a></p>
       <iframe src="{{ $video['url'] }}" width="800" height="500"></iframe>
</div>

@endif
</div></div>
 @endsection

@section('footer')
@include('includes.footer')
@endsection