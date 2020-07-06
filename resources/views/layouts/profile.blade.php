<?php use App\inputcontroller;
use App\background; ?>
 <?php
$query=background::where("uid",Auth()->id())->get();
                           ?>  @foreach ($query as $requests)

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" style="background-image:url('{{asset('course-contents/files/backgrounds/'.$requests->image)}}');">
   @endforeach <!doctype html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'HLS') }}</title>
<link rel="icon" type="image/png" href="{{ asset('css/images/logo.png') }}">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
     <link href="{{ asset('css/style_app.css') }}" rel="stylesheet">
</head>
<style>

 @media only screen and (max-width: 986px) {
     .searchbar {
         display: none ;
     }
      #inp_search {
          display: none;
      }.navbar{
          padding-top:0px;
      }
      .content_r{
          width:180px;
      }
      #navbarDropdown{
          font-size: 10px;
      }

 }body{
      font-family:'Oswald',
    sans-serif;

 }
 html{
 backdrop-filter: blur(8px);
 }
 #ai_assist{
    background: white;
}
 #inp_search::placeholder{
     color:white;font-size:15px;padding:10px;}</style>

<body style="overflow-y:scroll;background:transparent; onload="showMyFace()"  >


  <div id="app">
        <nav class="navbar navbar-dark bg-white fixed-top  navbar-expand-sm  shadow-lg" style="z-index:1;" id="navbar-black">

             <div class="container">
             <div class="hamburger_menu" id="side_menu">
        <img id="hm_bg" src="{{asset('css/images/hm_bg.png')}}" > <img id="hm_bg2" style="display:none;" src="{{asset('css/images/hm_bg.png')}}" >
        </div>




    </div>    <div class="searchbar">
 <input style="border:2px white;display:inline-block;background:black;text-align:center;  background-image: url('css/images/search.png'); background-repeat:no-repeat;
     background-position:left;
  background-size:contain;color:white;font-size:15px;padding:10px;"
 class="form-control mr-sm-2 bg-black;" placeholder="Search" id="inp_search" form-control  type="text" name="search">
</div>
<div class="drag2"  style="">
     <img  id="altss"src="{{asset('css/images/alert.png')}}" width="30px" height="30px" style="cursor:pointer;" >
      <img  id="mtgs"  src="{{asset('css/images/mesagt.png')}}" width="35px" height="35px" style="vertical-align:top;cursor:pointer;" >
   <a id="close2"  > <div>close</div></a>   <div id="hytt" style=""><h4>Notifications</h4>
    <div id="cloop" style="overflow-y:scroll;height:140px;">
        </div></div>  </div>
 <div class="content_r">
           <!-- Right Side Of Navbar -->

                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <div class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle bg-black text-dark rounded" href="#" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false" v-pre>



                                <t style="color:white;">   <?php

                             $query=inputcontroller::where("uid",Auth()->id())->get();
                           ?>   @foreach ($query as $requests)



            <img src="{{asset('course-contents/files/avatar/'.$requests->file )}}" alt="" width="30px" height="30px"
             style="border-radius:50%;margin-top:-4px;border:1px solid white;float:left;" title="" />


     @endforeach  {{ Auth::user()->name }}</t>  <span id="gt" class="caret bg-light" style="color:whit;" ></span>
                               <a id="tg" style="display:none;" href="#">Home  </a>
                                </a>
                                <div class="dropdown-menu dropdown-menu" aria-labelledby="navbarDropdown">
                                <div class="cl-div"><a id="vg" class="dropdown-item" href="/home">Home</a> </div>
                                    <div class="cl-div"> <a id="vg" class="dropdown-item" href="/Account">Account </a> </div>
                                    <div class="cl-div"> <a id="vg" class="dropdown-item" href="/Setting">Preferences </a> </div>

                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>


</div>
                        @endguest
                    </ul>
                </div>

        </nav>

       </div>  <main class="py-4" style="">
            @yield('content')

        </main>
        @extends('layouts.footer')
