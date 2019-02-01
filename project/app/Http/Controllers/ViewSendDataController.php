<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewSendDataController extends Controller
{
    public function viewData(){


    	$subject=['math','history','account','computer']; 
    	$marks=[20,30,20,50,80,90,100];

    	//method chaining 

    	//return view('viewData')->withmysub($subject)->withmymarks($marks);

    		//second method

    	return view('viewData')->with(['mysub'=>$subject,'mymarks'=>$marks]);
    }
}
