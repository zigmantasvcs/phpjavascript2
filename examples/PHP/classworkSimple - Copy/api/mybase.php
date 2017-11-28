<?php
  class MyBase
  {
    public function __set($name, $value) {
        throw new Exception("Cannot add new property \$$name to instance of " . __CLASS__);
    }
  }
 ?>
