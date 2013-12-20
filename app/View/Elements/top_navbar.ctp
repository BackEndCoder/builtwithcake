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
			<?php if (!$authedUser): ?>
				<li><a href="/register">Register</a></li>
				<li><a href="/login">Login</a></li>
			<?php else: ?>
				<li><a href="/logout">Logout</a></li>
			<?php endif; ?>
		</ul>
	</div>
</nav>