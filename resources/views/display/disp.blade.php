
     <div>     <form action="/reg" method="Post" id="submit-code" style="margin-top:55px;position:relative;top:0px;font-family:'Oswald', sans-serif ;">
 @csrf<div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1" style="background:transparent;"> <img  src="{{asset('css/images/search.png')}}" width="23px" height="23px"> </span>
      </div>
      <input type="search"name="key" class="form-control" placeholder="Search Courses" id="scl" aria-label="Username" aria-describedby="basic-addon1">
    </div>
</form>  