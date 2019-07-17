@extends('layout.master')
@section('html')
@section('title','Activity 2')
@section('body')


<center>
<div class="conatainer">
<table table table-reponsive>
<form method="POST" action="{{url('Activity2')}}" class="pad">
{{csrf_field()}}
<th><h2><b>Activity 2</h2></th><tr>
<td>Name:</td> <td><input type="text" name="Name" class="form-control text" placeholder="Enter Name"><span class="text-danger">{{$errors -> First('Name')}}</span></td><tr>
<td>Age:</td> <td><input type="text" name="Age" class="form-control text" placeholder="Enter Age"><span class="text-danger">{{$errors -> First('Age')}}</span></td><tr>
<td>Address:</td> <td><input type="text" name="Address" class="form-control text" placeholder="Enter Address"><span class="text-danger">{{$errors -> First('Address')}}</span></td><tr>
<td>Contact no:</td> <td><input type="text" name="Contact_no" class="form-control text" placeholder="Enter Contact no"><span class="text-danger">{{$errors -> First('Contact_no')}}</span></td><tr>
<td>Birthday:</td> <td><input type="date" name="Birthday" class="form-control text" placeholder="Enter Birthday"><span class="text-danger">{{$errors -> First('Birthday')}}</span></td><tr>
<td>Student ID:</td> <td><input type="text" name="Student_ID" class="form-control text" placeholder="Enter Student ID"><span class="text-danger" >{{$errors -> First('Student_ID')}}</span></td><tr>
<td>Email Address:</td> <td><input type="text" name="Email" class="form-control text" placeholder="Enter Email Address"><span class="text-danger">{{$errors -> First('Email')}}</span></td><tr>
<td>Password:</td> <td><input type="Password" name="Password" class="form-control text" placeholder="Enter Email Address"><span class="text-danger">{{$errors -> First('Password')}}</span></td><tr>
<h2>Welcome {{session()->get('Email')}}</h2>
<tr><td><td><input type="submit" name="request" value="Insert Data" class="btn btn-info" style="width:134px;"> <a href="{{url('displayActivity')}}"><input type="button" name="request" value="View Data" class="btn btn-success" style="width:134px;">
</form></table></div></div>
@endsection