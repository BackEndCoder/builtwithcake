<div class="projects view">
	<?php echo $this->Html->image('../files/project/screenshot/' . $project['Project']['screenshot_dir'] . '/medium_' . $project['Project']['screenshot']);?>
	<div class="intro">
		<h1><?php echo h($project['Project']['title']);?></h1>
		<p class="meta"><?php echo $this->Time->niceShort($project['Project']['created']);?> by <?php echo AuthComponent::user('username');?></p>

		<h2>Summary</h2>
		<?php echo h($project['Project']['summary']);?>
	</div>

	<div class="desc">
		<h2>Description</h2>
		<?php echo h($project['Project']['description']);?>
	</div>
</div>