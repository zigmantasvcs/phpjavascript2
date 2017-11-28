<?php
  require_once("mybase.php");
  require_once("response.php");
  
  class ResponseFactory extends MyBase{
    public static function create($status, $error, $value){
      $response = new Response($status, $error, $value);
      return json_encode($response);
    }
  }

 ?>
