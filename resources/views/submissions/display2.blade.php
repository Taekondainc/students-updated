 
   <?php
  use App\testfile;
  foreach ($sq as $key) {
            $t = $key->cname;
           // echo $t;
      
       // $request = gradfile::where('cname', $t)->get();
       
         $requestd = testfile::where('cname',$t)->get();
 ?>
 
       @foreach ($requestd as $requests) 
          <a style="display:inline-block;word-break:break-all; color:blue;font-size:15px;padding:5px;text-align:center;" id="button3" id="download" href="{{ asset('course-contents/files/tests/'.$requests->question ) }}" download>        
  Download : {{$requests->question}}  </a>     
        <div>  
         </div>  @endforeach 
           <?php } ?>