  
    @foreach ($request->sortBy('submission') as $item)
    <tr id="gshow">
     
 <td style="width:20%;">{{$item->student}}</td>  
 <td style="width:15%;">{{$item->submission}}</td>
 <td style="width:15%;">{{$item->gos}}</td>
 <td style="width:15%;">{{$item->goc}}</td>
 <td style="width:15%;">{{$item->cname}}</td> 

 </tr>
 @endforeach
