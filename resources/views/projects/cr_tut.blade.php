<link rel="stylesheet" href="{{asset('css/index.css')}}">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
<link rel="icon" type="image/png" href="{{asset('css/images/logo.png')}}">
<meta name="csrf-token" content="{{ csrf_token() }}">
@extends('layouts.profile')
@section('content')
<style>
</style>
<div id="conta" style="height: 20%;text-align:center;"><a class="ai_assist"><img id="ai_assist" src="{{ asset('css/images/ai_assist.png') }}" alt="">
        <h5>Site Assistant</h5>
    </a>
    <h2 id="llkd" style="color: black;background-color:white;">
       Your tutorial classes.
    </h2>


</div> <div class="div" style="text-align: center; font-family:'Oswald', sans-serif ;display:block;padding-top:100px;">
      <form action="/vtt" id="pol" method="post">  <select name="course" id="input_sub" class="plo" placeholder="course content"
        style="background:black;" required>
        <option style="font-size:17px;color:white; text-align:center;font-weight: bold;border-radius:20px;" value="" disabled selected hidden>Choose course</option>
             <?php

use App\courses_ev;
 use App\studentreg;
$request=studentreg::where("uid",auth()->id())->get();
foreach ($request as $cours) {


             $c=$cours->cname;


            $requestd = courses_ev::where('cname',$c)->get();
       ?>
       @foreach ($requestd as $requests)
   <option style="font-size:20px;text-align:center;color:white;border-radius:20px;" value=" {{$requests->cname}}">
       {{$requests->cname}}
    </option>

@endforeach <?php  } ?>
       </select> <div><input type="submit" id="input_sub3" value="Find Tutorial" style="width:40%;"></div>
      </form>
       <div  class="tutorials">
<div class="div">
        <h1 style="border-bottom:2px solid black; ">TUTORIALS</h1>
        </div>
     <h1><div class="h1"></div></h1>
        <div class="containxxx"></div>
         </div>
    </div>

<script src="{{ asset('tss/ts/tutorial.js')}}">

</script>
<script>
      if ($('html').css('background-image') != 'none') {

 $(".tutorials").css("border","2px solid white");
 $("#bord-bttm").css("border-bottom","2px solid white");
 $("#button4").css("color","white");
  $("#button3").css("color","white");
}else{

}
</script>
@endsection
@extends('layouts.sidebar')
