<div class="btn-group mw-100 text-white-50 align-content-center " style="font-family:'Oswald', sans-serif; width:100%;">
  <button type="button" class="btn btn-dark  bg-dark w-100 mw-100 m-md-3 dropdown-toggle text-center text-white" style="font-family:'Oswald', sans-serif ;font-size:20px;"
   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  Select Classmate by Course
  </button>
  <div class="dropdown-menu" style="width:90%;text-align:center;font-size:20px;margin:10px;">

@foreach ($request as $item)
<div>
  <a class="nav-li " name="{{$item->cname}}" id="{{$item->id}}" data-toggle="pill" 
  href="/{{$item->cname}}" role="tab" aria-controls="v-pills-profile" aria-selected="false"
   style="background:black;color:white;padding:5px;width:100%;text-align:center;display:block;">
 {{$item->cname}}
</a>
  </div>

 
    
@endforeach
</div>
</div><div class="contlm"></div>
 