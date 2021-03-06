<div id="content" class="row">
	<div class="row">
		<div class="col-md-3">
			<?php echo $this->Html->image('../files/project/screenshot/' . $project['Project']['screenshot_dir'] . '/medium_' . $project['Project']['screenshot'], array('class' => 'img-responsive'));?>
		</div>
		<div class="col-md-9">
			<h1><?php echo h($project['Project']['title']);?></h1>
			<p class="meta">
				<?php echo $this->Time->format('M j, Y', $project['Project']['created']);?> by <?php echo AuthComponent::user('username');?>
			</p>
			<h2>Description</h2>
			<?php echo h($project['Project']['description']);?>
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
	<div class="row">
		<div class="col-md-12">
			<div id="disqus_thread"></div>
		</div>
		<script type="text/javascript">
			/* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
			var disqus_shortname = 'builtwithcake'; // required: replace example with your forum shortname

			/* * * DON'T EDIT BELOW THIS LINE * * */
			(function() {
				var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
				dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
				(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
			})();
		</script>
		<noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
		<a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
	</div>
</div>
