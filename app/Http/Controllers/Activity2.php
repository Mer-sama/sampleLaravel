<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class Activity2 extends Controller
{
    //
    public function Activity2(){

    	return view('/Activity2');

    }

    public function insertactivity(Request $request){

    	   $Name = $request->input('Name');
    	      $Age = $request->input('Age');
    	         $Address = $request->input('Address');
    	            $Contact_no = $request->input('Contact_no');
    	               $Birthday = $request->input('Birthday');
    	                  $Student = $request->input('Student_ID');
    	                     $Email = $request->input('Email');
    	                      $Password = $request->input('Password');


    	                     $this -> validate($request,[
    	                     	'Name' => 'required|regex:/^[\pL\s\-]+$/u',
    	                     	'Age' => 'required|Integer|Digits:2|Between:18,60',
    	                     	'Address' => 'required',
    	                     	'Contact_no' => 'required|Numeric|Digits:11',
    	                     	'Birthday' => 'required',
    	                     	'Student_ID' => 'required|Integer|Digits:8|unique:tblrecords,student_id',
    	                     	'Email' => 'required|unique:tblrecords,Email',
    	                     	'Password' => 'required'

    	                     	]);


          $user = DB::insert("INSERT INTO tblrecords(Name,age,address,Contact_no,bday,student_id,Email,password) VALUES(?,?,?,?,?,?,?,?)",[$Name,$Age,$Address,$Contact_no,$Birthday,$Student,$Email,$Password]);
            return view('Activity2');
    	
    }
    public function retireveactivity(){
    	

    	  $user = DB::select("SELECT * from tblrecords");
                return view('displayActivity',['user' => $user]);
    }

    public function loginss(Request $request){
    			  $user = DB::select("SELECT * from tblrecords");
                
   
    	  	 $User = $request->input('Usermail');
    	      $Password = $request->input('Password');

    	$request->session()->put('Email', $User);
    	$request->session()->put('Password', $Password);
    	

    	$checklogin = DB::table('tblrecords') -> where(['Email' =>$User,'password' => $Password])->get();
    	if (count($checklogin) > 0) {
    		# code...
    		return view('/Activity2');

    	}
    	else {
    		return "No Records";
    	}
	
		


    }
public function login(Request $request){

  
	return view('login');

   

    	



    }


}
