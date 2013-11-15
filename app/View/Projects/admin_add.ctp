<div class="projects form">
<?php echo $this->Form->create('Project', array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Project'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('url');
		echo $this->Form->input('summary');
		echo $this->Form->input('description');
		echo $this->Form->input('user_id');
		echo $this->Form->input('featured', array('after' => '<span class="label label-info">Should be included in the homepage carousel?</span>'));
		echo $this->Form->input('approved', array('after' => '<span class="label label-info">Display this project on the site?</span>'));
		echo $this->Form->input('screenshot', array('type' => 'file'));
		echo $this->Form->input('screenshot_dir', array('type' => 'hidden'));
	?>
	</fieldset>
<?php
echo $this->Form->submit('Save project', array('class' => 'btn btn-success', 'after' => $this->Html->link('Cancel', array('controller' => 'bwc_users', 'action' => 'view', 'slug' => AuthComponent::user('slug')), array('class' => 'btn btn-danger'))));
echo $this->Form->end();
?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Projects'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
