@extends('layout.master')
@section('html')
@section('title','Display Activity')
@endsection
@section('body')
<style type="text/css">
	td{
		margin-top: 15px;
	}
</style>
<center>
<div class="container">
<table class="table table-bordered">
<th>Name</th>
<th>Age</th>
<th>Address</th>
<th>Contact No.</th>
<th>Birthday</th>
<th>Student ID</th>
<th>Email Address</th>
<tr>
@foreach($user as $displayact)
<tr>
<td > {{$displayact ->Name}} </td>
<td > {{$displayact ->age}} </td>
<td > {{$displayact ->address}} </td>
<td > {{$displayact ->Contact_no}} </td>
<td > {{$displayact ->bday}} </td>
<td > {{$displayact ->student_id}} </td>
<td > {{$displayact ->Email}} </td>

@endforeach
<tr>


</table></div>
@endsection