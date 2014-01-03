<?php echo $this->Form->create('Project', array('type' => 'file')); ?>
	<?php echo $this->Form->input('id', array('class' => 'form-control')); ?>
	<?php echo $this->Form->input('title', array('class' => 'form-control')); ?>
	<?php echo $this->Form->input('url', array('class' => 'form-control')); ?>
	<?php echo $this->Form->input('summary', array('class' => 'form-control')); ?>
	<?php echo $this->Form->input('description', array('class' => 'form-control')); ?>
	<?php echo $this->Form->input('user_id', array('class' => 'form-control')); ?>
	<?php echo $this->Form->input('featured', array('after' => '<span class="label label-info">Should be included in the homepage carousel?</span>')); ?>
	<?php echo $this->Form->input('approved', array('after' => '<span class="label label-info">Display this project on the site?</span>')); ?>
	<?php echo $this->Form->input('screenshot', array('type' => 'file', 'after' => $this->Html->image('../files/project/screenshot/' . $this->request->data['Project']['screenshot_dir'] . '/medium_' . $this->request->data['Project']['screenshot']))); ?>
	<?php	echo $this->Form->input('screenshot_dir', array('type' => 'hidden')); ?>

	<?php echo $this->Form->input('Plugin', array('class' => 'form-control')); ?>
	<?php echo $this->Form->input('composer_file', array('type' => 'file')); ?>
<?php
echo $this->Form->submit('Save Project', array('class' => 'btn btn-success', 'after' => $this->Html->link('Cancel', array('controller' => 'projects', 'action' => 'index'), array('class' => 'btn btn-danger'))));
echo $this->Form->end();
?>