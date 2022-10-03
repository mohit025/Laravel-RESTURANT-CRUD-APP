@extends('layout')

@section('content')
<h1>LOGIN USER </h1>


<form   method="post"  action="login">

@csrf
       
  <div class="form-group">

  
  <br>
   <label for="">Email</label>
   <input type="text" name="email"class="form-control"  placeholder="Enter email" id="">
   </div>
   <br>
   <div class="form-group">
   <label for="">password</label>
   <input type="password" name="email" class="form-control" placeholder="Enter password" id="">
   </div>
   <br>
  
  <button type="submit" class="btn btn-primary">Submit</button>
  <br>
</div>
</form>
@stop