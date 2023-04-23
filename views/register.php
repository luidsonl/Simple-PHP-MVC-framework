<h1>Create acount</h1>
<?php use \app\core\form\Form ;?>
<?php $form = Form::begin('', "post"); ?>

  <div class="row">
    <div class="col-sm">
      <?php echo $form->field($model, 'firstname'); ?>
    </div>
    <div class="col-sm">
      <?php echo $form->field($model, 'lastname'); ?>
    </div>
  </div>
  <div class="row">
    <?php echo $form->field($model, 'email'); ?>
  </div>
  <div class="row">
    <div class="col-sm">
      <?php echo $form->field($model, 'password')->passwordField(); ?>
    </div>
    <div class="col-sm">
      <?php echo $form->field($model, 'confirmPassword')->passwordField(); ?>
    </div>
    
    
  </div>
    
  
  
  
 
  <button type="submit" class="btn btn-primary">Register</button>
<?php  Form::end(); ?>
<!--
<form action="" method="post">
  <div class="row mb-3">
    <div class="col">
      <label for="" class="form-label">Firstname</label>
      <input type="text" name = "firstname" value=" " class="form-control" id="">
    </div>
    <div class="col">
      <label for="" class="">Lastname</label>
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
-->