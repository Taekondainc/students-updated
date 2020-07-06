<link rel="stylesheet" href="{{asset('css/index.css')}}">
<link rel="stylesheet" href="{{asset('css/subm.css')}}">
<link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
<link rel="icon" type="image/png" href="{{asset('css/images/logo.png')}}">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
@extends('layouts.profile')
@section('content')
<style>
    #task_link{
        width:auto;
        margin: 0px;
        height: unset;
    }
</style>
<script> $(document).ready(function () {
    if ($('html').css('background-image') != 'none') {

$(".ctop").css("background","white");

 $(".disp").css("border-bottom","3px solid white");
$("#submtt").css("border","2px solid white");
$("#ftestt ").css("border","2px solid white");
$("#ftestt ").css("background","black");
$("#assiment ").css("border","2px solid white");
$("#assiment ").css("background","black");
$(".astg").css("color","black");
$(".testts").css("color","black");
$(".ctop").css("color","black");
}else{
$("body").css("color","black");
$("form").css("color","white");
}



    $(".test").click(function () {
                $(".contente").hide();
                $(".tests").show();
                 $(".assignment").hide();
                 $(".assi").css("border-bottom", "0px solid black");
                $(".test").css("border-bottom","3px solid white");
                  $(".disp").css("border-bottom", "0px solid black");
            });
        });
        $(document).ready(function () {
            $(".disp").click(function () {
                $(".contente").show();
                 $(".tests").hide();
                  $(".assignment").hide();
                $(".disp").css("border-bottom", "3px solid white");
                 $(".assi").css("border-bottom", "0px solid black");
                 $(".test").css("border-bottom", "0px solid black");
            });
});
            $(document).ready(function () {
                        $(".assi").click(function () {
                            $(".assignment").show();
                            $(".tests").hide();
                             $(".contente").hide();
                              $(".assi").css("border-bottom", "3px solid white");
                            $(".disp").css("border-bottom", "0px solid black");
                            $(".test").css("border-bottom", "0px solid black");
                        });  });</script>
<div id="conta" > <div id="cont-linka"><a class="ai_assist"><img id="ai_assist" src="{{ asset('css/images/ai_assist.png') }}" alt="">
        <h5>Site Assistant</h5>
    </a></div>

<div style="display: flex; justify-content:space-evenly;">
        <a id="task_link" class="disp" style="border-bottom:3px solid black;color: black;" href="#">
            <img  id="img" src="{{ asset('css/images/subm.png') }}" alt=""><div> Submissions</div></a>
            <a id="task_link" class="test" href="#test" style="color: black;"><img id="img" src="{{ asset('css/images/test.png') }}" alt="">
               <div> Create Test</div></a>
            <a id="task_link" class="assi" href="#assi" style="color: black;">
                <img id="img" src="{{ asset('css/images/assi.png') }}" alt=""><div> Create Assignments</div></a>
         </div>
           <div class="contente" style="height:50px;margin-top:20px;" >
            <h1> Submissions</h1>
            <div class="apii">

            </div>
        </div>
        <div class="tests" style="height:auto;text-align:center;display:none;">
            <h1 id="ftestt" style="display:inline-block;border:2px solid black;width:80%;border-radius:20px;"> Test</h1>
            <div class="create-tes"><h2 style="padding:30px;">Do Your Tests Using Our forms or Send using PDFs </h2>
                <div class="testts" style="">
                    <h1  style="border-bottom:3px solid black;">Your Online Tests</h1>
                <div class="tess"> <div class="cvvv" style="height: 200px;overflow-y:scroll;"></div>
                <div class="separate" style="border-top:4px solid black;margin-top:10px;">
        <div><h1>Test Files</h1></div> <div class="ll" style="height: 200px;overflow-y:scroll;margin-top:4px;"></div></div></div> </div>


<div id="fprcv">


                          <form action="/testquestions" id="form" method="post" >
                            <h1 style="padding:5px;font-family:'Oswald', sans-serif ;">Question</h1>
<div id="alert"></div>
 @csrf
                          <div class="label_con">
        <select name="course" id="input_sub" placeholder="course content" style="background:white; text-align:center;
        width:100%;border:2px solid black;border-radius:10px;margin:0px" required>
            <option style="font-size:17px; text-align:center;font-weight: bold;border-radius:3px;"
            value="" disabled selected hidden>Choose course</option>
             <?php

use App\studentreg;
use Illuminate\Http\Request;
            $requestd = studentreg::where('uid',auth()->id())->get();
       ?>
       @foreach ($requestd as $requests)
   <option style="font-size:20px;text-align:center;font-weight: bold;border-radius:20px;" value=" {{$requests->cname}}">
       {{$requests->cname}}
    </option>

    @endforeach


        </select>
                          </div>


 <div style="display:inline-block;vertical-align:top;margin:0px;"> <h3 style="padding:10px;">Enter Answer here</h3>  </div>
 <textarea type="text" class="ghjk" cols-"30" name="question" id="input_sub" style="width:100%;height:90px;
  border-radius:3px;font-size:13px; border:2px solid black;display:inline-block;background:white;padding:8px;margin:0px;" required></textarea>

