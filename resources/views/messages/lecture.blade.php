<div style="display:block;width:100%;">
@foreach ($request as $item)
    
<div style="width:40%;display:inline-block;text-align:center;"><div style="background:white;border-radius:13px;color:black;"><h1>{{$item->message}}</h1></div>
<div class="card-group">{{$item->created_at}}</div>
</div>
@endforeach	  
</div>	