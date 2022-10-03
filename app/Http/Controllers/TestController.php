<?php

namespace App\Http\Controllers;

// use App\Http\Controllers\Test\ControllerSatu;
// use App\Http\Controllers\Test\ControllerDua;
use Illuminate\Http\Request;


// require_once base_path('App/Http/Controllers/autoload.php');
// require_once "App\Http\Controllers\Test\ControllerSatu.php";
// require_once "D:\application\\example-app1\\app\\Http\\Controllers\\Test\\ControllerSatu.php";
// include (app_path() . '\Http\Controllers\autoload.php');


class TestController extends Controller
{
  public function index()
  {
    $class = 'App\Http\Controllers\ControllerSatu';
    // $path = __DIR__ . '\\' . 'Test\\' . $class . '.php';
    // require $path;

    $instance = new $class('tes4');
    
    if (class_exists(ControllerSatu::class)){
      return $instance->Index();
      return "class sudah di loaded";
    } else {
      return "class belum di loaded";
    }

    $class = 'ControllerDua';
    $path = __DIR__ . '\\' . 'Test\\' . $class . '.php';
    require $path;
    // return file_exists($path);
    return class_exists($class);
    $instance = new $path('tes4');
    return $instance->Index();


    // GAGAL saat if class_exist()
    $class = 'ControllerDua';
    $path = __DIR__ . '\\' . 'Test\\' . $class . '.php';

    // spl_autoload_register(function ($class) {
    //   $path = __DIR__ . '\\' . 'Test\\' . $class . '.php';
    //   if (require $path) {
    //     var_dump("class has been included");
    //   } else {
    //     var_dump("class has not been included");
    //   }
    // });
    if (file_exists($path)) {
      // return 'file nya ada';

      // spl_autoload_register(function ($class) {
      //   $path = __DIR__ . '\\' . 'Test\\' . $class . '.php';
      //   if (include $path) {
      //     var_dump("class has been included");
      //   } else {
      //     var_dump("class has not been included");
      //   }
      // });
      // $instance = new $class('tes3');
      // return $instance->Index();

      if (require $path) {
        // var_dump("class has been included");
        $instance = new ControllerDua('tes3');
        // var_dump("class has been included");
        return $instance->Index();
      } else {
        var_dump("class has not been included");
      }


      // require $path;
      // // var_dump(new (ControllerDua::class));
      // if (class_exists('ControllerSatu')) {
      //   return "classnya ada";
      // } else {
      //   return "class nya TIDAK ada";
      // }
    }
    // $instance = new $class('tes2');
    // return $instance->Index();

    // BERHASIL
    // $instance = new Test\ControllerSatu('tes2');
    // return $instance->Index();

    // BERHASIL, tapi harus pakai use...
    // $instance = new ControllerSatu('tes3');
    // return $instance->Index();

  }
}
