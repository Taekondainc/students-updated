 
   <?php
  use App\assignments;
  foreach ($sq as $key) {
            $t = $key->cname;
           // echo $t;
      
       // $request = gradfile::where('cname', $t)->get();
       
         
         $requestl = assignments::where('cname',$t)->get(); 
 ?>
 

 @foreach($requestl as $requests) 
 <a id = "button7" style = "display:inline-block;word-break:break-all; color:blue;font-size:16px;padding:20px;text-align:center;"
 id = "download"
 href = "{{ asset('course-contents/files/tests/'.$requests->assignment ) }}"
 download>Download: {{$requests->title }}</a><div> </div>@endforeach
   <?php } ?>