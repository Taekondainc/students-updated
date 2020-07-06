
@foreach ($requests as $request) 
   <div style="background:rgb(1,1,1,0.6);border-radius:4px;width:80%;border:2px solid white;height:700px;overflox-y:scroll;position: absolute;"> 
  <div style="right:0px;color:white;border:2px solid white;width:130px;height:130px;position: fixed;right:100px;border-radius:50%;">
  <div>
    <spn id="yth" style="cursor:pointer;padding:30px;text-align:center;
  font-size:20px;color:white;" >
<h1>x</h1>
<div>Close</div>
</spn>
</div>

</div>  <h1 style="color:white;">Test:</h1>
    <h3 style="color:white;">Course:{{$request->cname}}</h3>  
  <h3 style="color:white;">Title:{{$request->testname}}   Starting Time:{{$request->time}}</h3>  
  <h3 style="color:white;">Date:{{$request->date}}</h3> 
<div style="height:70%;width:90%;overflow-y:scroll;margin-top:30px;">
  
    @foreach ($requestsa->sortBy('id') as $requestt) 
   
    <h5 style="color:white;">Question Number:{{$requestt->QN}}</h5>  
  <h5 style="color:white;">Question:{{$requestt->question}}  </h5>  
  
       @endforeach
   </div></div>
       @endforeach 
      