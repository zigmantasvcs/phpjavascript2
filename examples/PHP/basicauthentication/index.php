<?php
  $username = "jonas";
  $password = "alus123";
  if(isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW'])){

    if($username == $_SERVER['PHP_AUTH_USER'] && $password == $_SERVER['PHP_AUTH_PW']){
      echo "Sveikas, ".$username;
    }
    else{
      header("WWW-Authenticate: Basic realm='Restrcited section'");
      //header('HTTP/1.0 401 Unauthorized');
      die("Please enter your username and password");
    }

  }
  else{
    header("WWW-Authenticate: Basic realm='Restrcited section'");
  }

 ?>
