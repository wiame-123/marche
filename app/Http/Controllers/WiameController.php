<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WiameController extends Controller
{
    //ici on fait les methoddes
    public function wiame ()
 {
  return view('wiame'); // creer une methode nommer wiame retourne une view poiter sure une autre (wiame)
 }
// on creer une route dasn web.php
}
