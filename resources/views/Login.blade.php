@extends('master')
@section('content')
<form class="needs-validation login-form" action="login" method="POST">
    @csrf
      <div class="col-md-4 mb-3">
        <label for="Username">Username</label>
        <div class="input-group">
          <input type="text" class="form-control" name="usr" id="validationCustomUsername" placeholder="Username" required>
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <label for="validationCustom02">Password</label>
        <input type="password" class="form-control" name="pass" id="validationCustom02" placeholder="Password"  required>    
      </div>
    
    <button class="btn btn-primary" type="submit">Submit</button>
  </form>
  
 
@endsection
