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
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Link</a>
					</li>
				</ul>
				<form class="form-inline mt-2 mt-md-0">
					<input class="form-control mr-sm-2" type="text" placeholder="Rechercher">
					<button class="btn btn-danger my-2 my-sm-0" type="submit">Rechercher</button>
				</form>
			</div>
		</nav>
	</header>
