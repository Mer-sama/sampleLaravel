@extends('layout.master')
@section('html')
@section('title')
@section('body')

<center>
<div class="conatainer">
<table table table-reponsive>
<form method="POST" action="" class="pad">
{{csrf_field()}}
<th><h2>Form Activity</h2></th><tr>
<td>Fruit name:</td> <td><input type="text" name="fname" class="form-control text"></td><tr>
<td>Quantity</td> <td><input type="number" name="Quantity" class="form-control text"></td><tr>

<td>Brand:</td> 
<td ><input type="radio" name="Brand" value="Local" class="form-control text"></td><td >Local</td><td></td><tr><td></td>
<td class="inli"><input type="radio" name="Brand" value="Imported" class="form-control text"></td><td>Imported</td><tr>

<tr>
<td>Price:</td><td> <input type="number" name="price" class="form-control text"><tr></td>
<td>Fruit Description:</td><td> <textarea class="form-control" name="fruitdesc"></textarea></td>
<tr><td><td><input type="submit" name="request" value="Insert Info" class="btn btn-info" style="width:234px;">
</form></table></div></div>
@endsection