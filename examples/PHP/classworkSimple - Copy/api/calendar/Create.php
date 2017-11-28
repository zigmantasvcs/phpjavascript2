<?php
  try{
    require_once("../loader.php");

    //require_once("model/event.php");

    //require_once("model/eventData.php");

    //require_once("../responseFactory.php");
    //require_once("../logger.php");
    //--------------------DUOMENŲ IŠ FORMOS PATIKRINIMAS----------------
    if(empty($_POST["event"])){
      echo json_encode(ResponseFactory::GetResponse("NOK", "Event laukas tuscias", null));
      exit(0);
    }

    if(empty($_POST["eventdate"])){
      echo json_encode(ResponseFactory::GetResponse("NOK", "Eventdate laukas tuščias", null));
      exit(0);
    }

    $eventData = new \calendar\data\Event();
    $eventData->event = $_POST["event"];
    $eventData->eventdate = $_POST["eventdate"];

    $event = new \calendar\model\Event();
    echo $event->create($eventData);
  }
  catch(Exception $e){
    Logger::log($e->getMessage());
    //echo json_encode(ResponseFactory::GetResponse("NOK", $e->getMessage(), null)); // $e->getMessage() arba $e->getCode()
  }


 ?>
