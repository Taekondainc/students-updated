<?php 


use App\User;
use Illuminate\Http\Request;
?><div style="display:block;width:100%;">

@foreach ($query as $item)
<?php

$contain=$item->uid;
$checker=User::where("id",$contain)->get();
foreach ($checker->sortBy('id') as $key) {



?>   
<div style="width:40%;display:inline-block;text-align:center;"><div style="background:white;border-radius:13px;color:black;"><h1>{{$key->name}}-{{$item->message}}</h1>
 </div><div class="card-group">{{$item->created_at}}</div></div>
<?php } ?>
    
   @endforeach</div>	