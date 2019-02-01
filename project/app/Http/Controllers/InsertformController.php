<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;//model use

class InsertformController extends Controller
{
    
    
    	public function getform(){

    	return view("insertform");

    }

    public function postFormData(Request $req){

    	/*print "<pre>";
    	print_r($req->all());
    	print "</pre>";

       die; */
         $contact = new Contact;//model ka name
         $contact->fname=$req->firstname;//table field ke name
         $contact->lname=$req->lasttname;
         $contact->mobile=$req->mobile;
         $contact->subject="test";//table me to field hai lekin form me nhi hai
         $contact->message="test";//table me to field hai lakin form me nhi hai
           
         $contact->save();
           return redirect('/insert');//url ka name	
          // <form action="{{url('insert')}}" method="post">
    }
}
