<?php 
require_once('inc/header_service.html');
require_once('inc/footer.html');
 ?>
	<div class="container" id="programmes_tv">
	<?php 
		$programmes = array(
			1 => array(
				'nom' => 'Esprits Criminels',
				'heure_debut' => '20h50',
				'heure_fin' => '23h00',
				'width' => 'width: 60%;',
				'chaine' => 'tf1'),
			2 => array(
				'nom' => 'Plus Belle la vie',
				'heure_debut' => '21h00',
				'heure_fin' => '22h45',
				'width' => 'width: 40%;',
				'chaine' => 'france2'),
			3 => array(
				'nom' => 'Slam',
				'heure_debut' => '20h30',
				'heure_fin' => '21h00',
				'width' => 'width: 75%;',
				'chaine' => 'france3'),
			4 => array(
				'nom' => 'Le Grand Journal',
				'heure_debut' => '19h05',
				'heure_fin' => '20h45',
				'width' => 'width: 80%',
				'chaine' => 'canalplus'),
			5 => array(
				'nom' => 'C à vous',
				'heure_debut' => '20h50',
				'heure_fin' => '23h00',
				'width' => 'width: 60%;',
				'chaine' => 'france5'),
			6 => array(
				'nom' => 'L\'amour est dans le pré',
				'heure_debut' => '20h50',
				'heure_fin' => '23h00',
				'width' => 'width: 60%;',
				'chaine' => 'm6'),
			7 => array(
				'nom' => 'Histoire de l\'Europe',
				'heure_debut' => '20h50',
				'heure_fin' => '23h00',
				'width' => 'width: 60%;',
				'chaine' => 'arte'),
			8 => array(
				'nom' => 'Touche pas à mon Poste',
				'heure_debut' => '19h05',
				'heure_fin' => '21h05',
				'width' => 'width: 55%;',
				'chaine' => 'c8'),
			9 => array(
				'nom' => 'Les Marseillais : South America',
				'heure_debut' => '19h50',
				'heure_fin' => '20h40',
				'width' => 'width: 63%;',
				'chaine' => 'w9'),
			10 => array(
				'nom' => 'Le Quotidien',
				'heure_debut' => '19h30',
				'heure_fin' => '20h45',
				'width' => 'width: 58%;',
				'chaine' => 'tmc')
			);
		foreach ($programmes as $p) {
			?>
			<div class="row">
				<div class="col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
					<div class="col-sm-3 chaine col-xs-4" id="<?php echo $p['chaine']; ?>">

					</div>
					<div class="col-sm-9 text-center programme col-xs-8">
						<h4><?php echo $p['nom']; ?></h4>
						<h6><?php echo $p['heure_debut'] . ' - ' . $p['heure_fin'];  ?></h6>
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
		TV
			<ul>
				<li>
					<a href="#">
						<span class="glyphicon glyphicon-play" aria-hidden="true"></span>
						Live
					</a>					
				</li>
				<li>
					<a href="#">
						<span class="glyphicon glyphicon-list" aria-hidden="true"></span>
						Programmes
					</a>
				</li>
				<li>
					<a href="#">
						<span class="glyphicon glyphicon-backward" aria-hidden="true"></span>
						Replay
					</a>
				</li>
				<li>
					<a href="#">
						<span class="glyphicon glyphicon-film" aria-hidden="true"></span>
						VOD
					</a>
				</li>
			</ul>
		</div>
		<div class="row">
		Téléphonie
			<ul>
				<li>Live</li>
				<li>Programmes</li>
				<li>Replay</li>
				<li>VOD</li>
			</ul>
		</div>

	</div>
	<div class="accounts">
		<ul class="list-group">
			<li class="list-group-item">
				<a href="#">
					<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
					User 1	
				</a>				
			</li>
			<li class="list-group-item">
				<a href="#">
					<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
					User 2	
				</a>				
			</li>
			<li class="list-group-item">
				<a href="#">
					Gérer les comptes
				</a>
			</li>
			<li class="list-group-item">
				<a href="https://mobile.free.fr/moncompte/">
					Mon Compte
				</a>
			</li>
			<li class="list-group-item">
				<a href="connect.php">
					<span class="glyphicon glyphicon-off" aria-hidden="true"></span>
					Déconnexion
				</a>
			</li>
		</ul>
	</div>