<!DOCTYPE html>
<html>
<head>
	<title><?=(isset($this->title)) ? $this->title : 'MVC'; ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo URL ?>/public/css/default.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo URL ?>/public/js/jquery-3.2.1.min.js" ></script>
	<?php 
		if(isset($this->js)){
			foreach ($this->js as $js)
			{
				echo '<script type="text/javascript" src="'.URL.'/views/'.$js.'" ></script>';
			}
		} 
	?>
	
</head>
<body>

<?php Session::init(); ?>

	<div id="header">

		<?php if (Session::get('loggedIn') == false): ?>

			<a href="<?php echo URL ?>/index" title="">Index</a>
			<a href="<?php echo URL ?>/help" title="">Help</a>

		<?php endif; ?>

		<?php if (Session::get('loggedIn') == true): ?>
			<a href="<?php echo URL ?>/dashboard" title="">Dashboard</a>

			<?php if (Session::get('role') == 'owner'): ?>
				<a href="<?php echo URL ?>/user" title="">Users</a>
			<?php endif; ?>
			
			<a href="<?php echo URL ?>/dashboard/logout" title="">Logout</a>
		<?php else: ?>
			<a href="<?php echo URL ?>/login" title="">Login</a>
		<?php endif; ?>
	</div>
	<div id="content">
	