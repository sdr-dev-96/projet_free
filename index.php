<?php
require_once('inc/header_home.html');
require_once('inc/footer.html');
?>
	<div class="container">
	<?php 
		$services = array(
			1 => array(
				'libelle' => 'TV',
				'page' => 'tv.php',
				'picto' => '<img src="img/picto_tv.svg" width="80">'),
			2 => array(
				'libelle' => 'Téléphonie',
				'page' => 'telephonie.php',
				'picto' => '<span class="glyphicon glyphicon-earphone"></span>'),
			3 => array(
				'libelle' => 'Internet',
				'page' => 'internet.php',
				'picto' => '<span class="glyphicon glyphicon-globe"></span>'),
			4 => array(
				'libelle' => 'Réglages',
				'page' => 'reglages.php',
				'picto' => '<span class="glyphicon glyphicon-cog"></span>'));
		foreach($services as $s){
	 ?>
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
				<div class="col-sm-3 icon_service col-xs-4" onclick="location.href='<?php echo $s['page'] ;?>'">
					<?php echo $s['picto']; ?>
				</div>
				<div class="col-sm-9 text-center libelle_service col-xs-8" onclick="location.href='<?php echo $s['page'] ;?>'">
					<h5><?php echo $s['libelle']; ?></h5>
				</div>
			</div>
		</div>
		<?php } ?>
	</div>
	