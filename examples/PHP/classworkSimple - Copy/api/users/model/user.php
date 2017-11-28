<?php
  class Event
  {
    private $name;
    private $birthday;
    private $username;
    private $password;
    private $email;
    private $created;
    private $status;

    function __construct(
      $id,
      $name,
      $surname,
      $birthday,
      $username,
      $password,
      $email,
      $created,
      $status
    ){
      $this->$id = $id;
      $this->$name = $name;
      $this->$surname = $surname;
      $this->$birthday = $birthday;
      $this->$username = $username;
      $this->$password = $password;
      $this->$email = $email;
      $this->$created = $created;
      $this->$status = $status;
    }




  }

 ?>
