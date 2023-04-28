<?php use \app\core\form\Form;?>
<?php use \app\models\User;?>
<?php /**@var $model User */?>


<h1>Create acount</h1>
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