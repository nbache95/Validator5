<!DOCTYPE html>
<html lang="fr">
	<head>
		<title> Validateur norme w3c </title>
		<meta charset="utf-8"/>
		<!--<link rel="icon" href="./assets/favicon.ico" type="image/x-icon" sizes="16x16" />-->
		<link rel="stylesheet" type="text/css" href="./assets/style.css"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
		<link rel="icon" href="./assets/check-circle-regular.png">
		<?php
			$fpass=$_GET['fpass']; 
			if($fpass == 'true')
			{
				echo ("Les mots de passes ne sont pas identiques"); 
			}
		?>
	</head>
	<body>
		<header>
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<span class="navbar-brand mb-0 h1"> <i class="far fa-check-circle"></i>Validator 5</span>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav">
						<li class="nav-item active"><a class="nav-link" href="index.php"><i class="fas fa-home"></i>Accueil</a></li>
						<li class="nav-item active"><a class="nav-link" href="inscription.php?fpass=false"><i class="fas fa-user-plus"></i>Inscription</a></li>
						<li class="nav-item active"><a class="nav-link" href="connexion.php"><i class="fas fa-user-check"></i>Connexion</a></li>
					</ul>
				</div>
			</nav>
		</header>
		<div class="container">
			<h1>Inscription</h1>
		<form method='get' action='process_inscription.php'>
			<div class="form-group">
				<label for="nom">Nom</label>
				<input name="nom" type="text" class="form-control" id="nom" placeholder="Entrez votre nom" required>
			</div>
			<div class="form-group">
				<label for="prenom">Pr??nom</label>
				<input name="prenom" type="text" class="form-control" id="prenom" placeholder="Entrez votre pr??nom" required>
			</div>
			<div class="form-group">
				<label for="email">Mail</label>
				<input name="email" type="email" class="form-control" id="email" placeholder="Entrez votre e-mail" required>
			</div>
			<div class="form-group">
				<label for="societe">Soci??t??</label>
				<input name="societe" type="text" class="form-control" id="societe" aria-describedby="annotation" placeholder="Entrez le nom de votre soci??t??">
				<small id="annotation" class="form-text text-muted">Ce champs n'est pas obligatoire.</small>
			</div>
			<div class="form-group">
				<label for="mdp">Mot de passe</label>
				<input name="mdp" type="password" class="form-control" id="mdp" placeholder="Entrez votre mot de passe" required>
			</div>
			<div class="form-group">
				<label for="mdpCheck">Confirmer le mot de passe</label>
				<input name="mdpCheck" type="password" class="form-control" id="mdpCheck" placeholder="Entrez le m??me mot de passe" required>
			</div>
			<div class="text-center">
				<button type="submit" class="btn btn-outline-info">S'inscrire</button>
			</div>
		</form>
		
		<footer class="bg-light text-center text-lg-start fixed-bottom">
		<div class="text-center p-3 d-flex justify-content-center">
			<!--<div><figure><img src="./assets/logo_ucp.png" alt="logo ucp" class="img-thumbnail"/></figure></div>-->
			<div>DUFERNEZ Margot & BACHE Nour &copy; CY Cergy-Paris Universit?? - UFR Sciences et Techniques</div>
		</div>
		</footer>
		</div>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<script src="http://apps.bdimg.com/libs/angular.js/1.4.6/angular.min.js"> </script>
	</body>
</html>

