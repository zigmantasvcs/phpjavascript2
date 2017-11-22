<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="index.php" method="get">
      <input type="text" name="username" value="">
      <input type="password" name="password" value="">
      <input type="submit" name="" value="ok">
    </form>
    <?php
      session_start();
      if(isset($_POST["username"])){

        $_SESSION["username"] = $_POST ["username"];
      }

     ?>

      <a href="about.php">Apie</a>

  </body>
</html>
