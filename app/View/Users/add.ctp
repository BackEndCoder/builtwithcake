<div id="content" class="row">
	<div class="col-md-12">
		<h2><?php echo __d('users', 'Register Account'); ?></h2>
		<?php echo $this->Form->create($model, array('role' => 'form')); ?>
		<div class="form-group">
			<div class="row">
				<div class="col-xs-4">
					<?php echo $this->Form->input('username', array('label' => __d('users', 'Username'), 'class' => 'form-control')); ?>
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-xs-4">
					<?php
					echo $this->Form->input('email', array(
						'class' => 'form-control',
						'label' => __d('users', 'E-mail (used as login)'),
						'error' => array(
							'isValid' => __d('users', 'Must be a valid email address'),
							'isUnique' => __d('users', 'An account with that email already exists')
						)
					));
					?>
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-xs-4">
					<?php
					echo $this->Form->input('password', array(
						'label' => __d('users', 'Password'),
						'type' => 'password',
						'class' => 'form-control'
					));
					?>
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-xs-4">
					<?php
					echo $this->Form->input('temppassword', array(
						'label' => __d('users', 'Password (confirm)'),
						'type' => 'password',
						'class' => 'form-control'
					));
					?>
				</div>
			</div>
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
			<div class="row">
				<div class="col-xs-4">
					<?php echo $this->Form->input('tos', array('label' => __d('users', 'I have read and agreed to the ') . $tosLink)); ?>
				</div>
			</div>
		</div>
		<div class="form-group">
			<?php echo $this->Form->submit(__d('users', 'Register'), array('class' => 'btn btn-primary')); ?>
		</div>
		<?php echo $this->Form->end(); ?>
		<?php //echo $this->element('Users.Users/sidebar'); ?>
	</div>
</div>
