<?php
/**
 * Copyright 2010 - 2013, Cake Development Corporation (http://cakedc.com)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright 2010 - 2013, Cake Development Corporation (http://cakedc.com)
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<div id="login">
	<h2><?php echo __d('users', 'Login'); ?></h2>
	<?php echo $this->Session->flash('auth');?>
	<?php
	echo $this->Form->create($model, array(
		'url' => array('controller' => 'bwc_users', 'action' => 'login'),
		'id' => 'login-form',
		'role' => 'form'
	));
	?>
	<div class="form-group">
		<?php echo $this->Form->input('email', array('label' => false, 'class' => 'form-control', 'placeholder' => __d('users', 'Email Address'))); ?>
		<?php echo $this->Form->input('password',  array('label' => false, 'class' => 'form-control', 'placeholder' => __d('users', 'Password'))); ?>
	</div>
	<p><?php echo $this->Html->link(__d('users', 'I forgot my password'), array('action' => 'reset_password')); ?></p>
	<div class="form-group">
		<?php  echo '<p>' . $this->Form->input('remember_me', array('type' => 'checkbox', 'label' =>  __d('users', 'Remember me'))) . '</p>'; ?>
	</div>
	<?php echo $this->Form->hidden('User.return_to', array('value' => $return_to)); ?>
	<?php echo $this->Form->submit(__d('users', 'Login'), array('class' => 'btn btn-primary btn-block')); ?>
	<?php
	echo $this->Form->end();
	?>
</div>
