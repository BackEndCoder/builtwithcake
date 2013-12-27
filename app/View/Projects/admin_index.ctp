<div class="projects index">
	<header>
		<h2><?php echo __('Projects'); ?></h2>
		<?php echo $this->Html->link('New project', array('controller' => 'projects', 'action' => 'add', 'admin' => true), array('class' => 'btn btn-primary'));?>
	</header>

	<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered table-hover">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('url'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('featured'); ?></th>
			<th><?php echo $this->Paginator->sort('screenshot'); ?></th>
			<th><?php echo $this->Paginator->sort('approved'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($projects as $project): ?>
	<tr>
		<td><?php echo h($project['Project']['id']); ?>&nbsp;</td>
		<td><?php echo h($project['Project']['title']); ?>&nbsp;</td>
		<td><?php echo h($project['Project']['url']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($project['BwcUser']['username'], array('controller' => 'users', 'action' => 'view', $project['BwcUser']['id'])); ?>
		</td>
		<td><?php echo $this->Boolean->display($project['Project']['featured']); ?>&nbsp;</td>
		<td><?php
			if (!empty($project['Project']['screenshot'])) {
				echo $this->Html->link(
					$this->Html->image('../files/project/screenshot/' . $project['Project']['screenshot_dir'] . '/small_' . $project['Project']['screenshot']),
					'#',
					array('data-toggle' => 'modal', 'data-target' => '#screenshot' . $project['Project']['id'], 'title' => 'Click to view larger size', 'escape' => false)
				);

				?><div class="modal fade" id="<?php echo 'screenshot' . $project['Project']['id'];?>" tabindex="-1" role="dialog" aria-labelledby="modalLabel<?php echo $project['Project']['id'];?>" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h4 class="modal-title" id="modalLabel<?php echo $project['Project']['id'];?>"><?php echo $project['Project']['title'];?></h4>
							</div>
							<div class="modal-body">
								<?php echo $this->Html->image('../files/project/screenshot/' . $project['Project']['screenshot_dir'] . '/display_' . $project['Project']['screenshot']); ?>
							</div>
						</div>
					</div>
				</div><?php
			}
		?></td>
		<td><?php echo $this->Boolean->display($project['Project']['approved']); ?>&nbsp;</td>
		<td><?php echo $this->Time->niceShort($project['Project']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $project['Project']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $project['Project']['id']), null, __('Are you sure you want to delete # %s?', $project['Project']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
