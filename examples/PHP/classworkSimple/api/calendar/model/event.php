<?php
  namespace calendar\model;
  class Event implements \iOperations{

    function create($eventData){
      //-------------------- PRISIJUNGIMAS----------------
      require_once("../conn.php");
      $conn = GetConnection();
      ValidateConnection($conn);

      if($stmt = $conn->prepare("INSERT INTO events (name, eventdate, created) VALUES(?, ?, NOW())")){

        $stmt->bind_param("ss", $name, $eventdate);

        $name = $eventData->event;
        $eventdate = $eventData->eventDate;

        if($stmt->execute()){
          return \ResponseFactory::create("OK", null, $eventData);
        }
        else{
          return \ResponseFactory::create("NOK", "Klaida kažkur", null);
        }
      }
      else{
        return \ResponseFactory::create("NOK", $conn->error, null);
      }
    }

    function read($id){
      throw new Exception("Neaprasytas... metodas ".__FUNCTION__);
    }
  }
 ?>
