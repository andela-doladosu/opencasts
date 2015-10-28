@extends('layouts.app')

@section('nav')
@include('includes.nav')
@endsection

@section('body')
@include('includes.editprofile')

<img src=" {{ $user->avatar }}" id="img-update">
@if(session()->has('data'))
<p class="logo">Profile updated!</p>
@endif
</div> </div> </div>
@endsection



@section('footer')
@include('includes.footer')
@endsection
