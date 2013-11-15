<div class="projects form">
<?php echo $this->Form->create('Project', array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Project'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title');
		echo $this->Form->input('url');
		echo $this->Form->input('summary');
		echo $this->Form->input('description');
		echo $this->Form->input('user_id');
		echo $this->Form->input('featured', array('after' => '<span class="label label-info">Should be included in the homepage carousel?</span>'));
		echo $this->Form->input('approved', array('after' => '<span class="label label-info">Display this project on the site?</span>'));
		echo $this->Form->input('screenshot', array('type' => 'file', 'after' => $this->Html->image('../files/project/screenshot/' . $this->request->data['Project']['screenshot_dir'] . '/medium_' . $this->request->data['Project']['screenshot'])));
		echo $this->Form->input('screenshot_dir', array('type' => 'hidden'));
	?>
	</fieldset>
<?php
echo $this->Form->submit('Save project', array('class' => 'btn btn-success', 'after' => $this->Html->link('Cancel', array('controller' => 'projects', 'action' => 'index'), array('class' => 'btn btn-danger'))));
echo $this->Form->end();
?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Project.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Project.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Projects'), array('action' => 'index')); ?></li>
	</ul>
</div>
