<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KeepController extends Controller
{
    public function index(){
        return view("keep/index");
    }
}
