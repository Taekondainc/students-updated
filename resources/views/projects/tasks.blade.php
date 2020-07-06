
<link rel="stylesheet" href="{{asset('css/content/course.css')}}"><link rel="stylesheet" href="{{asset('css/index.css')}}">
<link rel="stylesheet" href="{{asset('css/tasks.css')}}">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
<link rel="icon" type="image/png" href="{{asset('css/images/logo.png')}}">

@extends('layouts.profile')
@section('content')
<div id="conta" style="">
    <a class="ai_assist">
        <img id="ai_assist" src="{{ asset('css/images/ai_assist.png') }}" alt="">
        <h5>Site Assistant</h5>
    </a>


<div class="form_view_task" style="margin:0px;margin-top:0;">
<h1 id="fpth">Here are your Tasks</h1>
   <div class="da" style="color:red;"></div>
    <div id="cont_view_task"  style="margin:0px;margin-top:0;">

        <div class="cont_view">
             <figure>




            </figure>
        </div>
    </div>
</div>

<div class="llt" style="">

</div></div>
<script src="{{ asset('tss/ts/yt.js') }}">
</script>
@endsection
@extends('layouts.sidebar')
