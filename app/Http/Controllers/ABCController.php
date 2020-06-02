<?php

namespace App\Http\Controllers;

use App\lain;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ABCController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function index(lain $lain)
    {
        //
        echo "<br>ABC Controller.";
    }
}
