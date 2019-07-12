@extends('layout.master')
@section('html')
@section('title')
@section('body')

<center>
<div class="conatainer">
<table table table-reponsive>
<form method="POST" action="/fruits/{{$user[0]->id}}" class="pad">
{{csrf_field()}}
<th><h2>Form Activity</h2></th><tr>
<td>Fruit name:</td> <td><input type="hidden" name="id" value="{{$user[0]->id}}" class="form-control text"></td><tr>
<td>Fruit name:</td> <td><input type="text" name="fname" value="{{$user[0]->fruit_name}}" class="form-control text"></td><tr>
<td>Quantity</td> <td><input type="number" name="Quantity" value="{{$user[0]->quantity}}" class="form-control text"></td><tr>

<td>Brand:</td> 
<td ><input type="radio" name="Brand" class="form-control" value="Local" {{$user[0]->brand}} == 'Local' ? 'checked' : ''}} ></td><td >Local</td><td></td><tr><td></td>
<td class="inli"><input type="radio" class="form-control" name="Brand"  value="Imported" {{$user[0]->brand}} == 'Imported' ? 'checked' : ''}}  ></td><td>Imported</td><tr>

<tr>
<td>Price:</td><td> <input type="number" name="price" value="{{$user[0]->price}}" class="form-control text"><tr></td>
<td>Fruit Description:</td><td> <textarea class="form-control"  value="" name="fruitdesc">{{$user[0]->fruitdesc}}</textarea></td>
<tr><td><td><input type="submit" name="request" value="Update Info" class="btn btn-info" style="width:234px;">
</form></table></div></div>
@endsection