<nav>
	<p>Hey <?php echo AuthComponent::user('username');?></p>
	<ul class="nav nav-pills nav-stacked">
		<li <?php echo ($this->request->controller === 'projects')? 'class="active"' : '';?>><?php echo $this->Html->link('Projects', array('controller' => 'projects', 'action' => 'index', 'admin' => true));?></li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-repeat"></span> Back to site', '/', array('escape' => false));?></li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-off"></span> Logout', array('controller' => 'bwc_users', 'action' => 'logout', 'admin' => false), array('escape' => false));?></li>
	</ul>
</nav>