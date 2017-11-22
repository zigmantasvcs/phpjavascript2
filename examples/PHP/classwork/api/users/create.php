<?php
//-------------------- PRISIJUNGIMAS----------------
  // Apsirašome parametrus
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "phpjs2";

 // Sukuriamo objektas
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Patikriname prisijungimą
  if($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
  }
//--------------------DUOMENŲ IŠ FORMOS PATIKRINIMAS----------------
  if(empty($_POST["name"])){
    echo "Klaida su name!";
  }

  if(empty($_POST["surname"])){
    echo "Klaida su name!";
  }

//-------------------- UZKLAUSOS FORMAVIMAS IR PALEIDIMAS------------

  if($stmt = $conn->prepare(
    "INSERT INTO users
      (name, surname,birthday, username, password, email,created, status)
     VALUES
      (?, ?, ?, ?, ?, ?, NOW(), 1)")
  )
  {
    $stmt->bind_param("ssssss",
      $name,
      $surname,
      $birthday,
      $username,
      $hashed_password,
      $email);

    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $birthday = $_POST["birthday"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $email = "zigmantas.rackauskas@gmail.com";

    if($stmt->execute()){
      echo "Viskas ok!";
    }
    else{
      echo $stmt->error;
    }

  }


 ?>
