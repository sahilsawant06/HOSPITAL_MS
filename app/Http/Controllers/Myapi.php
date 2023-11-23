<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Myapi extends Controller
{
   public function index(){
    return ["name"=>"Avinash sawant","Address"=>"India,Mumbai"];
   }
}
