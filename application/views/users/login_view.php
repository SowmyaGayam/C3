<h2>Login Form</h2>

<?php $attributes = array('id'=>'login_form','class'=>'form_horozontal'); ?>

<?php echo form_open('users/login_view',$attributes); ?>

<div class="form-group">
	<?php echo form_label('UserName'); 
		$data = array(
			'class' => 'form-control',
			'name'  => 'username',
			'placeholder' => 'Enter Username'
		);


	?>
	<?php echo form_input($data); ?>
</div>


<div class="form-group">

	<?php echo form_label('Password');
		$data = array(
			'class' => 'form-control',
			'name' => 'password',
			'placeholder' => 'Enter Password'
		);

	?>
	<?php echo form_input($data); ?>

</div>


<div class="form-group">
	<?php
		$data = array(
			'class' => 'btn btn-primary',
			'name' => 'submit',
			'value' => 'Login'
		)
	?>

<?php echo form_submit($data);?>

</div>




<?php echo form_close(); ?>