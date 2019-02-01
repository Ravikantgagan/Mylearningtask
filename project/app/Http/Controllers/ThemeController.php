	<?php
	namespace App\Http\Controllers;
	use Illuminate\Http\Request;

		class ThemeController extends Controller
		{
		   		 	public function features(){


		    		return view("html.features");

		    		}
		   			 public function about(){


		    		return view("html.about");
		    	
		   			 }

		  		  	public function services(){


		  			return view("html.services");

		    	
		   			}


		    		public function gallery(){


		    		return view("html.Gallery");
		    	
		  	 		 }

		  	  		public function testimonials(){

		  	  		return view("html.testimonials");
		    	
		    		}

		    		public function teams(){				

		    		return view("html.teams");
		   		 	}

		    		public function contact(){

		    		return view("html.contact");
		    	
		   			 }

		    		public function themehome(){

		    		return view("html.themehome");
		    	
		    }
		}
