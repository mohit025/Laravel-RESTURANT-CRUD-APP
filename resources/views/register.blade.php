@extends('layout')

@section('content')
<h1>REGISTER USER </h1>


<form   method="post"  action="register">

@csrf
       
  <div class="form-group">

  <label for="">Name</label>
  <br>
  <input type="text" name="name" placeholder="Enter Name" id="">
  <br>
   <label for="">Email</label>
   <input type="text" name="email" placeholder="Enter email" id="">
   <br>
   <label for="">password</label>
   <input type="password" name="email" placeholder="Enter password" id="">
   <br>
   <label for="">contact</label>
   <input type="text" name="contact" placeholder="Enter contact" id="">
   <br>
  <button type="submit" class="btn btn-primary">Submit</button>
  <br>
</form>
@stop