<div style="blackground:blue;height:70%;"><?php
use App\courses_ev;
use App\messageslect;
use App\studentreg;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

foreach ($request as $item){
   $cg=$item->cname;}
//$req=DB::table('studentsreg')->select("cname")->where('', $cg)->groupBy('id')->get();
$query=studentreg::where('cname',$cg)->get();
foreach ($query as $val) {
    $unm=$val->uid;
$req=DB::table('users')->select("id")->where('id', $unm)->groupBy('id')->get();
foreach ($req as $value) {
   $ft=$value->id;}
 $query=user::where("id", $ft)->get()->except(Auth()->id());
 foreach ($query as $key) {
    ?>
<div id="clall" class="{{ $key->id}}">
<a class="nav-lin" id="{{ $key->id}}" name="{{$key->name}}" data-toggle="pill" 
  href="/{{ $key->id}}" role="tab" aria-controls="v-pills-profile" aria-selected="false" 
  style="background:white; color:black;padding:10px;margin:10px;display:block;font-size:20px;">
 {{ $key->name}}
</a></div>

<?php
 
}
}
?><div class="ltc-cc" >

	</div>
</div>