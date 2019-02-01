<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewController extends Controller
{
    public function show(){
    	
//possible way to pass data through cotroller to view

    		//using array method 

    		$users=["amit","ravi","rahul"];
    		$name="webcoir";
    		//return view('call', array('users' => $users ));

    		//using compact function
    		//return view('call',compact(
    		//	"users","name"));

    		//using with()method

    		return view('call')->with(["users"=>$users,"name"=>$name]);

    }


public function services(){

		return view("home.services");
		}

				public function team(){

					return view("home.team");


				}

			public function products(){

		return view("home.products");

			}
			public function theme(){

		return view("html");

			}
}