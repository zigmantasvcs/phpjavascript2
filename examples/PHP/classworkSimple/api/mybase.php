<?php
  class MyBase{
    public function __set($name, $value){
      throw new Exception("Negalima klasei ".__CLASS__." pridėti savybės ".$name);
    }
  }
 ?>
