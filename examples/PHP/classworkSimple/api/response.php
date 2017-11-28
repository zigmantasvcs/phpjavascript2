<?php
  require_once("mybase.php");

  class Response extends MyBase{
    public $status;
    public $error;
    public $value;

    function __construct($status, $error, $value){
      $this->status = $status;
      $this->error = $error;
      $this->value = $value;
    }
  }

 ?>
