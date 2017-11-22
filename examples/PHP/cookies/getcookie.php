<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body id="body">
    <?php
      if(isset($_COOKIE["vardas"])){
        echo $_COOKIE["vardas"];
      }
      if(isset($_COOKIE["pavarde"])){
        echo $_COOKIE["pavarde"];
      }

      if(isset($_COOKIE["color"])){
        echo "<script>document.getElementById('body').style.backgroundColor = '".$_COOKIE["color"]."'</script>";
      }
      setcookie("vardas", "", time()-1, "/");

     ?>
  </body>
</html>
