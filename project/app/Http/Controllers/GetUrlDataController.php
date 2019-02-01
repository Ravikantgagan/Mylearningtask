<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class GetUrlDataController extends Controller
{
    public function index(){

    	return view('getdata');
    }
    //store data from view  to store method 

    public function store(Request $request){

    	dd($request->all());


    }

    //email validate function
   // public function store(Request $request){

    	//$this-> validate($request,['email' =>'required | email']);


   // }
}
