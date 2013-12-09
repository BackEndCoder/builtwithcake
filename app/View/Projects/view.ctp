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

	<?php if (!empty($project['Plugin'])): ?>
		<div class="plugins">
			<h4>Plugins</h4>
			<?php
			$plugins = '';
			foreach ($project['Plugin'] as $plugin) {
				$plugins .= $this->Html->link($plugin['vendor'] . '/' . $plugin['package'], $plugin['repo']);
				$plugins .= ', ';
			}
			echo rtrim($plugins, ', ');
			?>
		</div>
	<?php endif;?>
</div>