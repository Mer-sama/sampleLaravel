<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class form extends Controller
{
    //
    public function form(){
    	return view('Form');
    }

    public function displayrecord(){
      return view('display');
    }

    public function insertfruits(){
      return view('insert');
    }

    public function displayfruits(){
   $user = DB::select("SELECT * from fuits");
                return view('fruits',['user' => $user]);
    }

    public function deletefruits($id){
      DB::delete("DELETE FROM fuits WHERE id =?",[$id]);
       $user = DB::select("SELECT * from fuits");
                return view('fruits',['user' => $user]);
    }
  
    public function insfruit(Request $request){
          $fname = $request->input('fname');
          $Quantity = $request->input('Quantity');
<<<<<<< HEAD
    
=======
>>>>>>> a0f9ee1869144da1c01a4b418190695b41fc2fed
          $Brand = $request->input('Brand');
          $price = $request->input('price');
          $fruitdesc = $request->input('fruitdesc');

          $total = $Quantity * $price;

<<<<<<< HEAD
          $this->validate($request,[
            'fname' => 'required|alpha',
            'Quantity' => 'required|Integer',
       
            'Brand' => 'required',
            'price' => 'required|Integer',
            'fruitdesc' => 'required'
            ]);

=======
>>>>>>> a0f9ee1869144da1c01a4b418190695b41fc2fed
          $user = DB::insert("INSERT INTO fuits(fruit_name,quantity,brand,price,fruitdesc,total) VALUES(?,?,?,?,?,?)",[$fname,$Quantity,$Brand,$price,$fruitdesc,$total]);
                $user = DB::select("SELECT * from fuits");
                return view('fruits',['user' => $user]);

                                                        }

      public function editfruits($id){
         $user = DB::select("SELECT * from fuits WHERE id =?",[$id]);
                return view('edit',['user' => $user]);

      }                                                  

      public function updatefruits(Request $request){
          $id = $request->input('id');
          $fname = $request->input('fname');
          $Quantity = $request->input('Quantity');
          $Brand = $request->input('Brand');
          $price = $request->input('price');
          $fruitdesc = $request->input('fruitdesc');

<<<<<<< HEAD
              $this->validate($request,[
            'fname' => 'required|alpha',
            'Quantity' => 'required|Integer',
            'Brand' => 'required',
            'price' => 'required|Integer',
            'fruitdesc' => 'required'
            ]);


=======
>>>>>>> a0f9ee1869144da1c01a4b418190695b41fc2fed
          DB::update("UPDATE fuits set fruit_name = ?, quantity = ?, brand = ?, price=?,fruitdesc=? WHERE id =?",[$fname,$Quantity,$Brand,$price,$fruitdesc,$id]);
              $user = DB::select("SELECT * from fuits");
                return view('fruits',['user' => $user]);

      }




































    public function displayData(Request $request){
   	$fname = $request->input('fname');
   	$lname = $request->input('lname');
   	$Age = $request->input('Age');
   	$Address = $request->input('Address');
   	$Activity = $request->input('Activity');
   	$Gender = $request->input('Gender');
   	$Weight = $request->input('Weight');
   	if ($Gender == "Male" && $Activity == "Active") {
   		# code...
   		$Weight = $Weight * 15;
   	}
   	elseif ($Gender == "Male" && $Activity == "Inactive") {
   		# code...
   		$Weight = $Weight * 13;
   	}
   	elseif ($Gender == "Female" && $Activity == "Active") {
   		# code...
   		$Weight = $Weight * 12;
   	}
   	elseif ($Gender == "Female" && $Activity == "Inactive") {
   		# code...
   		$Weight = $Weight * 10;
   	}
    return view('display',['fname'=>$fname,'lname'=>$lname,'Age'=>$Age,'Address'=>$Address,'Gender'=>$Gender,'Weight'=>$Weight]);

    }
}
