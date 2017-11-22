<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      session_start();


      if(isset($_SESSION["username"])){
        echo "Sveikas, ".$_SESSION["username"];
      }
      else {
        echo "Kas tu toks?";
      }

      unset($_SESSION["username"]);

     ?>
  </body>
</html>
