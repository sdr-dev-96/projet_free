<?php 
require_once('inc/header.html');
require_once('inc/footer.html');

 ?>
 <div class="container connect">
 	<div class="row">
 		<div class="col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 text-center">
 			<img src="img/logo_free.png" alt="Free" width="110">
 		</div>
 	</div>
 	<div class="row">
 		<div class="col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 text-center">
 			<h3>Connectez-vous</h3>
 		</div>
 		<div class="col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 text-center error_connect">
 			<h3></h3>
 		</div>

 	</div>
 	<div class="alert alert-danger text-center" role="alert" id="error_connect">...</div>
 	<div class="row">
 		<div class="col-sm-10 col-sm-offset-1 col-xs-8 col-xs-offset-2">
 			<input id="login" type="text" class="form-control text-center" placeholder="exemple@free.fr" name="login" autocomplete="off"> 		
 			<input id="password" type="password" class="form-control text-center" placeholder="Mot de passe" name="password" autocomplete="off">
 		</div>
 	</div>
 	<div class="row">
		<div class="col-sm-2 col-sm-offset-9 col-xs-4 col-xs-offset-6">
			<div class="col-sm-8 col-xs-8">
				<h6>Mémoriser</h6>
			</div>
			<div class="col-sm-4 col-xs-4">
				<div class="checked text-center" is-checked="no">
					<span class="glyphicon glyphicon-ok"></span>
				</div>
			</div>			
		</div>
 	</div>
 	<div class="row">
 		<div class="col-sm-10 col-sm-offset-1 col-xs-8 col-xs-offset-2">
 			<div id="validAccount" type="text" class="form-control text-center" value="" name="valider">
 				Valider
 			</div>
 		</div>
 	</div>
 	<div class="row">
		<div class="col-sm-10 col-sm-offset-1 col-xs-8 col-xs-offset-2 text-center">
 			<a href="https://mobile.free.fr/moncompte/index.php?page=oubli" action="_blank">mot de passe oublié ?</a>
 			<br><br>
 			<a href="https://signup.free.fr/subscribe2014/" action="_blank">Inscrivez-vous</a>			
 		</div>
 	</div>
 </div>