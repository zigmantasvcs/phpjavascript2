<?php
  spl_autoload_register(function($classname){
    if(file_exists("model\\".$classname.".php")){
      require_once("model\\".$classname.".php");
    }

    if(file_exists("..\\".$classname.".php")){
      require_once("..\\".$classname.".php");
    }
  })

 ?>
