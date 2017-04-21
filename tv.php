<?php 
require_once('inc/header.html');
require_once('inc/footer.html');
 ?>
 <nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header left-navbar">
				<a class="navbar-brand" href="#">
					<span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
				</a>
			</div>
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
	<div class="container" id="programmes_tv">
	<?php 
		$programmes = array(
			1 => array(
				'nom' => 'Esprits Criminels',
				'heure_debut' => '20h50',
				'heure_fin' => '23h00',
				'width' => 'width: 60%;'),
			2 => array(
				'nom' => 'Plus Belle la vie',
				'heure_debut' => '21h00',
				'heure_fin' => '22h45',
				'width' => 'width: 40%;'),
			3 => array(
				'nom' => 'Slam',
				'heure_debut' => '20h30',
				'heure_fin' => '21h00',
				'width' => 'width: 75%;')
			);
		foreach ($programmes as $p) {
			?>
			<div class="row">
				<div class="col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
					<div class="col-sm-3 chaine col-xs-4">

					</div>
					<div class="col-sm-9 text-center programme col-xs-8">
						<h4><?php echo $p['nom']; ?></h4>
						<h5><?php echo $p['heure_debut'] . ' - ' . $p['heure_fin'];  ?></h5>
						<div class="progress">
							<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="<?php echo $p['width']; ?>">
							</div>
						</div>
					</div>
				</div>
			</div>

			<?php
		}
	 ?>
	</div>
	<div class="side_menu">
		<div class="row">
		Mon compte
		<br>
		Sorya BORGHI
		</div>
		<div class="row">
		Reprendre la lecture
		<br><br>
		Mes enregistrements
		</div>
		<div class="row">
		Catégories
		<br><br>
		Regarder la télé
		<br>
		Chaînes
		<br>
		Films
		<br>
		Séries
		<br>
		Sport
		<br>
		Informations
		<br>
		Documentaires
		<br>
		Culture
		<br>
		Divertissement
		<br>
		Enfants
		</div>
		<div class="row">
		Réglages
		</div>

	</div>