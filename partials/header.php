<?php
require_once(__DIR__.'/../config/config.php');
require_once(__DIR__.'/../config/functions.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

	<!-- Font-awesome --->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css">

	<!-- Custom CSS -->
	<link rel="stylesheet" href="assets/css/style.css">

	<title><?php echo 'Document -'.$siteName ; ?></title>
</head>
<body>

	<header>
		<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark navbar-glossy">
			<a class="navbar-brand navbar-logo" href="#"><?php echo $siteName ; ?></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse">
				<span class="navbar-toggler-icon"></span>
			</button>
			
			<div class="collapse navbar-collapse" id="navbarCollapse">
				<?php require_once(__DIR__.'/main_menu.php'); ?>
				<?php require_once(__DIR__.'/search_bar.php'); ?>
				<?php require_once(__DIR__.'/user_menu.php'); ?>
			</div>
		</nav>
	</header>
