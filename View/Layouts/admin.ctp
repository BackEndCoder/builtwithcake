<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>Built With Cake Administration: <?php echo $title_for_layout;?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css(array('../bootstrap/css/bootstrap.min', 'main', 'admin'));

		echo $this->fetch('meta');
		echo $this->fetch('css');
	?>

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	<div class="container">
		<header class="row">
			<div class="title col-md-12">
				<h1>Built With Cake Administration</h1>
			</div>
		</header>
		<div id="content" class="row">
			<div class="col-md-3">
				<?php echo $this->element('admin/navigation');?>
			</div>
			<div class="col-md-9">
				<?php echo $this->Session->flash(); ?>
				<?php echo $this->fetch('content'); ?>
			</div>
		</div>
		<footer class="row">
			<div class="col-md-12">
				<p>&copy; <?php echo date('Y');?> <?php echo $this->Html->link('FriendsOfCake.com', 'http://friendsofcake.com/');?></p>
			</div>
		</footer>
	</div>

	<?php echo $this->Html->script(array('//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js', '../bootstrap/js/bootstrap.min'));?>
	<?php echo $this->fetch('script');?>
</body>
</html>
