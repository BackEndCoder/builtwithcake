<div class="projects form">
<?php echo $this->Form->create('Project', array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Add Project'); ?></legend>
		<p>Required fields are marked with an asterisk *</p>
		<?php
		echo $this->Form->input('title');
		echo $this->Form->input('url');
		echo $this->Form->input('summary');
		echo $this->Form->input('description');
		echo $this->Form->input('screenshot', array('type' => 'file'));
		echo $this->Form->input('screenshot_dir', array('type' => 'hidden'));
	?>
		<p>Submitting your project will add it to the moderation queue. It will not appear on the site until it is approved by an administrator.</p>
	</fieldset>
<?php
echo $this->Form->submit('Submit my project', array('class' => 'btn btn-success'));
echo $this->Form->end();
?>
</div>