</body> <script src="{{ asset('tss/ts/dashboard.js')}}"></script>
<script src="{{ asset('tss/ts/ai-chabot.js')}}">
</script><script src="https://code.responsivevoice.org/responsivevoice.js?key=adxAs4Tb"></script>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script>
        if ($('html').css('background-image') != 'none') {
 $("body").css("color","white");
}else{

}
       //  $("div").click(function () {
          //   var offset = $(this).offset();
         //   var xPos = offset.left;
       //  //   var yPos = offset.top;
        //   console.log('x: ' + xPos+ 'y: ' + yPos);
       //  });
       // $("div").draggable({

        //      drag: function(){
         //   var offset = $(this).offset();
         //   var xPos = offset.left;
          //  var yPos = offset.top;
          // console.log('x: ' + xPos+ 'y: ' + yPos);
          //  $(this).css("background","blue");
          //  var g=$(this).attr("id");
          // console.log(g);
      //  }


//});

        $("body").droppable({
            drop: function(event, ui) {

            },
            over: function(event, ui) {

            },
            out: function(event, ui) {

            }
        });

         //$( "#nodrag" ).draggable({ cancel: ".cloa" });
         // $( "#nodrag .cloa" ).disableSelection();

           $(".cloa").droppable({
            drop: function(event, ui) {

            },
            over: function(event, ui) {

            },
            out: function(event, ui) {

            }
        });// $(".drag2").draggable(); //  $(".contente").draggable({ });
      //   $( ".resize" ).resizable();
         $("[id=task_link]").draggable({ });
          $(".testts").draggable({});
             $(".formm").draggable({});
             $(".cl").draggable({});
             $(".formm").draggable({});


             $(".ctop").draggable({});
             $(".assignmenttt").draggable({});


              $(".disp").draggable("disable");
             $(".test").draggable("disable");
              $(".assi").draggable("disable");

       //  $( ".resize" ).droppable();

    </script>
</html>
<div class="videocontainer">
     <div style="width:100%;font-size:23px;padding-top:50px;color:white;text-align:center;">

   <div id="content" style="font-size:24px;">
   <div class="btn-danger">  Rotate screen if on mobile.</div></div><br>

        <a id="intro"  href="" style="color:white;margin-left:50px;">
               Intro
         <a id="close" href=""style="color:white;margin-left:50px;border:3px solid white;padding:3px;border-radius:10px;">Close</a>   </a></div>
        <div style="width:100%;font-size:23px;padding-top:50px;color:white;text-align:center;">
            <a id="create"  href="" style="color:white;margin-left:30px;">Courses</a>
            <a id="tasks"  href="" style="color:white;margin-left:30px;">Tasks</a>
            <a id="m"  href="" style="color:white;margin-left:30px;">Messaging</a>
            <a id="a"  href="" style="color:white;margin-left:30px;">Accounts</a>
            <a id="cl"  href="" style="color:white;margin-left:30px;">Classroom</a>
            <a id="s"  href="" style="color:white;margin-left:30px;">Submission</a>
            <a id="f"  href="" style="color:white;margin-left:30px;">Forum</a>
       <a id="extra"  href="" style="color:white;margin-left:30px;">
        Extras</a>
        </div>

 <div class="intro" style=" padding-top:40px;">
       <div class="contvid1" style="width:400px;float:left;">
        <h1><div> Introduction</div>         </h1>
        <div id="content" style="font-size:24px;">
      Welcome to HLS systems.<br>This voiceover AI is to help assist you in navigating the site.</div></div>
         <img src="{{ asset('css/gifs/intro.gif') }}"
        id="aiimage" style="">
        </div>

 <div class="extra" style=" padding-top:40px;">
       <div class="contvid1" style="width:400px;float:left;">
        <h1><div> Extras</div>         </h1>
        <div id="extras" style="font-size:24px;">
       you can see  messages and notifications by clicking the top of the screen where the red messages
         and alarms icons are, also if you think the layout is too much , you can edit the layout by
         dragging the items around,
this is to ensure that you enjoy using the platform.Also you can toggle the view by clicking the menu bar
 at the top left hand of screen.
