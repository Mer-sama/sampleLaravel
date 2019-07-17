@extends('layout.master')
@section('html')
@section('title')
@section('body')


<center>
<div class="conatainer">
<table table table-reponsive>
<form method="POST" action="/fruits" class="pad">
{{csrf_field()}}
<th><h2><b>Fruit Activity</h2></th><tr>
<td>Fruit name:</td> <td><input type="text" name="fname" class="form-control text"><span class="text-danger">{{$errors ->first('fname')}}</span></td><tr>
<td>Quantity</td> <td><input type="number" name="Quantity" class="form-control text"><span class="text-danger">{{$errors ->first('Quantity')}}</span></td><tr>


<td>Brand:</td> 
<td ><input type="radio" name="Brand" value="Local" class="" text" style=""> Local</td><td ></td><td></td><tr><td></td>
<td class="inli"><input type="radio" name="Brand" value="Imported" class=""> Imported<br><span class="text-danger">{{$errors ->first('Brand')}}</span></td><td></td><tr>

<tr>
<td>Price:</td><td> <input type="number" name="price" class="form-control text"><span class="text-danger">{{$errors ->first('price')}}</span><tr></td>
<td>Fruit Description:</td><td> <textarea class="form-control" name="fruitdesc"></textarea><span class="text-danger">{{$errors ->first('fruitdesc')}}</span></td>
<tr><td><td><input type="submit" name="request" value="Insert Info" class="btn btn-info" style="width:134px;"> <a href="{{url('fruits')}}"><input type="button" name="request" value="View Info" class="btn btn-success" style="width:134px;">
</form></table></div></div>
@endsection