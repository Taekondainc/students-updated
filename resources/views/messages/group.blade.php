@foreach ($query as $key) 
    
<div id="clall" class="{{ $key->id}}" style="text-align:center;padding:10px;">
<div class="getname" id="{{ $key->id}}" name="{{$key->name}}" data-toggle="pill" 
  href="/{{ $key->id}}" role="tab" aria-controls="v-pills-profile" aria-selected="false" 
  style="cursor: pointer;background:white;display:inline-block;
  color:black;padding:10px;width:100%;margin:3px;display:block;font-size:14px;text-align:left">
 {{ $key->name}}
 <a id="grpm"  href="{{ $key->name}}" style="color:green">Add to Group</a>
</div>

</div>
@endforeach