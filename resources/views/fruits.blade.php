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
<table class="table table-bordered">
<th>Fruit name</th>
<th>Quantity</th>
<th>Brand</th>
<th>Price</th>
<th>Desc</th>
<th>Total</th>
<tr>
@foreach($user as $fruits)
<tr>
<td > {{$fruits ->fruit_name}} </td>
<td > {{$fruits ->quantity}} </td>
<td > {{$fruits ->brand}} </td>
<td > {{$fruits ->price}} </td>
<td > {{$fruits ->fruitdesc}} </td>
<td > {{$fruits ->total}} </td>


@endforeach
<tr>


</table></div>
@endsection