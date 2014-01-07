<div id="content" class="row">
	<div class="col-md-12">

	<h2><?php echo __d('users', 'Forgot your password?'); ?></h2>
	<p><?php echo __d('users', 'Please enter the email address you used for registration and you\'ll get an email with further instructions.'); ?></p>
	<?php
	echo $this->Form->create($model, array(
		'url' => array(
			'admin' => false,
			'action' => 'reset_password'
		),
		'role' => 'form'
	)); ?>
	<div class="form-group">
		<div class="row">
			<div class="col-xs-4">
				<?php echo $this->Form->input('email', array('placeholder' => __d('users', 'Email address'), 'class' => 'form-control', 'label' => false)); ?>
			</div>
		</div>
	</div>
	<div class="form-group">
		<?php echo $this->Form->submit(__d('users', 'Submit'), array('class' => 'btn btn-primary')); ?>
	</div>
	<?php echo $this->Form->end(); ?>
	<?php //echo $this->element('Users.Users/sidebar'); ?>
	</div>
</div>
