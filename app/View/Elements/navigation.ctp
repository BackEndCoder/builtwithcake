<nav>
	<ul class="nav nav-pills">
		<li <?php echo ($this->request->controller === 'projects' && $this->request->action === 'home')? 'class="active"' : '';?>><?php echo $this->Html->link('Home', array('controller' => 'projects', 'action' => 'home', 'admin' => false, 'plugin' => false));?></li>
		<li <?php echo ($this->request->controller === 'projects' && $this->request->action !== 'home')? 'class="active"' : '';?>><?php echo $this->Html->link('Projects', array('controller' => 'projects', 'action' => 'index'));?></li>

		<?php if (AuthComponent::user()): ?>
			<li class="dropdown <?php echo ($this->request->controller === 'bwc_users')? 'active' : '';?>">
				<?php echo $this->Html->link('My account <span class="caret"></span>', array('controller' => 'bwc_users', 'action' => 'view', 'slug' => AuthComponent::user('slug')), array('escape' => false, 'class' => 'dropdown-toggle', 'data-toggle' => 'dropdown'));?>
				<ul class="dropdown-menu">
					<li><?php echo $this->Html->link('My account', array('controller' => 'bwc_users', 'action' => 'view', 'slug' => AuthComponent::user('slug')));?></li>
					<li><?php echo $this->Html->link('Logout', array('controller' => 'bwc_users', 'action' => 'logout', 'admin' => false, 'plugin' => false));?></li>
				</ul>
			</li>
		<?php else: ?>
			<li <?php echo ($this->request->action === 'login')? 'class="active"' : '';?>><?php echo $this->Html->link('Login', array('controller' => 'bwc_users', 'action' => 'login', 'admin' => false, 'plugin' => false));?></li>
		<?php endif;?>

		<?php if (AuthComponent::user('is_admin') === true):?>
			<li><?php echo $this->Html->link('Go to admin', array('controller' => 'projects', 'action' => 'index', 'admin' => true));?></li>
		<?php endif;?>
	</ul>
</nav>