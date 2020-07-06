  <div id="closed" style="">Close</div>
    @foreach ($query as $item)


 <div style="text-align:center;padding-bottom:30px; padding-top:35px;width:90%;">

    <div style="display:inline-block;background:black;color:white;border:1px solid white;padding:8px;border-radius:3px;
   width:70%;margin-bottom:2px;font-size:18px;">{{$item->cname}}</div>
  <div class="input-group-prepend" style="display:inline-block;">
        <span class="input-group-text" id="basic-addon1" style="background:transparent;color:white;cursor:pointer;font-size:18px;">
           Register </span>
      </div>
     </div>


 @endforeach
<script>
   $(document).ready(function () {
        $("#closed").click(function () {

             $(".did").hide();


    });  });
</script>
