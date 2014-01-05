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
<h2><?php echo __d('users', 'Login'); ?></h2>
<?php echo $this->Session->flash('auth');?>
<?php
echo $this->Form->create($model, array(
	'url' => array('controller' => 'bwc_users', 'action' => 'login'),
	'id' => 'LoginForm',
	'role' => 'form'
));
?>
<div class="form-group row">
	<div class="col-xs-4">
		<?php echo $this->Form->input('email', array('label' => __d('users', 'Email'), 'class' => 'form-control')); ?>
	</div>
</div>
<div class="form-group row">
	<div class="col-xs-4">
		<?php $forgotPW = $this->Html->link(__d('users', '(forgot password)'), array('action' => 'reset_password')); ?>
		<?php echo $this->Form->input('password',  array('label' => __d('users', 'Password  ' . $forgotPW), 'class' => 'form-control')); ?>
	</div>
</div>
<div class="form-group row">
	<div class="col-xs-4">
		<?php  echo '<p>' . $this->Form->input('remember_me', array('type' => 'checkbox', 'label' =>  __d('users', 'Remember Me'))) . '</p>'; ?>
	</div>
</div>
<?php echo $this->Form->hidden('User.return_to', array('value' => $return_to)); ?>
<div class="form-group row">
	<div class="col-xs-4">
<?php echo $this->Form->submit(__d('users', 'Login'), array('class' => 'btn btn-primary btn-block')); ?>
	</div>
</div>
<?php
echo $this->Form->end();
//echo $this->element('Users.Users/sidebar');
?>
