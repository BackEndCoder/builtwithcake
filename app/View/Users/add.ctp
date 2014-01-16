<div id="register">
	<h2><?php echo __d('users', 'Register Account'); ?></h2>
	<?php echo $this->Form->create($model, array('role' => 'form')); ?>
	<div class="form-group">
		<?php
		echo $this->Form->input('username', array(
			'label' => false,
			'class' => 'form-control first',
			'placeholder' => __d('users', 'Username')
		));
		echo $this->Form->input('email', array(
			'class' => 'form-control',
			'label' => false,
			'error' => array(
				'isValid' => __d('users', 'Must be a valid email address'),
				'isUnique' => __d('users', 'An account with that email already exists')
			),
			'placeholder' => __d('users', 'E-mail Address')
		));
		echo $this->Form->input('password', array(
			'label' => false,
			'type' => 'password',
			'class' => 'form-control',
			'placeholder' => __d('users', 'Password')
		));
		echo $this->Form->input('temppassword', array(
			'label' => false,
			'type' => 'password',
			'class' => 'form-control last',
			'placeholder' => __d('users', 'Confirm Password')
		));
		?>
	</div>
	<?php
	$tosLink = $this->Html->link(__d('users', 'Terms of Service'), array(
		'controller' => 'pages',
		'action' => 'tos',
		'plugin' => null
		)
	);
	?>
	<div class="form-group">
		<?php echo $this->Form->input('tos', array('label' => __d('users', 'I have read and agreed to the ') . $tosLink)); ?>
	</div>
	<?php echo $this->Form->submit(__d('users', 'Register'), array('class' => 'btn btn-primary btn-block')); ?>
	<?php echo $this->Form->end(); ?>
</div>
