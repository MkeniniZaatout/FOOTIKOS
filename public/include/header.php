<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">	
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title></title>

		<link rel="stylesheet" href="assets/css/style.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" ="anonymous">
		
		<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" ></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>

	</head>
	<body>

		<nav id="header" class="navbar navbar-expand-lg navbar-dark bg-dark">
		    <div class="container">
		    	<a class="navbar-brand" href="#">
		    		<img src="assets/img/logo.png">
		    	</a>

		    	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
		        	<span class="navbar-toggler-icon"></span>
		     	</button>

				<div class="collapse navbar-collapse" id="menu">
				    <ul class="navbar-nav mr-auto">
				      <li class="nav-item"><a class="nav-link" href="ficheMatch.php">Accueil</a></li>
				      <li class="nav-item"><a class="nav-link" href="matchs.php">Fiches de matchs</a></li>
				      <li class="nav-item"><a class="nav-link" href="faq.php">Foire aux questions</a></li>          
				    </ul> 

				    <ul class="navbar-nav navbar-right">
						<?php if (isset($_SESSION['id'])): ?>
				        <li class="dropdown">
				          	<a href="#" class="nav-link dropdown-toggle" id="dropDownUserMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				          		Mohamed El karmoudi<?php //echo $_SESSION["username"]; ?> <span class="caret"></span>
				          	</a>

				        	<ul class="dropdown-menu" aria-labelledby="dropDownUserMenu">
				        		<li>
				        			<a href="dashboard.php" class="dropdown-item">Mon profil</a>
				        		</li>		                
				        		
				        		<li class="dropdown-divider"></li>
				        		
				        		<li>
				        			<a href="login/logout.php" class="dropdown-item">Se déconnecter</a>
				        		</li>
				        	</ul>
				        </li>

			        	<?php else: ?>
				        <li class="nav-item"><a class="nav-link" href="login/login.php">Se connecter</a></li>
						<li class="nav-item"><a class="nav-link" href="login/signup.php">S'inscrire</a></li>
						<?php endif; ?>
		          	</ul>      
				</div>
		    </div>
	    </nav>

	    <!-- //////////////////////////////////// -->