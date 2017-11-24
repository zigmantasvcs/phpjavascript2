<?php
  function GetConnection(){

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "phpjs2";

    $conn = new mysqli($servername, $username, $password, $dbname);

    return $conn;
  }


  function ValidateConnection($conn){
    if($conn->connect_error){
      $_SESSION["error"] = "Prisijungimo prie duomenų bazės klaida!";
      header('Location: ../../error.php');
    }
  }
 ?>
