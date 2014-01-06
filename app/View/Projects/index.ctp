<div id="content" class="row">
	<div class="projects index">
		<header>
			<h2><?php echo __('Projects'); ?></h2>
		</header>

		<?php $k = 0; ?>
		<?php $lastProject = count($projects) - 1; ?>
		<?php foreach ($projects as $project):?>
			<?php if ($k % 3 === 0): ?>
				<article class="row">
			<?php endif; ?>

				<div class="col-md-4">
					<div class="row">
						<div class="col-md-2">
							<?php
							if ($project['Project']['screenshot']) {
								if (!empty($project['Project']['screenshot'])) {
									echo $this->Html->link(
										$this->Html->image('../files/project/screenshot/' . $project['Project']['screenshot_dir'] . '/medium_' . $project['Project']['screenshot'], array('class' => 'img-responsive')),
										'#',
										array('data-toggle' => 'modal', 'data-target' => '#screenshot' . $project['Project']['id'], 'title' => 'Click to view larger size', 'escape' => false)
									);

									?>
									<div class="modal fade" id="<?php echo 'screenshot' . $project['Project']['id'];?>" tabindex="-1" role="dialog" aria-labelledby="modalLabel<?php echo $project['Project']['id'];?>" aria-hidden="true">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
													<h4 class="modal-title" id="modalLabel<?php echo $project['Project']['id'];?>"><?php echo $project['Project']['title'];?></h4>
												</div>
												<div class="modal-body">
													<?php echo $this->Html->image('../files/project/screenshot/' . $project['Project']['screenshot_dir'] . '/display_' . $project['Project']['screenshot']); ?>
													<div class="clearfix"><!-- blank --></div>
												</div>
											</div>
										</div>
									</div><?php
								}
							}
							?>
						</div>
						<div class="col-md-10">
							<header>
								<h3><?php echo $this->Html->link($project['Project']['title'], array('controller' => 'projects', 'action' => 'view', $project['Project']['id']));?></h3>
								<p><?php
									if (!empty($project['Project']['url'])) {
										echo $this->Html->link($project['Project']['url'], $project['Project']['url']);
									}
								?></p>
							</header>
							<div class="summary">
								<?php echo h($project['Project']['summary']);?>
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
					</div>
				</div>
			<?php if ($k % 3 === 2 || $k === $lastProject): ?>
				</article>
			<?php endif; ?>

			<?php $k++; ?>

		<?php endforeach; ?>

		<div class="paging">
		<?php
			echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
			echo $this->Paginator->numbers(array('separator' => ''));
			echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
		?>
		</div>
	</div>
</div>
