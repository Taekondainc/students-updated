<?php
use App\courses_ev;
use UApp\User; ?>

        
 <?php 
 foreach ($request as $key) {
            $t=$key->cname;
           $query=courses_ev::where("cname",$t)->get();
           foreach ($query as $value) {
            $f=$value->cowner;
            $h=$value->lecturer;
            $c=$value->cname;
          ?> <a class="nav-link active" name="<?php  echo  $h;  ?>" id="<?php  echo  $f;  ?>" data-toggle="pill" 
  href="/lecturer/<?php  echo  $f;  ?>" role="tab" aria-controls="v-pills-profile" aria-selected="false" >
  <?php  echo  $h;  ?>
<div class="hj text-white-50"><?php  echo  $c;  ?></div></a>
  

 <?php }}?>