you can watch the gif for assistance. </div></div>
         <img src="{{ asset('css/gifs/extras.gif') }}"
         id="aiimage" style="vertical-align:top;">
        </div>


     <div class="create" style="display:none; padding-top:40px;">
       <div class="contvid1" style="width:400px;float:left;">
        <h1><div>   Courses</div>         </h1>
        <div id="content1" style="font-size:24px;">
         To view your courses , just simply click the menu button
          at the top left of your screen or if you haven't toggled your view , click courses to view all courses or go to the hover section which will let you view your courses individuall
. viola you have you courses. You can watch the G I F  for Assistance;
        </div></div>
         <img src="{{ asset('css/gifs/courses.gif') }}"
          id="aiimage" style="">
        </div>

          <div class="tasks" style="display:none; padding-top:40px;">
         <div id="contvid" style="width:400px;float:left;"><h1>Tasks</h1>
          <div id="content2" style="font-size:24px;">
         To create your Task , just simply click the menu button
          at the top left of your screen or if you haven't toggled your view ,click tasks to access Tasks or click on the calendar to view Tasks
          alongside the date or simply click edit tasks to edit or delete tasks.
           You can watch the G I F  for Assistance;
        </div></div>
         <img src="{{ asset('css/gifs/tasks.gif') }}"
          id="aiimage" style="">
        </div>

          <div class="m" style="display:none; padding-top:40px;">
         <div id="contvid" style="width:400px;float:left;"><h1>
             Mesages</h1>
             <div id="Messages" style="font-size:24px;">
        Your messages can be Accessed by clicking the name link
    inside the menu. The messages page was design to give a chat option where you  can search for
contacts then message them or you can view your lecturers by course and Message them. You also have the option of creating groups for collaborating on assignments and other
tasks.You can watch the G I F  for Assistance;
 </div></div>
         <img src="{{ asset('css/gifs/messages.gif') }}"  id="aiimage"  style=""></div>


          <div class="a" style="display:none; padding-top:40px;">
         <div id="contvid" style="width:400px;float:left;"><h1>Accounts</h1>
         <div id="account" style="font-size:24px;">
        You can edit your account by clicking the link in the name square at the top.
         There you can add an avatar or edit personal information.
    You can watch the G I F  for Assistance; </div></div>
         <img src="{{ asset('css/gifs/accounts.gif') }}"  id="aiimage" style=""></div>

          <div class="cl" style="display:none;padding-top:40px;">
         <div id="contvid" style="width:400px;float:left;"><h1>ClassRoom</h1>
         <div id="class" style="font-size:24px;">
     You can access the the classroom by clicking the link ,
      also you can access other features such as class progress and all uploaded resources.
    You can watch the G I F  for Assistance; </div></div>
         <img src="{{ asset('css/gifs/classrom.gif') }}"  id="aiimage" style=""></div>

          <div class="s" style="display:none;padding-top:40px;">
         <div id="contvid" style="width:400px;float:left;"><h1>Submissions</h1>
          <div id="cont" style="font-size:24px;">
     You can access the  submissions such as assignments and  tests using this page , you were given the option to upload pdf or enter answers.
 you can also view grades here also.    You can watch the G I F  for Assistance; </div></div>
         <img src="{{ asset('css/gifs/submissions.gif') }}"  id="aiimage" style=""></div>

          <div class="f" style="display:none;padding-top:40px;">
         <div id="contvid" style="width:400px;float:left;"><h1>Forum</h1>
         <div id="for" style="font-size:24px;">
YOU can access the forum by entering the menu at the top right of screen .
the forum is for you to share idea or ideas which you need solving or to give solutions.
 You can watch the G I F  for Assistance; </div></div>
         <img src="{{ asset('css/gifs/forum.gif') }}"  id="aiimage"  style=""></div>
  <select name="" id="voiceselection" >
      <option value="UK English Female"> UK English Female</option>

      <option value="Fallback UK Female">Fallback UK Female</option>

         </select>  </div>
