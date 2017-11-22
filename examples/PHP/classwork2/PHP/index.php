<?php
  //include "konstantos.php";
  require("konstantos.php");

  echo MANO_VARDAS;
  echo "<br />";
  echo __FILE__;

  echo "<br />";
  echo __DIR__;

  echo "<br />";
  echo __LINE__;

  echo "<br />";
  echo __FUNCTION__;

  $klausimas = "Kada einam alaus?";
  echo "<h1>$klausimas</h1>";
  print('*Gal kai baigsis sesija! Eisime į "Alaus namus"');

  echo <<<_ZENKLAS

    $klausimas <br />
    Atsakymas: *Gal kai baigsis sesija!;
_ZENKLAS;
    echo $spausdinimui;

      function GetSomething(){
        echo GetInfo(__LINE__, __FUNCTION__, __FILE__);
        return "nothing";
      }

      function GetInfo($line, $functionName, $file){
        return "<script>console.log('".$line." ".$functionName." ".str_replace(""));</script)";
      }






    ?>
