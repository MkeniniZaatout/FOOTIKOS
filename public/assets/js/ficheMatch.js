"use strict";

$(function(){
	$(".example_id").ionRangeSlider({
		min : 0,
		max : 10
	});

	// à supprimer
	/*$('#modalAjouterCritique').modal({
	  show: true
	})*/

	// Navigation entre les tab du conteneur.
	// Tabs contents
	$('.ficheMatchHeader ul li a').click(function(){
		// On récupère l'identifiant de la div à afficher
		var divId = $(this).attr('href');

		// On cache toutes les div.
		$("#ficheMatchContent .tab").hide();
		$('.ficheMatchHeader ul li a').removeClass('active');

		// On affiche la div cliqué.
		$(this).addClass("active");
		$(divId).show();
	});
});