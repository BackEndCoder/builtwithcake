<div class="users view">
	<h2><?php echo __d('users', 'My account'); ?></h2>
	<dl>
		<dt>Username</dt>
		<dd><?php echo AuthComponent::user('username');?></dd>

		<dt>Email</dt>
		<dd><?php echo AuthComponent::user('email');?></dd>
	</dl>
	
	<h2>My projects</h2>
	<?php
	if (!empty($user['Project'])):
		foreach ($user['Project'] as $project):?>
			<article class="row">
				<div class="col-md-3">
					<?php
					if ($project['screenshot']) {
						echo $this->Html->image('../files/project/screenshot/' . $project['screenshot_dir'] . '/account_' . $project['screenshot'], array(
								'class' => 'img-responsive'
							)
						);
					}
					?>
				</div>
				<div class="col-md-9">
					<header>
						<p class="project-status">Approved? <?php echo $this->Boolean->display($project['approved']) ?></p>
						<?php
						if (!$project['approved']) {
							echo $this->Html->link('Edit', array('controller' => 'projects', 'action' => 'edit', $project['id']), array('class' => 'btn btn-info btn-xs', 'role' => 'button'));
						}
						?>
						<h3><?php echo $project['title'];?></h3>
						<p><?php
							if (!empty($project['url'])) {
								echo $this->Html->link($project['url'], $project['url']);
							}
						?></p>
					</header>
					<div class="summary"><?php echo h($project['summary']);?></div>
				</div>
			</article>
		<?php endforeach;
	else:
		?><p><?php
			echo $this->Html->link('Submit your first project!', array('controller' => 'projects', 'action' => 'add'));
		?></p><?php
	endif;
	?>
</div>