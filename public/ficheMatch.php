<?php include ("include/header.php"); ?>

	    <div class="container">
	    	
	    	<div id="scoreTable">
	    		<div id="header">
	    			<div class="row">
				        <div class="col-lg-4">
				        	<p>Actuellement 3300 visiteurs sur cette fiche</p>
				        </div>
				        <div class="col-lg-4">
					        <div class="equipes">
					    			Maroc - France
						    </div>
						</div>
				        <div class="col-lg-4">
				        	<p class="debutMatch">Lundi 25 Juillet 2017 à 20h45</p>
				        </div>
				    </div>
				</div>

	    		<div id="content">
	    			<div class="row">
	    				<div class="col-lg-4">
	    				 	<div class="equipeDomicile">
			    				<img src="assets/img/france.png">

			    				<ul>
			    					<li>Benzema 13" <span><img src="assets/img/goal.png"></span></li>
			    					<li>Benzema 13" <span><img src="assets/img/goal.png"></span></li>
			    					<li>Benzema 13" <span><img src="assets/img/goal.png"></span></li>
			    				</ul>
			    			</div>
	    				 </div>

	    				 <div class="col-lg-4">
	    				 	<div class="score">
			    				<p>1</p>
			    				<p>2</p>
			    			</div>

			    			<div class="matchStatus">
			    				<!-- <p>Match terminé</p> -->

			    				<p class="live"><span class="rounded-circle"></span>LIVE</p>
			    			</div>
	    				 </div>

	    				 <div class="col-lg-4">
	    				 	<div class="equipeExterieur">
			    				<img src="assets/img/maroc.png">

			    				<ul>
			    					<li>Benzema 13" <span><img src="assets/img/goal.png"></span></li>
			    					<li>Benzema 13" <span><img src="assets/img/goal.png"></span></li>
			    					<li>Benzema 13" <span><img src="assets/img/goal.png"></span></li>
			    				</ul>
			    			</div>
	    				 </div>
	    			</div>
	    		</div>

	    		<div id="footer">	    			
	    			<div class="championnat">
	    				<p>Ligue 1 - 2e journée</p>
	    			</div>

	    			<div class="row">
	    				 <div class="col-lg-1">
	    				 	<div class="tempsInitial">
	    				 		<p>0"</p>
	    				 	</div>
	    				 </div>

	    				 <div class="col-lg-10">
	    				 	<div class="progress">
								<div class="progress-bar" style="background:#fbad18; width: 10%" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
	    				 </div>

	    				 <div class="col-lg-1">
	    				 	<div class="tempsFin">
	    				 		<p>90"</p>
	    				 	</div>
	    				 </div>
	    			</div>	    			
	    		</div>
	    	</div><!-- scoreTable -->


	    	<div id="ficheMatchContent">
		    	<div class="ficheMatchHeader">
		    		<ul>
		    			<li><a href="#lesCritiques" class="active">Les critiques</a></li>
		    			<li><a href="#lesFormationEquipes">Formations du match</a></li>
		    			<li><a href="#lesMomentsForts">Moments fort du match</a></li>
		    		</ul>

		    		<a href="#" class="btn btn-warning btnAjoutCritique" data-toggle="modal" data-target="#modalAjouterCritique">Ajouter une critique</a>
	 		    </div>

		    	<div class="conteneur">

		    		<div id="lesCritiques" style="display: block;" class="tab">
		    			<div class="row">
		    				<div class="col-lg-8">
		    					<div class="customTitre"><h1>Les critiques</h1></div>

				    			<div id="critiques">
				    				<div class="critique">
				    					<div class="badgeEquipe">France</div>

				    					<div class="vote">
				    						<a href="#">
				    							<span class="upGris"></span>
				    						</a>
				    						<p class="nbVote">100</p>
				    						<a href="#">
				    							<span class="downGris"></span>
				    						</a>
				    					</div>

				    					<div class="thumb">
				    						<a href="#">
					    						<img class="imgType" src="assets/img/messi.png">
					    					</a>
				    					</div>				    					
				    					
				    					<h3><a href="#">Titire de la critiques</a></h3>

				    					<div class="info">
				    						<p>Auteur : <a href="#">ezez</a> | Commentaires : <a href="#">5</a> | Il y a 2 minutes</p>
				    					</div>

  										<div id="chart"></div>

				    				</div>

				    				<div class="critique">
				    					<div class="badgeEquipe">Maroc</div>

				    					<div class="vote">
				    						<a href="#">
				    							<span class="upGris"></span>
				    						</a>
				    						<p class="nbVote">100</p>
				    						<a href="#">
				    							<span class="downGris"></span>
				    						</a>
				    					</div>

				    					<div class="thumb">
				    						<a href="#">
					    						<img class="imgType" src="assets/img/messi.png">
					    					</a>
				    					</div>
				    					
				    					
				    					<h3><a href="#">Titire de la critiques</a></h3>

				    					<div class="info">
				    						<p>Auteur : <a href="#">ezez</a> | Commentaires : <a href="#">5</a> | Il y a 2 minutes</p>
				    					</div>
				    				</div>	
				    			</div>

		    				</div><!-- col-lg-8 -->

		    				<div class="col-lg-4">
		    					<div class="filtreCritique">
		    						<div class="customTitre"><h1>Filtrer les critiques :</h1></div>
									
									<div class="list-group">
						  				<a href="#" class="list-group-item list-group-item-action">Equipe de france</a>
										<a href="#" class="list-group-item list-group-item-action">Equipe du maroc</a>
										<a href="#" class="list-group-item list-group-item-action">Les dernières</a>
										<a href="#" class="list-group-item list-group-item-action">Critique joueurs</a>
										<a href="#" class="list-group-item list-group-item-action">Critique match en générale</a>
									</div>
		    					</div>		

		    				</div><!-- col-lg-4 -->
		    			</div><!-- row -->
		    		</div>

		    		<div id="lesFormationEquipes" style="display: none;"  class="tab">
						<div class="customTitre"><h2>Formations des équipes :<h2></div>

		    			<div class="terrain">
		    				<img src="assets/img/terrain.png" class="img-fluid">
		    			</div>

		    			<div class="listeJoueurs">

		    				<div class="row">
		    					<div class="col-lg-6">
									<div class="customTitre"><h2>Equipe domicile (France) :<h2></div>
		    						
		    						<div class="joueur">
		    							<div class="row">
			    							<div class="col-lg-4"><p class="numero">10</p></div>
			    							<div class="col-lg-4"><p class="nom">Poiuel Paoizeur</p></div>
			    							<div class="col-lg-4"><img class="image" src="assets/img/messi.png"></div>
		    							</div>
		    						</div>
		    						<div class="joueur">
		    							<div class="row">
			    							<div class="col-lg-4"><p class="numero">1</p></div>
			    							<div class="col-lg-4"><p class="nom">Poiuel Paoizeur</p></div>
			    							<div class="col-lg-4"><img class="image" src="assets/img/messi.png"></div>
		    							</div>
		    						</div>
		    						<div class="joueur">
		    							<div class="row">
			    							<div class="col-lg-4"><p class="numero">20</p></div>
			    							<div class="col-lg-4"><p class="nom">Poiuel Paoizeur</p></div>
			    							<div class="col-lg-4"><img class="image" src="assets/img/messi.png"></div>
		    							</div>
		    						</div>
		    						<div class="joueur">
		    							<div class="row">
			    							<div class="col-lg-4"><p class="numero">5</p></div>
			    							<div class="col-lg-4"><p class="nom">Poiuel Paoizeur</p></div>
			    							<div class="col-lg-4"><img class="image" src="assets/img/messi.png"></div>
		    							</div>
		    						</div>
		    						<div class="joueur">
		    							<div class="row">
			    							<div class="col-lg-4"><p class="numero">3</p></div>
			    							<div class="col-lg-4"><p class="nom">Poiuel Paoizeur</p></div>
			    							<div class="col-lg-4"><img class="image" src="assets/img/messi.png"></div>
		    							</div>
		    						</div>
		    						
		    					</div>

		    					<div class="col-lg-6">
									<div class="customTitre"><h2>Equipe domicile (Maroc) :<h2></div>
	    							
	    							<div class="joueur exterieur">
		    							<div class="row">
			    							<div class="col-lg-4"><img class="image" src="assets/img/messi.png"></div>
			    							<div class="col-lg-4"><p class="nom">Poiuel Paoizeur</p></div>
			    							<div class="col-lg-4"><p class="numero">8</p></div>
		    							</div>
		    						</div>
		    						<div class="joueur exterieur">
		    							<div class="row">
			    							<div class="col-lg-4"><img class="image" src="assets/img/messi.png"></div>
			    							<div class="col-lg-4"><p class="nom">Poiuel Paoizeur</p></div>
			    							<div class="col-lg-4"><p class="numero">9</p></div>
		    							</div>
		    						</div>
		    						<div class="joueur exterieur">
		    							<div class="row">
			    							<div class="col-lg-4"><img class="image" src="assets/img/messi.png"></div>
			    							<div class="col-lg-4"><p class="nom">Poiuel Paoizeur</p></div>
			    							<div class="col-lg-4"><p class="numero">29</p></div>
		    							</div>
		    						</div>
		    						<div class="joueur exterieur">
		    							<div class="row">
			    							<div class="col-lg-4"><img class="image" src="assets/img/messi.png"></div>
			    							<div class="col-lg-4"><p class="nom">Poiuel Paoizeur</p></div>
			    							<div class="col-lg-4"><p class="numero">15</p></div>
		    							</div>
		    						</div>
		    						<div class="joueur exterieur">
		    							<div class="row">
			    							<div class="col-lg-4"><img class="image" src="assets/img/messi.png"></div>
			    							<div class="col-lg-4"><p class="nom">Poiuel Paoizeur</p></div>
			    							<div class="col-lg-4"><p class="numero">4</p></div>
		    							</div>
		    						</div>
		    						<div class="joueur exterieur">
		    							<div class="row">
			    							<div class="col-lg-4"><img class="image" src="assets/img/messi.png"></div>
			    							<div class="col-lg-4"><p class="nom">Poiuel Paoizeur</p></div>
			    							<div class="col-lg-4"><p class="numero">10</p></div>
		    							</div>
		    						</div>

		    					</div>
		    				</div>

		    				
		    			</div>
		    		</div>

		    		<div id="lesMomentsForts" class="tab">c</div>
		    	</div>

	    	</div><!-- #ficheMatchContent -->
	    </div><!-- container -->


	    <!-- 
	    ///// MODAL 
	    -->
	    <div class="modal fade" id="modalAjouterCritique" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<div class="customTitre"><h5>Ajouter une critique</h5></div>
					</div>
					
					<div class="modal-body">
						
						<div id="evaluer">
							<p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua.</p>

							<div class="row">
								<div class="col-lg-6">
									<div class="item">
										<p class="labelInput">- Evaluation titre :</p>
										<input type="text" class="example_id" name="example_name" value="" />
									</div>
									
								</div>

								<div class="col-lg-6">
									<div class="item">
										<p class="labelInput">- Evaluation titre :</p>
										<input type="text" class="example_id" name="example_name" value="" />
									</div>
								</div>

								<div class="col-lg-6">
									<div class="item">
										<p class="labelInput">- Evaluation titre :</p>
										<input type="text" class="example_id" name="example_name" value="" />
									</div>
								</div>

								<div class="col-lg-6">
									<div class="item">
										<p class="labelInput">- Evaluation titre :</p>
										<input type="text" class="example_id" name="example_name" value="" />
									</div>
								</div>

								<div class="col-lg-12">
									<p class="labelInput">- Critique :</p>
									<textarea class="form-control" rows="10"></textarea>
								</div>
							</div>
						</div>

						<!-- <div id="selectJoueur">
							<p class="description">Selectionnez le joueur à critiquer :</p>
							
								<div class="itemsBox">
									<p class="categorieJoueur">- Goal</p>

									<div class="row">
										<div class="col-lg-2">
											<a href="#">
												<img src="assets/img/messi.png">
											</a>
										</div>										
									</div>
								</div>

								<div class="itemsBox">
									<p class="categorieJoueur">- Joueurs</p>

									<div class="row">
										<div class="col-lg-2">
											<a href="#">
												<img src="assets/img/messi.png">
											</a>
										</div>	
										<div class="col-lg-2">
											<a href="#">
												<img src="assets/img/messi.png">
											</a>
										</div>	
										<div class="col-lg-2">
											<a href="#">
												<img src="assets/img/messi.png">
											</a>
										</div>	
										<div class="col-lg-2">
											<a href="#">
												<img src="assets/img/messi.png">
											</a>
										</div>	
										<div class="col-lg-2">
											<a href="#">
												<img src="assets/img/messi.png">
											</a>
										</div>	
										<div class="col-lg-2">
											<a href="#">
												<img src="assets/img/messi.png">
											</a>
										</div>	
										<div class="col-lg-2">
											<a href="#">
												<img src="assets/img/messi.png">
											</a>
										</div>	
										<div class="col-lg-2">
											<a href="#">
												<img src="assets/img/messi.png">
											</a>
										</div>	
										<div class="col-lg-2">
											<a href="#">
												<img src="assets/img/messi.png">
											</a>
										</div>	
										<div class="col-lg-2">
											<a href="#">
												<img src="assets/img/messi.png">
											</a>
										</div>	
										<div class="col-lg-2">
											<a href="#">
												<img src="assets/img/messi.png">
											</a>
										</div>	
									</div>
								</div>

								<div class="itemsBox">
									<p class="categorieJoueur">- Entré en cours de jeu</p>
									
									<div class="row">
										<div class="col-lg-2">
											<a href="#">
												<img src="assets/img/messi.png">
											</a>
										</div>	
										<div class="col-lg-2">
											<a href="#">
												<img src="assets/img/messi.png">
											</a>
										</div>	
										<div class="col-lg-2">
											<a href="#">
												<img src="assets/img/messi.png">
											</a>
										</div>	
										<div class="col-lg-2">
											<a href="#">
												<img src="assets/img/messi.png">
											</a>
										</div>	
										<div class="col-lg-2">
											<a href="#">
												<img src="assets/img/messi.png">
											</a>
										</div>								
									</div>
								</div>
						</div> -->

						<!-- <div id="selectCritiqueType">
							<p class="description">Selectionnez le type de critique à ajouter :</p>

							<div class="row">
								<div class="col-lg-6">
									<a href="#" class="js-critiqueType">
										<img src="assets/img/modalAddCritique/equipeDomicile.png">
									</a>
									<p class="labelType">Equipe domicile (france)</p>
								</div>

								<div class="col-lg-6">
									<a href="#" class="js-critiqueType">
										<img src="assets/img/modalAddCritique/equipeExterieur.png">
									</a>
									<p class="labelType">Equipe extérieur (maroc)</p>
								</div>

								<div class="col-lg-6">
									<a href="#" class="js-critiqueType">
										<img src="assets/img/modalAddCritique/coach.png">
									</a>
									<p class="labelType">Coachs</p>
								</div>

								<div class="col-lg-6">
									<a href="#" class="js-critiqueType">
										<img src="assets/img/modalAddCritique/arbitre.png">
									</a>
									<p class="labelType">Arbitres</p>
								</div>
							</div>
						</div> -->
					</div>

					<!-- <div class="modal-footer">
					  <button type="button" class="btn btn-default disabled" id="btnPrecedent">Précédent</button>
					</div> -->
				</div>
			</div>
		</div>

		<script type="text/javascript">
			$(function(){
				/*
				* MODAL ajouter critique.
				*/
				var btnPrecedent 	= $("#btnPrecedent");

				// Quand on clique sur un type de critique
				$(".js-critiqueType").click(function(){
					// On supprime la class 'selected' sur tous les élèments js-critiqueType.
					$(".js-critiqueType").removeClass("selected");
					// On ajoute la class selected sur l'element cliqué.
					$(this).addClass("selected");
					// On active le bouton suivant.
					btnSuivant.removeClass("disabled");

					// requete vers la page ajax
				});

			});
		</script>
	<script src="assets/js/ficheMatch.js"></script>
	<script src="assets/js/ion.rangeSlider.min.js"></script>
	<link rel="stylesheet" href="assets/css/ion.rangeSlider.css">

<?php include ('include/footer.php'); ?>

