@extends('layouts.app')

@section('nav')
@include('includes.nav')
@endsection

@section('body')
<div class="wrapper">

    <div class="content">
        <div id="body">
        <div class="logo text-center">Available categories</div>

  <div class="text-center video-categories">
    @if(count($categories) < 1)
    @include('includes.nocontent')
    @else
    @foreach($categories as $category)
    <a href="/categories/{{ $category->category }}"> {{ $category->category }} ({{$category->total}}) </a>
    @endforeach
    @endif
</div>
</div> </div> 
@endsection

@section('footer')
@include('includes.footer')
@endsection
