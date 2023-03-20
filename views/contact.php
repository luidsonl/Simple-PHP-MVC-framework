<?php
?>

<h1>Contact</h1>

<form action="" method="post">
  <div class="mb-3">
    <label for="" class="form-label">Email address</label>
    <input type="email" class="form-control" id="" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
   	<label for="password" class="form-label">Password</label>
   	<input type="password" class="form-control" id="password">
  </div>
  <div class="mb-3">
   	<label for="subject" class="form-label">Subject</label>
   	<input type="text" name='subject' class="form-control" id="subject">
  </div>
  <div class="mb-3">
   	<label for="body" class="form-label">Body</label>
   	<textarea name="body" class="form-control" id="body"></textarea>
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="">
    <label class="form-check-label" for="">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>