<?php
require_once('inc/header.html');
require_once('inc/footer.html');
?>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header left-navbar free_home">
				<a class="navbar-brand" href="index.php">
				</a>
			</div>
			<div class="navbar-header right-navbar">
				<a href="#" class="navbar-brand">					
					<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
				</a>
				<a href="connect.php" class="navbar-brand">
					<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
				</a>
				<a href="#" class="navbar-brand">
					<span class="glyphicon glyphicon-option-vertical" aria-hidden="true"></span>
				</a>
			</div>
		</div>
	</nav>
	<div class="container">
	<?php 
		$services = array(
			1 => array(
				'libelle' => 'TV',
				'page' => 'tv.php'),
			2 => array(
				'libelle' => 'Téléphonie',
				'page' => 'telephonie.php'),
			3 => array(
				'libelle' => 'Internet',
				'page' => 'internet.php'),
			4 => array(
				'libelle' => 'Réglages',
				'page' => 'reglages.php'));
		foreach($services as $s){
	 ?>
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
				<div class="col-sm-3 icon_service col-xs-4" onclick="location.href='<?php echo $s['page'] ;?>'">
					
				</div>
				<div class="col-sm-9 text-center libelle_service col-xs-8">
					<h3><?php echo $s['libelle']; ?></h3>
				</div>
			</div>
		</div>
		<?php } ?>
	</div>