<?php
  $faile = 5;

  spausdinti($faile);

  function spausdinti($x){
    global $test;
    $test = 10;
    echo $x;
  }
  echo $test;
 ?>
