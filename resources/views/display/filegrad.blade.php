  
    <?php  
    
use App\gradfile;


    foreach ($sq as $key) {
            $t = $key->cname;
          //  echo $t;
     

        $request = gradfile::where('cname', $t)->get();
           
           ?>
           @foreach ($request as $item)
    <tr id="gshow">
     
 <td style="width:15%;">{{$item->cname}}</td>  
 <td style="width:15%;"> 
    <a style="word-break:break-all; color:blue;font-size:17px;text-align:center;"
      id="download" href="{{ asset('course-contents/files/grades/'.$item->file  ) }}" download> {{$item->file}} </a> </td>
 
 <td style="width:15%;">{{$item->sub}}</td>
 <td style="width:15%;">{{$item->grd}}</td> 

 </tr>
 @endforeach
  <?php
  }
           ?>