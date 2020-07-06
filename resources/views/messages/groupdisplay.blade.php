@foreach ($query as $key) 
    
<div id="cl" class="{{ $key->id}}" style="text-align:center;padding:10px;">
<div class="Groupmem" id="{{ $key->id}}" name="{{$key->groupname}}" data-toggle="pill" 
  href="{{ $key->groupname}}" role="tab" aria-controls="v-pills-profile" aria-selected="false" 
  style="cursor: pointer;background:white;display:inline-block;
  color:black;padding:10px;width:100%;margin:3px;display:block;font-size:14px;text-align:left">
 {{ $key->groupname}}

</div>

</div>
@endforeach