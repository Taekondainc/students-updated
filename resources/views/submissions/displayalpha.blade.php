<div style="position: absolute;right:0px;color:white;">
  <div style="right:0px;color:white;border:2px solid white;width:130px;height:130px;position: fixed;right:100px;border-radius:50%;">
  <div>
    <spn id="yth" style="cursor:pointer;padding:30px;text-align:center;
  font-size:20px;color:white;" >
<h1>x</h1>
<div>Close</div>
</spn>
</div>

</div> 
<h1 style="position:absolute;top:110px;cursor:pointer;right:10px;background:black;border-radius:3px;"><div>Close</div></h1>
</div>
@foreach ($requests  as $request) 
   <div style="background:black;border-radius:4px;width:80%;border:2px solid white;"> 
    <h1 style="color:white;">Assignment:</h1>
    <h1 style="color:white;">Course:{{$request->cname}}</h1>     
  <h1 style="color:white;">Title:{{$request->title}}</h1>  
    <h1 style="color:white;">Assignment:{{$request->assignment}}</h1>  
   </div>
       @endforeach