@extends('layout')



@section('content')
<div class="col-sm-6">
<form   method="post"  action="">
    @csrf   
  <div class="form-group">

  <label for="">Name</label>
  <br>
  <input type="text" name="name" placeholder="Enter Name" id="">
  <br>
    <label for="exampleInputEmail1">Email address</label><br>

    <input type="email"  id="exampleInputEmail1"  name="email" placeholder="Enter email">
    <br>

    <label for="">Address</label><br>
    <input type="text" name="address" placeholder="Enter address" id=""><br>
    
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

@stop