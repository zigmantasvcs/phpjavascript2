<?php
    namespace calendar\model;
    class Event extends \MyBase implements \iOperations
    {
      public function create($event){

        require_once("../conn.php");
        $conn = GetConnection();
        ValidateConnection($conn);

        if($stmt = $conn->prepare("INSERT INTO events (name, eventdate, created) VALUES(?, ?, NOW())")){

          $stmt->bind_param("ss", $name, $eventdate);

          $name = $_POST["event"];
          $eventdate = $_POST["eventdate"];

          if($stmt->execute()){
            return json_encode(\ResponseFactory::GetResponse("OK", null, $event));
          }
          else{
            return json_encode(\ResponseFactory::GetResponse("NOK", "Klaida kažkur", null));
          }
        }
        else{
          return json_encode(\ResponseFactory::GetResponse("NOK", $conn->error, null));
        }
      }

      public function get($id){
        return $user;
      }
    }

 ?>
