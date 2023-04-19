<?php

?>

<h1>Create acount</h1>

<form action="" method="post">
  <div class="row mb-3">
    <div class="col">
      <label for="" class="form-label">Firstname</label>
      <input type="text" class="form-control" id="" name="firstname">
    </div>
    <div class="col">
      <label for="" class="form-label">Lastname</label>
      <input type="text" class="form-control" id="" name="lastname">
    </div>
  </div>
  
  <div class="mb-3">
    <label for="" class="form-label">Email</label>
    <input type="email" class="form-control" id="" name="email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
   	<label for="password" class="form-label">Password</label>
   	<input type="password" class="form-control" id="password" name="password">
  </div>
  <div class="mb-3">
    <label for="confirmPassword" class="form-label">Confirm password</label>
    <input type="password" class="form-control" id="confirmPassword" name="confirmPassword">
  </div>
  <div class="mb-3">

  <button type="submit" class="btn btn-primary">Register</button>
</form>