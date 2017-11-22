<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      setcookie("vardas", "Jonas", time()+60, "/");
      setcookie("pavarde", "Jonaitis", time()+60*60, "/");
      setcookie("color", "purple", time()+60*60, "/");
    ?>
  </body>
</html>
