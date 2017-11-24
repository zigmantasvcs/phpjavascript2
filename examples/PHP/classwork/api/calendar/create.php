<?php
  //-------------------- PRISIJUNGIMAS----------------
  require_once("../conn.php");
  $conn = GetConnection();
  ValidateConnection($conn);

  //--------------------DUOMENŲ IŠ FORMOS PATIKRINIMAS----------------
  if(empty($_POST["event"])){
    $response = new stdClass();
    $response->status = "NOK";
    $response->errorMessage = "Event laukas tuščias";
    echo json_encode($response);
    exit(0);
  }

  if(empty($_POST["eventdate"])){
    $response = new stdClass();
    $response->status = "NOK";
    $response->errorMessage = "Eventdate laukas tuščias";
    echo json_encode($response);
    exit(0);
  }

  if($stmt = $conn->prepare("INSERT INTO events (name, eventdate, created) VALUES(?, ?, NOW())")){

    $stmt->bind_param("ss", $name, $eventdate);

    $name = $_POST["event"];
    $eventdate = $_POST["eventdate"];

    if($stmt->execute()){
      $response = new stdClass();
      $response->status = "OK";
      echo json_encode($response);
      exit(0);
    }
    else{
      $response = new stdClass();
      $response->status = "NOK";
      $response->errorMessage = "Klaida kažkur";
      echo json_encode($response);
      exit(0);
    }

  }
  else{
    $response = new stdClass();
    $response->status = "NOK";
    $response->errorMessage = $conn->error;
    echo json_encode($response);
    exit(0);
  }

 ?>
