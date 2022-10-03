<?php 

// $name=[];

spl_autoload_register(function($class) {
  // include base_path() . '/' . $class . '.php';
  require_once base_path() . '/' . $class . '.php';
  // array_push($name, $class);
});


// return $name;

?>