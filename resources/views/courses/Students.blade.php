<link rel="stylesheet" href="{{asset('css/index.css')}}">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
<link rel="icon" type="image/png" href="{{asset('css/images/logo.png')}}">
<meta name="csrf-token" content="{{ csrf_token() }}">
@extends('layouts.profile')
@section('content')
<style>#conta{
padding-top: 80px;
}</style>
<div id="conta" style="height: 100%;padding-top:80px;"><a class="ai_assist"><img id="ai_assist" src="{{ asset('css/images/ai_assist.png') }}" alt="">
        <h5>Site Assistant</h5>
    </a>
    <h2>
        Create your personal tutorial class which you can Administrate and enjoy.
    </h2>
</div>
@endsection
@extends('layouts.sidebar')