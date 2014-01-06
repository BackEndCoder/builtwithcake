<div id="content" class="row">
	<div class="projects form">
	<?php echo $this->Form->create('Project', array('type' => 'file', 'role' => 'form')); ?>
		<fieldset>
			<legend><?php echo __('Add Project'); ?></legend>
			<p>Required fields are marked with an asterisk *</p>
			<div class="form-group">
				<?php echo $this->Form->input('title', array('class' => 'form-control')); ?>
			</div>
			<div class="form-group">
				<?php echo $this->Form->input('url', array('class' => 'form-control', 'after' => '<p>Where is your project available online?</p>')); ?>
			</div>
			<div class="form-group">
				<?php echo $this->Form->input('summary', array('class' => 'form-control', 'after' => '<p>A few lines summarising what your project achieves.</p>')); ?>
			</div>
			<div class="form-group">
				<?php echo $this->Form->input('description', array('class' => 'form-control', 'after' => '<p>Describe the plugins, technologies and techniques used to build your project.</p>')); ?>
			</div>
			<div class="form-group">
				<?php echo $this->Form->input('screenshot', array('class' => 'form-control', 'type' => 'file')); ?>
			</div>
			<div class="form-group">
				<?php echo $this->Form->input('screenshot_dir', array('type' => 'hidden')); ?>
			</div>
			<p>Tell us about the plugins you've used in your project.</p>

			<div class="form-group">
				<?php echo $this->Form->input('Plugin', array('class' => 'form-control', 'after' => '<p>Or upload your composer.json and we\'ll auto-detect your dependancies</p>')); ?>
			</div>
			<div class="form-group">
				<?php echo $this->Form->input('composer_file', array('type' => 'file'));
				?>
			</div>
			<p>Submitting your project will add it to the moderation queue. It will not appear on the site until it is approved by an administrator.</p>
		</fieldset>
	<?php
	echo $this->Form->submit('Submit my project', array('class' => 'btn btn-success'));
	echo $this->Form->end();
	?>
	</div>
</div>
