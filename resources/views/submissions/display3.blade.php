 
   <?php
  use App\assignment;
  foreach ($sq as $key) {
            $t = $key->cname;
           // echo $t;
      
       // $request = gradfile::where('cname', $t)->get();
       
           $requestt = assignment::where('cname',$t)->get();
         
 ?>
 
        

@foreach ($requestt as $requests) 
          <a id="button5" style="font-size:20px;display:inline-block;text-align:center;padding-bottom:10px;margin:7px;border-radius:10px;
          width:60%;border:1.5px solid black;padding:3px;color:black;background:white;"  href="/assignment/{{$requests->id}}/course-content">
        {{$requests->title}} </a>
    <div>
      </div> @endforeach
         <?php } ?>