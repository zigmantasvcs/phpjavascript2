<?php
  session_start();

//-------------------- PRISIJUNGIMAS----------------
  require_once("../conn.php");
  $conn = GetConnection();
  ValidateConnection($conn);

//--------------------DUOMENŲ IŠ FORMOS PATIKRINIMAS----------------
  if(empty($_POST["name"])){
    $_SESSION["error"] = "Klaida. Netinkamas vartotojo vardas!";
    header('Location: ../../error.php');
  }

  if(empty($_POST["surname"])){
    echo "Klaida su name!";
  }

//-------------------- UZKLAUSOS FORMAVIMAS IR PALEIDIMAS------------

  if($stmt = $conn->prepare(
    "INSERT INTO users
      (name, surname,birthdaya, username, password, email,created, status)
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
      $_SESSION["error"] = "Klaida. Kreipkitės į tinklapio administratorių!";
      header('Location: ../../error.php');
    }
  }
 ?>