<div>

 <h3 style="padding:10px;">Enter Queston here</h3>
 <input type="text" name="question" id="input_sub" style="width:100%;font-size:20px;
 border:2px solid black;vertical-align:top;background:white;margin:0px;border-radius:0px;" placeholder="Question Number"></div>
 <div style="display:inline-block;width:100%;">
 <input id="clickd" class="formd" type="submit"
 style="border:2px solid black;border-radius:3px; width:100%;FONT-WEIGHT:BOLD;background:transparent;font-size:16px;
 vertical-align:top;margin-top:20px;background:white;" value=" Submit"></div>       </form></div>




         <div class="cl" style="">
                        <h1 style="font-family:'Oswald', sans-serif ;color:white;">Submit PDF</h1>
                         <form action="/testq" id="forms" method="post" enctype="multipart/form-data" style="font-family:'Oswald', sans-serif ;">
<div id="aler"></div>
 @csrf
<h3 style="padding:10px;">Enter Queston here</h3>
        <select name="course" id="input_sub" placeholder="course content" style="margin:0px;background:white; text-align:center;
        width:80%;border:2px solid black;border-radius:0px;" required>
            <option style="font-size:17px; text-align:center;font-weight: bold;border-radius:20px;" value="" disabled selected hidden>Choose course</option>
             <?php

            $requestd = studentreg::where('uid',auth()->id())->get();
       ?>
       @foreach ($requestd as $requests)
   <option style="font-size:20px;text-align:center;font-weight: bold;border-radius:20px;" value=" {{$requests->cname}}">
       {{$requests->cname}}
    </option>

    @endforeach


        </select>

<div><h3 style="padding:10px;">Enter Queston here</h3>
<input type="text" name="testn" id="input_sub" style="width:80%;margin:0px; border:2px solid black;text-align:center;vertical-align:top;display:inline-block;background:white;font-weight: bold;font-weight: bold;" placeholder="Test Name" required>
</div><div><h3 style="padding:10px;">Enter Queston here</h3> <input type="file" name="question" id="input_sub" style="width:80%;font-size:20px;
 border:2px solid black;vertical-align:top;display:inline-block;background:white;"></div>

 <div style="display:inline-block;width:100%;">
 <input id="click" class="formm" type="submit" style="border:2px solid black;border-radius:0px;
 FONT-WEIGHT:BOLD;background:transparent;font-size:16px;vertical-align:top;margin-top:20px;background:white;width:80%;" value=" Submit"></div>       </form>
                    </div>
             </div>
        </div>

        <div class="assignment" style="height:auto;text-align:center;display:none;">




            <h1 id="assiment" style="display:inline-block;border:2px solid black;width:100%;border-radius:20px;margin-top:20px;"> Assignments</h1>
        <h2 style="padding:30px;">Send using PDF or send Your Assignments Using Our form</h2>
       <div class="ctop" style="width:100%;">
        <h2 style="display:inline-block;border-bottom:2px solid black;">Assignments</h2>
       <div class="lisd" style="height: 200px;overflow-y:scroll;"></div>
          <div class="separate" style="border-top:4px solid black;margin-top:120px;">
        <div><h1>Assignment Files</h1></div>
        <div class="dxz" style="height: 200px;overflow-y:scroll;"></div>
    </div>



        </div>


        <div style="vertical-align:top;">

                   <form action="/assignments" id="assproj1" method="post"
                   style="font-family:'Oswald', sans-serif ;background:#4f589c;margin-top:10px;
                    width:100%;vertical-align:top;padding:20px;" enctype="multipart/form-data">
  <div class="alert"></div><h3><div style="width:100px;display:inline-block;"> Course</div></h3>
   <select name="course" id="input_sub" placeholder="course content" style="background:white; text-align:center;width:70%;border:2px solid black;border-radius:20px;" required>
            <option style="font-size:17px; text-align:center;font-weight: bold;border-radius:20px;" value="" disabled selected hidden>Choose course</option>
             <?php


            $requestd = studentreg::where('uid',auth()->id())->get();
       ?>
       @foreach ($requestd as $requests)
   <option style="font-size:20px;text-align:center;font-weight: bold;border-radius:20px;" value=" {{$requests->cname}}">
       {{$requests->cname}}
    </option>

    @endforeach


        </select>

<h3> <div style="display:inline-block; line-height:60px;"> Assignment Name</div>          </h3>
<input type="text" name="title" id="input_sub" style="width:70%;vertical-align:top; border:2px solid black;background:white;">
<div><h1>Assignment</h1></div>
<input type="file" name="assignment" id="input_sub"  style="width:70%;height:10%;padding:5px; border:2px solid black;vertical-align:top;display:inline-block;background:white;">
<div><button id="clickff" style="border:2px solid black; border-radius:3px;background:transparent;font-size:16px;vertical-align:top;margin-top:20px;background:white;"> Submit</button>
      </div>





                     </form>

                     </div>
        </div>

</div>
<div id="shp" style="background:rgb(0,0, 7,0.8);z-index:1;width:100%;height:100%;position:fixed;top:0px;display:none;">
<div id="h">

</div>
</div>
@endsection

<script src="{{ asset('tss/ts/slide.js')}}"></script>

@extends('layouts.sidebar')
