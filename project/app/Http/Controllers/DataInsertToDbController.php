<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Student;

class DataInsertToDbController extends Controller
{
    public function index(){
    	$students =new Student;
    	$students->sname ='ravikant';
    	$students->class =12;
    	$students->save();

    	return view('studentsview');
    }
}
