<?php use App\inputcontroller;
use App\background; ?><link rel="stylesheet" href="{{asset('css/index.css')}}">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
<link rel="icon" type="image/png" href="{{asset('css/images/logo.png')}}">
 <link href="{{ asset('css/style_app.css') }}" rel="stylesheet">
<meta name="csrf-token" content="{{ csrf_token() }}">
@extends('layouts.profile')
@section('content')
<style>
body{
    width:100%;
}
.avatar-wrapper {
    position: relative;
    height: 200px;
    width: 200px;
    margin: 50px auto;
    border-radius: 50%;
    border:1px solid white;
    overflow: hidden;
    box-shadow: 1px 1px 15px -5px black;
    transition: all .3s ease;
}
    .avatar-wrapper:hover {
        transform: scale(1.05);
        cursor: pointer;
    }

   .avatar-wrapper:hover .profile-pic {
        opacity: .5;
    }

   .avatar-wrapper .profile-pic {
        height: 100%;
        width: 100%;
        transition: all .3s ease;
   }
       .avatar-wrapper .profile-pic:after {

            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            position: absolute;
            font-size: 190px;
            background: #ecf0f1;
            color: #34495e;
            text-align: center;
        }


 .avatar-wrapper .profile-pic .upload-button {
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
    }
      .avatar-wrapper .upload-button .fa-arrow-circle-up {
            position: absolute;
            font-size: 234px;
            top: 60px;
            left: 60;
            text-align: center;
           opacity:0.7;
            transition: all .3s ease;
            color: #34495e;

        }




</style>
 <div class="conta" style="z-index:-1;">
       <a  id="profile" class="list-group-item bg-dark text-white" style="z-index:-1;letter-spacing:2px; text-shadow:0px;color:white;font-weight:normal;text-align:center;border-radius:0px 0px 0px 10px;" href="#">

                            <img id="ai_assist" class="ai_assist" src="{{ asset('css/images/ai_assist.png') }}" alt=""
                             style="background:white;padding-top:1px;border-radius:50%;z-index:-1;">
        <h5>Site Assistant</h5>

  </a></div>


 <h1 style="background:black;color:white;text-align:center;">Setup Wallpaper</h1>
 <div class="list-group-item bg-dark text-white" Style="z-index:0;letter-spacing:2px; text-shadow:0px;color:white;font-weight:normal;text-align:center;border-radius:10px 0px 0px 0px;" >
           <form action="/backgroundimage" method="post" class="avatar" style="text-align:center;display:inline-block;width:100%;" enctype="multipart/form-data">
       @csrf
     <h1>  <div class="current" style="color:white;background:green;"></div></h1>
       <div class="avatar-wrapper">
	<img class="profile-pic"  <?php

                             $query=background::where("uid",Auth()->id())->get();
                           ?>   @foreach ($query as $requests)





    src="{{asset('course-contents/files/backgrounds/'.$requests->image)}}"  @endforeach />
	<div class="upload-button">
		<img class="fa fa-arrow-circle-up" aria-hidden="true" src="{{ asset('css/images/upload.png') }}" style="cursor:poitner;">
	</div>
	<input class="file-upload" type="file" name="file" accept="image/*"  required/>
</div>

<button type="submit" class="btn btn-light" style="margin-top:-10px;letter-spacing:2px;font-weight:bold;">
   Upload</button>
</form>
</div>

<script src="{{ asset('tss/ts/background.js')}}"></script>
@endsection
@extends('layouts.sidebar')
