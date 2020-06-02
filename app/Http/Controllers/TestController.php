<?php

namespace App\Http\Controllers;

use App\lain;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
   public function index() {
      echo "<br>Test Controller.";
   }
}
