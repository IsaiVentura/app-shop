<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{
    public function testView(){
    	$a=5;
    	$b=6;
    	$c=$a+$b;
    	return "la suma de $a + $b es $c";
    }
}
