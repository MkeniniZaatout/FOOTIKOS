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
			    		
			    		<div class="loginContainer">
			    			<div class="customTitre"><h1>Se connecter :</h1></div>
			    			
			    			<div class="facebookConnect">
			    				<a href="#">
			    					<img src="../assets/img/facebookConnect.png">
			    				</a>
			    			</div>

			    			<div class="separateur">OU</div>

			    			<div class="formulaire">
			    				<form>
									<div class="form-group">
										<label for="formEmail">Votre adresse email :</label>
										<input type="email" class="form-control" id="formEmail" placeholder="Adresse email">
									</div>

									<div class="form-group">
										<label for="formMotDePasse">Votre mot de passe :</label>
										<input type="password" class="form-control" id="formMotDePasse" placeholder="Mot de passe">
									</div>

									<div class="form-group">
										<a href="#" id="motDePasseOublie">Mot de passe oublié ?</a>
										<a href="signup.php" class="float-right">Pas de compte ?</a>
									</div>

									<button type="submit" class="btn btn-warning btn-block">Connexion</button>
								</form>
			    			</div>
			    		</div><!-- .loginContainer -->    


			    		<div class="passwordRecoveryContainer">
				    		<div class="customTitre"><h1>Récupérer votre mot de passe :</h1></div>

				    		<div class="formulaire">
				    			<form>
									<div class="form-group">
										<label for="formEmail">Votre adresse email :</label>
										<input type="email" class="form-control" id="formEmail" placeholder="Adresse email">
									</div>	
									<div class="form-group">
										<a href="#" id="seConnecter">Se connexion.</a>
										<a href="signup.php" class="float-right">Pas de compte ?</a>
									</div>
									<button type="submit" class="btn btn-warning btn-block">Récupérer</button>
								</form>
				    		</div>
				    	</div><!-- .passwordRecovery -->		
			    	

			    	</div><!-- #login -->

			    	

	    		</div><!-- .col-lg-6 -->

	    		<div class="col-lg-3"></div>
	    	</div><!-- .row -->

	    </div><!-- container -->

	    <script type="text/javascript">
	    	$(function(){
	    		// Clique sur le lien mot de passe oublié.
	    		$("#motDePasseOublie").click(function(){
	    			$(".loginContainer").hide();
	    			$(".passwordRecoveryContainer").show();
	    		});
	    		// Clique sur le bouton se connecter.
	    		$("#seConnecter").click(function(){
	    			$(".loginContainer").show();
	    			$(".passwordRecoveryContainer").hide();
	    		});
	    	});
	    </script>


	</body>
</html>
