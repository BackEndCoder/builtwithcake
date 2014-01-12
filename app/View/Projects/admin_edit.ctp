<div id="content" class="row">
	<?php echo $this->Form->create('Project', array('type' => 'file')); ?>
		<?php echo $this->Form->input('id', array('class' => 'form-control')); ?>
		<div class="row">
			<div class="col-xs-4">
				<?php echo $this->Form->input('title', array('class' => 'form-control')); ?>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-4">
				<?php echo $this->Form->input('url', array('class' => 'form-control')); ?>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6">
				<?php echo $this->Form->input('summary', array('class' => 'form-control')); ?>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6">
				<?php echo $this->Form->input('description', array('class' => 'form-control')); ?>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-4">
				<?php echo $this->Form->input('user_id', array('class' => 'form-control')); ?>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-4">
				<?php echo $this->Form->input('featured', array('after' => ' <span class="label label-info">Should be included in the homepage grid?</span>')); ?>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-4">
				<?php echo $this->Form->input('approved', array('after' => ' <span class="label label-info">Display this project on the site?</span>')); ?>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-4">
				<?php echo $this->Form->input('screenshot', array('type' => 'file', 'after' => $this->Html->image('../files/project/screenshot/' . $this->request->data['Project']['screenshot_dir'] . '/medium_' . $this->request->data['Project']['screenshot']))); ?>
				<?php echo $this->Form->input('screenshot_dir', array('type' => 'hidden')); ?>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-4">
				<?php echo $this->Form->input('Plugin', array('class' => 'form-control')); ?>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-4">
				<?php echo $this->Form->input('composer_file', array('type' => 'file')); ?>
			</div>
		</div>
	<?php
	echo $this->Form->submit('Save Project', array('class' => 'btn btn-success', 'after' => ' ' . $this->Html->link('Cancel', array('controller' => 'projects', 'action' => 'index'), array('class' => 'btn btn-danger'))));
	echo $this->Form->end();
	?>
</div>
