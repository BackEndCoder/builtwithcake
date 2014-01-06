<div id="content" class="row">
	<?php if (!empty($latestProjects)): ?>
		<div id="projects">
			<?php foreach ($latestProjects as $project): ?>
				<div class="project">
					<div class="row">
						<div class="col-md-12">
							<?php
							echo $this->Html->link(
								$this->Html->image('../files/project/screenshot/' . $project['Project']['screenshot_dir'] . '/medium_' . $project['Project']['screenshot'], array('class' => 'img-responsive')),
								array('controller' => 'projects', 'action' => 'view', $project['Project']['id']),
								array('escape' => false)
							);
							?>
							<?php
							echo $this->Html->link(
								'<h3>' . $project['Project']['title'] . '</h3>',
								array('controller' => 'projects', 'action' => 'view', $project['Project']['id']),
								array('escape' => false)
							);
							?>
							<p><?php echo $project['Project']['summary']; ?></p>
							<?php
							echo $this->Html->link(
								'<span class="glyphicon glyphicon-link"></span> View Website',
								$project['Project']['url'],
								array('escape' => false)
							);
							?>
						</div>
					</div>
				</div>
			<?php endforeach;?>
		</div>
	<?php endif;?>
</div>
