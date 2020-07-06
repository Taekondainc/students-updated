<link rel="icon" type="image/png" href="{{asset('css/images/logo.png')}}">
<style>
    .sdd{
        border-radius:4px;
        border:2px solid black;
    }
.opp::-webkit-scrollbar-thumb {
    border-radius: 10px;
    cursor: pointer;
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, .3);
    background-color:#362c2d;
}

.opp::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
    border-radius: 10px;
    background-color: #F5F5F5;
}

.opp::-webkit-scrollbar {
    width: 12px;
    background-color:transparent;
    cursor: pointer;
}
.did::-webkit-scrollbar-thumb {
    border-radius: 10px;
    cursor: pointer;
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, .3);
    background-color:#362c2d;
}

.did::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
    border-radius: 10px;padding:.5px;
    background-color: #F5F5F5;
}

.did::-webkit-scrollbar {
    width: 12px;
    background-color:transparent;
    cursor: pointer;
}

#scl::placeholder{
color:dimgray;font-family:'Oswald', sans-serif ;
}
.input-group{
    width:98%;
    padding: 15px;
}
</style>
<div id="content_container-div" style="font-family:'Oswald', sans-serif ;" >

    <div class="ccv ">
    <div style="" class="cod">
<a class="navbar-brand" href="{{ url('/') }}">
 <img src="{{asset('css/images/logoc.png')}}" width="100px" height="50px;" ></a></div>
 <br>
<div id="close3"  >x</div>


     <form action="/searc" method="get" id="ppl" >
 <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1" style="background:transparent;"> <img  src="{{asset('css/images/search.png')}}" width="23px" height="23px"> </span>
      </div>
      <input type="search"name="key" class="form-control" placeholder="Search Courses" id="scl" aria-label="Username" aria-describedby="basic-addon1">
    </div>
</form>
<div class="matt">
<div class="did" style="width:90%;margin:10px;display:none;height:130px;overflow-y:scroll;text-align: center;background:#4f589c;border-radius:4px;">

 <div class="fol" style="font-weight:normal;margin-right:10px;"></div>

</div> <div class="cla">
 <div class="con" style="display:none;background:#4f589c;width:90%;margin:10px;padding:3px;border-radius:3px;">
<div id="ale" style="font-size:20px;color:white;"></div>
    <form action="/reg" id="reg" method="Post" id="submit-code" style="position:relative;top:0px;">
 @csrf<div class="input-group">

      <input style="background:white;border:1px solid black;border-radius:5px;" type="text"
      name="Code" class="form-control" placeholder="Enter Code" id="scl" aria-label="Username" aria-describedby="basic-addon1">
    </div>
<input type="submit" value="Submit" style="background:black;border:1px solid black;color:white;font-weight:normal;font-size:14px;letter-spacing: 2px;border-radius:5px;">
</form>
<div class="cancel" style="padding:6px;border-radius:4px;width:70%;display:inline-block;color:white;border:1px solid white;">Cancel</div>    </div>


</div></div>
<div class="didd"  style="display:block;text-align: center;background:#4f589c;"><a href="/messages">
    <img src="{{asset('css/images/messages.png')}}" style="width:30px;height:30px;">Messages</a></div>

  <div class="didd" id="drop" style="display:block;text-align: center;background:#4f589c;">

            <div class="nav-link dropdown-toggle text-white" style="padding:0px;" >
            <!--    <a id="y" style="diplay:block;"  href="/course"><--><a href="/course" ">
         <img src="{{asset('css/images/course.png')}}" style="width:30px;height:30px;">   Courses</a><span id="gt" class="caret bg-success" ></span>
            </div>

         <div class="dropcontent1" style="display:none;text-align:center;width:100px;margin-right:25px;" >

<div class="cff"style="margin:10px;"><h4><b style="color:white;">Courses:</b></h4></div>
  <div class="opp" style="overflow-y:scroll; overflow-x:none; height:150px;width:130px;margin-right:10px;">
     <?php

