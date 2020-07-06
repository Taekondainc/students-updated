 @foreach ($requests as $request) 
 <div  id="bkground" style="border:1px solid black;width:90%;margin:23px;border-radius:3px;"><h1>{{$request->cname}}</h1>
  <div><h3> {{$request->description}}</h3></div> 
 <a style="display:inline-block;word-break:break-all; color:blue;font-size:15px;padding:5px;text-align:center;" id="button3"
  id="download" href="{{ asset('course-contents/files/tutorials/'.$request->tutorial ) }}" download>        
  Download : {{$request->tutorials}}  </a> 
 </div>
  @endforeach 
  <script>if ($('html').css('background-image') != 'none') {

 $(".tutorials").css("border","2px solid white");
 $("#bord-bttm").css("border-bottom","2px solid white");
 $("#button4").css("color","white");
 $("[id=bkground]").css("background","black");
  $("[id=button3]").css("color","white");
}else{
    
}</script> 