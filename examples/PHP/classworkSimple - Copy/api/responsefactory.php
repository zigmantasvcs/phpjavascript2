<?php
  require_once("MyBase.php");
  require_once("Response.php");

  class ResponseFactory extends MyBase
  {

    public static function GetResponse($status, $error, $value)
    {
      return new Response($status, $error, $value);
    }
  }
 ?>