use App\courses_ev;
use App\studentreg;
use Illuminate\Http\Request;
            $request= studentreg::where('uid',auth()->id())->get();
            foreach ($request as $cour) {
               $c=$cour->cname;
               $requestd=courses_ev::where('cname',$c)->get();

       ?>
       @foreach ($requestd as $requests)
     <div class="sdd" style="background:#4f589c;margin-right:25px;padding:10px;width:116px;margin-top:10px;overflow-x:none; ">
        <a id="y" style=" margin-bottom:2px;margin-left:-5px;background:rgba(1, 13, 26, 0.63);display:inline-block;text-align:left;width:100px;text-align:center;border-radius:3px; border:1.5px solid white;padding:3px;" href="/ht/{{$requests->id}}/content">

       {{$requests->cname}}

    </a>

    </div>
@endforeach <?php }?>
    </div>
  </div></div>




<div class="didd" id="classroom" style="display:block;text-align: center;background:#4f589c;">
     <div class="nav-link dropdown-toggle text-white" style="padding:0px;" >
        <a href="Classroom/"> <img src="{{asset('css/images/classrom.png')}}" style="width:27px;height:27px;margin:0px;">Classroom</a>
 <span id="gt" class="caret bg-success" ></span></div>
 <div class="cvdd" style="display:none;margin-top:5px;" >

<div class="opp"  style="text-align: center; margin-bottom:3px;"><a href="/cr_tut" style="width:100px;">Tutorials</a></div>
<div class="opp"  style="text-align: center;"><a href="/progress" style="border-radius:3px;width:100px;">Course Progress</a></div>
<div class="opp"  style="text-align: center; margin-top:3px;">  <a href="/resources"> <img src="{{asset('css/images/resour.png')}}" style="width:30px;height:30px;margin-top:-3px;">Resources</a></div>

 </div>
 </div>



 <div class="didd" id="llp" style="display:block;text-align: center;background:#4f589c;">
     <div class="nav-link dropdown-toggle text-white"  style="padding:0px;margin-bottom:3px;" >
            <!--    <a id="y" style="diplay:block;"  href="/course"><--><a href="/SUBM">
                <img src="{{asset('css/images/file.png')}}" style="width:30px;height:30px;margin:3px;vertical-align:top;margin-top:-3px;">Submissions</a></div>
     <div class="dropcontent3" style="display:none;text-align:center;width:100px; " >

        <div class="opp"  style="text-align: center; margin-bottom:3px;"><a href="/grades" style="width:100px;">Grades</a></div>
         <div class="opp"  style="text-align: center;margin-bottom:3px;"><a href="/SUBMt">Tests</a></div>
<div class="opp"  style="text-align: center;"><a href="/SUBMa">Assignment</a></div></div>
 </div>


        <div class="didd" id="logo" style="background:#4f589c;">
                <div class="nav-link dropdown-toggle text-white"  style="padding:0px;" >
            <!--    <a id="y" style="diplay:block;"  href="/course"><--><a href="#">
           <img src="{{asset('css/images/calendar.png')}}" style="width:30px;height:30px;margin-top:-3px;">Shedule & Tasks</a><span id="gt" class="caret bg-success" ></span>
            </div>
         <div class="dropcontent2" style="display:none;text-align:center;width:100px; " >
<div class="opp" style="margin:6px;">  <a id="y" style=" width:113px;"  href="/calendar">Your Calendar</a></div>
  <div class="opp" style="margin:6px;">  <a id="y" style=" width:113px;"  href="/ytasks">Your Tasks</a></div>
  <div class="opp" >  <a id="y"  style="display:block;width:120px;margin-left:-8px; " href="/tasks">Create/Edit Tasks</a></div>
  </div>
  <!-- <a href="/ytasks"> Tasks</a>--></div>






            <div class="didd"  style="display:block;text-align: center;background:#4f589c;"><a href="/forum"><img src="{{asset('css/images/forum.png')}}" style="width:30px;height:30px;margin-top:-3px;">Forum</a></div>

    </div>
</div>
