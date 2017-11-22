<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="index.php" method="post">
      <input type="text" name="username" value="">
      <input type="password" name="password" value="">
      <input type="submit" name="" value="OK">
    </form>
    <?php
      session_start();
      //session_set_cookie_params(1,"/");
      if(isset($_POST["username"])){
        $_SESSION["username"] = $_POST["username"];
      }
     ?>

     <a href="about.php">Apie</a>
  </body>
</html>
