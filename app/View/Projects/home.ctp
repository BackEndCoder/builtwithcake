<div id="featured-projects" class="carousel slide" data-ride="carousel">
	<?php $featuredProjects = Hash::extract($projects, '{n}.Project[featured=true]');?>
	
	<ol class="carousel-indicators">
		<?php foreach ($featuredProjects as $k => $project):?>
			<li data-target="#featured-projects" data-slide-to="<?php echo $k;?>"></li>
		<?php endforeach;?>
	</ol>

	<div class="carousel-inner">
		<?php foreach ($featuredProjects as $k => $project):?>
		<div class="item <?php echo ($k === 0)? 'active' : '';?>">
			<?php echo $this->Html->image('../files/project/screenshot/' . $project['screenshot_dir'] . '/carousel_' . $project['screenshot']);?>
			<div class="carousel-caption">
				<?php echo h($project['summary']);?>
			</div>
		</div>
		<?php endforeach;?>
	</div>
</div>

<div class="row">
	<div class="col-md-4">
		<h2>About BuiltWithCake.com</h2>
		<p>Praesent lectus mi, gravida ut sollicitudin eget, fringilla imperdiet ante. Fusce dolor velit, porta quis rhoncus id, volutpat sed risus. Donec pellentesque magna egestas erat tempus, quis cursus velit ultrices. Maecenas id euismod erat. Curabitur aliquam urna mauris, ac vulputate tellus lacinia id. Aliquam sit amet nisl mattis, fermentum tortor vitae, scelerisque lacus. Nulla sed lorem et erat porta interdum. Donec id blandit dui.</p>
	</div>
	<div class="col-md-4">
		<h2>Why showcase your site?</h2>
		<p>Praesent lectus mi, gravida ut sollicitudin eget, fringilla imperdiet ante. Fusce dolor velit, porta quis rhoncus id, volutpat sed risus. Donec pellentesque magna egestas erat tempus, quis cursus velit ultrices. Maecenas id euismod erat. Curabitur aliquam urna mauris, ac vulputate tellus lacinia id. Aliquam sit amet nisl mattis, fermentum tortor vitae, scelerisque lacus. Nulla sed lorem et erat porta interdum. Donec id blandit dui.</p>
	</div>
	<div class="col-md-4">
		<h2>Latest showcases</h2>
		<ul class="latest-projects">
			<?php
			if (!empty($latestProjects)):
				foreach ($latestProjects as $project): ?>
					<li>
						<?php
						echo $this->Html->link(
							$this->Html->image('../files/project/screenshot/' . $project['Project']['screenshot_dir'] . '/small_' . $project['Project']['screenshot']) . "<p>" . $project['Project']['title'] . '<br>' . $project['Project']['url'] . "</p>",
							array('controller' => 'projects', 'action' => 'view', $project['Project']['id']),
							array('escape' => false)
						);
						?>
					</li>
				<?php
				endforeach;
			else:
				echo "<li>Be the first to submit your site!</li>";
			endif;
			?>
		</ul>
		<div class="clearfix"><!-- blank --></div>
		<p><?php echo $this->Html->link('More projects &raquo;', array('controller' => 'projects', 'action' => 'index'));?></p>
	</div>
</div>