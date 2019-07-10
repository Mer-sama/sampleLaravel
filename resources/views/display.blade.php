@extends('layout.master')
@section('html')
@section('title')
@section('body')
<style type="text/css">
	td{
		margin-top: 15px;
	}
</style>
<center>
<div class="container">
<table >
<th><h1>Records</h1></th><tr>
<td ><b>Name: </td><td></b>{{$lname}} {{$fname}}</td><tr>
<td><b>Age:</td><td> </b>{{$Age}}</td><tr>
<td><b>Address: </td><td></b>{{$Address}}</td><tr>
<td><b>Gender: </td><td></b>{{$Gender}}</td><tr>
<td><b>Daily Calories:</td><td> </b>{{$Weight}}</td><tr>
</table></div>
@endsection