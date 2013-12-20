<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#top-navbar">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="#">Built With Cake</a>
	</div>
	<div class="collapse navbar-collapse" id="top-navbar">
		<ul class="nav navbar-nav pull-right">
			<?php $user = AuthComponent::user(); ?>
			<?php if ($user === null): ?>
				<li><a href="/register">Register</a></li>
				<li><a href="/login">Login</a></li>
			<?php else: ?>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<span class="glyphicon glyphicon-user"></span>
							<?php echo $user['username']; ?> <b class="caret"></b>
					</a>
					<ul class="dropdown-menu">
						<li><a href="#">My Account</a></li>
						<?php if ($user['is_admin'] === true): ?>
							<li><a href="/admin/projects">Administration</a></li>
						<?php endif; ?>
						<li><a href="/logout">Logout</a></li>
					</ul>
				</li>
			<?php endif; ?>
		</ul>
	</div>
</nav>