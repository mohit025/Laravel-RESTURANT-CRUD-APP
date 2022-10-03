@extends('layout')



@section('content')
<div class="col-sm-6">
    <h2>EDIT</h2>
<form   method="post"  action="/edit">
    @csrf   
  <div class="form-group">

  <input type="hidden" name="id" value = " {{$data->id}}"  id="">
  <br>

  <label for="">Name</label>
  <br>

  <input type="text" name="name" value = " {{$data->name}}"  placeholder="Enter Name" id="">
  <br>
    <label for="exampleInputEmail1">Email address</label><br>

    <input type="email"  id="exampleInputEmail1" value = " {{$data->email}}"  name="email" placeholder="Enter email">
    <br>

    <label for="">Address</label><br>
    <input type="text" name="address" value = " {{$data->address}}" placeholder="Enter address" id=""><br>
    
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

@stop