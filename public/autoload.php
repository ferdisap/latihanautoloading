<?php 

spl_autoload_register(function($class) {
  // include $class.'.php';
  include (app_path() . '\Http\Controllers\Test' . '/\/' .  $class . '.php');
});

?>