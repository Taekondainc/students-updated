  <?php
  use App\submission;
  foreach ($sq as $key) {
            $t = $key->cname;
           // echo $t;
      
       // $request = gradfile::where('cname', $t)->get();
        $requestd = submission::where('cname', $t)->get();
 ?>
@foreach ($requestd as $requests) 

    <div style="margin:5px;">    
     <a  style="font-size:20px;margin:2px;display:inline-block;text-align:center;padding-bottom:5px;border-radius:10px;
          width:100px;border:1.5px solid black;padding:3px;" id="button1"  href="/test/{{$requests->id}}/course-content">
        {{$requests->Testname}} </a>
 <div>
    </div>   
      @endforeach  
      <?php } ?>