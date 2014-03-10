<div id="content" class="row">
	<?php echo $this->Form->create('Project', array('type' => 'file', 'role' => 'form')); ?>
		<legend><?php echo __('Add Project'); ?></legend>
		<p>Required fields are marked with an asterisk *</p>
		<div class="row">
			<div class="col-xs-4">
				<?php echo $this->Form->input('title', array('class' => 'form-control')); ?>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-4">
				<?php echo $this->Form->input('url', array('class' => 'form-control', 'after' => '<p>Where is your project available online?</p>')); ?>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6">
				<?php echo $this->Form->input('summary', array('class' => 'form-control', 'after' => '<p>A few lines summarising what your project achieves.</p>')); ?>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6">
				<?php echo $this->Form->input('description', array('class' => 'form-control', 'after' => '<p>Describe the plugins, technologies and techniques used to build your project.</p>')); ?>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-4">
				<?php echo $this->Form->input('screenshot', array('class' => '', 'type' => 'file')); ?>
			</div>
		</div>
		<?php echo $this->Form->input('screenshot_dir', array('type' => 'hidden')); ?>
		<div class="row">
			<div class="col-xs-12">
				<p>Tell us about the plugins you've used in your project.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-4">
				<?php echo $this->Form->input('Plugin', array('class' => 'form-control', 'after' => '<p>Or upload your composer.json and we\'ll auto-detect your dependencies.</p>')); ?>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-4">
				<?php echo $this->Form->input('composer_file', array('type' => 'file')); ?>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<p>Submitting your project will add it to the moderation queue. It will not appear on the site until it is approved by an administrator.</p>
			</div>
		</div>
		<?php
		echo $this->Form->submit('Submit my Project', array('class' => 'btn btn-success'));
		echo $this->Form->end();
		?>
	</div>
</div>
