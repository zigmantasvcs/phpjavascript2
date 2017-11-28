<?php
    require_once("../loader.php");

    //--------------------DUOMENŲ IŠ FORMOS PATIKRINIMAS----------------
    /*if(empty($_POST["event"])){
      $response = new stdClass();
      $response->status = "NOK";
      $response->errorMessage = "Event laukas tuščias";
      echo json_encode($response);
      exit(0);
    }

    if(empty($_POST["eventdate"])){
      echo GetResponse("NOK", "Eventdate laukas tuščias", null);
      exit(0);
    }*/

    $eventData = new calendar\data\Event();
    $eventData->event = $_POST["event"];
    $eventData->eventDate = $_POST["eventdate"];

    $event = new calendar\model\Event();
    echo $event->create($eventData);
    exit(0);

  //}
  //catch(Exception $e){
    //echo '{"error":"'.$e->getMessage().'"}';
    //exit(0);
  //}

  function GetResponse($status, $error, $message){
    $response = new stdClass();
    $response->status = $status;
    $response->errorMessage = $error;
    $response->object = $message;
    return json_encode($response);
  }
?>
