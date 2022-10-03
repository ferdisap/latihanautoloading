<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ControllerSatu extends Controller
{
  public $nama;

  public function __construct($string)
  {
    return $this->nama = $string . ' --ini adalah controller satu';
    // return 'test constructor controller satu';
  }

  public function Index()
  {
    return $this->nama;
  }
}
