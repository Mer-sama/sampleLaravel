@extends('layout.master')
@section('html')
@section('title')
@section('body')

<center>
<div class="conatainer">
<table>
<form method="POST" action="/display" class="pad">
{{csrf_field()}}
<th><h2>Form Activity</h2></th><tr>
<td>Enter First name:</td> <td><input type="text" name="fname" class="form-control text"></td><tr>
<td>Enter Last name:</td> <td><input type="text" name="lname" class="form-control text"></td><tr>
<td>Age:</td> <td><input type="text" name="Age" class="form-control text"></td><tr>
<td>Address:</td> <td><input type="text" name="Address" class="form-control text"></td><tr>
<td>Activity:</td> 
<td ><input type="radio" name="Activity" value="Active" class="form-control text"></td><td >Active</td><td></td><tr><td></td>
<td class="inli"><input type="radio" name="Activity" value="Inactive" class="form-control text"></td><td>Inactive</td><tr>
<td>Gender:</td>
<td><select name="Gender" class="form-control text">
	<option value="Male">Male</option>
	<option value="Female">Female</option>
</select>
<tr>
<td>Weight:</td><td> <input type="number" name="Weight" class="form-control text">
<tr><td><td><input type="submit" name="request" value="Display Info" class="btn btn-info">
</form></table></div></div>
@endsection