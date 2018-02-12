<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">	
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title></title>

		<link rel="stylesheet" href="../assets/css/login.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" ="anonymous">
		
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" ></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>

		<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
	</head>
	<body>

		<div class="container">

	    	<div class="row">
	    		<div class="col-lg-3"></div>

	    		<div class="col-lg-6">
	    			<div class="logo">
	    				<a href="#">
	    					<img src="../assets/img/logoLogin.png" class="img-fluid">
	    				</a>
	    			</div>
	    			

	    			<div id="loginPage">			    		


			    		<div class="signUpContainer">
			    			<div class="customTitre"><h1>Inscription :</h1></div>
			    			
			    			<div class="facebookConnect">
			    				<a href="#">
			    					<img src="../assets/img/facebookConnect.png">
			    				</a>
			    			</div>

			    			<div class="separateur">OU</div>

			    			<div class="formulaire">
			    				<form>
			    					<div class="form-group">
										<label for="formPseudo">Ton pseudo :</label>
										<input type="text" class="form-control" id="formPseudo" placeholder="Ton pseudo">
									</div>

									<div class="form-group">
										<label for="formEmail">Votre adresse email :</label>
										<input type="email" class="form-control" id="formEmail" placeholder="Adresse email">
									</div>

									<div class="form-group">
										<label for="formMotDePasse">Votre mot de passe :</label>
										<input type="password" class="form-control" id="formMotDePasse" placeholder="Mot de passe">
									</div>

									<div class="form-group">
										<label for="formMotDePasse2">Retapez votre mot de passe :</label>
										<input type="password" class="form-control" id="formMotDePasse2" placeholder="Mot de passe">
									</div>

									<div class="form-group">
										<a href="login.php" id="motDePasseOublie">Se connecter.</a>
									</div>

									<button type="submit" class="btn btn-warning btn-block">Je m'inscris</button>
								</form>
			    			</div>
			    		</div><!-- .loginContainer -->    


			    	</div><!-- #login -->

			    	

	    		</div><!-- .col-lg-6 -->

	    		<div class="col-lg-3"></div>
	    	</div><!-- .row -->

	    </div><!-- container -->

	</body>
</html>
