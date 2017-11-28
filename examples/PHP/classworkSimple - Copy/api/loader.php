<?php
  // autoloader skirtas užkrauti klasių failams
  spl_autoload_register(function ($class_name) {

    if (file_exists($class_name . '.php')) {
      require_once($class_name . '.php');
    }

    if (file_exists('..\\'.$class_name . '.php')) {
      require_once('..\\'.$class_name . '.php');
    }

    if (file_exists('model\\'.$class_name . '.php')) {
      include 'model\\'.$class_name . '.php';
    }

  });
?>
