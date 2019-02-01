<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function about(){


    	$subject= 'hello';
    	$marks= [20,50,40,40];
    	return view('hello')->with('data',$subject);
    }
}
