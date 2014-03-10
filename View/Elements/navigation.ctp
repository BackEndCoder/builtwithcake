<nav>
	<ul class="nav nav-pills">
		<li <?php echo ($this->request->controller === 'projects' && $this->request->action === 'home')? 'class="active"' : '';?>><?php echo $this->Html->link('Home', array('controller' => 'projects', 'action' => 'home', 'admin' => false, 'plugin' => false));?></li>
		<li <?php echo ($this->request->controller === 'projects' && $this->request->action === 'index')? 'class="active"' : '';?>><?php echo $this->Html->link('Projects', array('controller' => 'projects', 'action' => 'index'));?></li>
		<li <?php echo ($this->request->controller === 'projects' && $this->request->action === 'add')? 'class="active"' : '';?>><?php echo $this->Html->link('Submit project', array('controller' => 'projects', 'action' => 'add'));?></li>
	</ul>
</nav>