  <?php 
  use App\courses_ev;
  foreach ($request as $cour) {
               $c=$cour->cname;
               $request=courses_ev::where('cname',$c)->get();
               ?>@foreach ($request as $requests)
   
     
  <div style="height:240px;margin:3px;padding:2px;">  
    <a style="display:inline-block;color:white;text-align:center;
    height:200px;padding:10px;margin:15px;border-radius:10px; 
    border:2px solid rgb(31, 81, 76); background:rgb(1, 1, 1,0.8); "
     href="ht/{{$requests->id}}/content">
            <img src="{{asset('course-contents/images/'.$requests->clogo )}}" alt="" width="100px" height="100px" style="border-radius:50px;margin-bottom:10px;margin-top:10px;" title="" />
            <h1>{{$requests->cname}}</h1>  </a> 
        </div>

     @endforeach <?php   
     
    } ?>