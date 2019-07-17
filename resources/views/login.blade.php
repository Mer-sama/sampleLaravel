@extends('layout.master')
@section('html')
@section('title','Login')
@section('body')


<center>
<div class="conatainer">
<table table table-reponsive>
<form method="POST" action="{{url('login')}}" class="pad">
{{csrf_field()}}
<th colspan="3"><h2><b>Login</h2></th><tr>
<td>Email:</td> <td><input type="text" name="Usermail" class="form-control text" placeholder="Enter Name"><span class="text-danger"></span></td><tr>
<td>Password:</td> <td><input type="text" name="Password" class="form-control text" placeholder="Enter Password"><span class="text-danger"></span></td><tr>


<tr><td><td><input type="submit" name="request" value="Login" class="btn btn-primary" style="width:234px;">
</form></table></div></div>
@endsection