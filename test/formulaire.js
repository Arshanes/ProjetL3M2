// http://learn.jquery.com/ajax/
// http://jquery.malsup.com/form/#getting-started

/*
Fonction qui vérifie que les input n'ont pas de value vide
ptabInput : tableau d'objet jquery à évaluer
Renvoie un tableau d'object contenant les champs vides.
*/
function inputVide(tabJInput) {

	tabInputVide = [];
	tabJInput.each(function(index) {
	
		if($(this).val().trim() == "") {
		
			$(this).addClass("class_champs_erreur");
			tabInputVide.push($(this));
		} else {
			$(this).removeClass("class_champs_erreur");
		}
	});
	return(tabInputVide);
}

function eventConnexion(element) {

	// Vérification du formulaire (champs non-vides)
	var tabInputVide = inputVide(element.parents("form:first").find("input[type='text']"));
	
	if(tabInputVide.length != 0) {
		alert("Champs vides !");
	} else {
		
		var tab_input = $("#formulaire").find("input[type='text']");
		var tabInputVide = inputVide(tab_input);

		if(tabInputVide.length != 0) {

			alert("Il y a eu des erreurs");
		} else {
		
			// /***************Cette partie sert à faire une requête ajax via l'objet FormDate, non supporté par IE8,9 mais par IE10***********************/
			// var formData = new FormData();

			// /******Ajout des input au formmulaire à envoyer en Ajax*****/
			// formData.append("nomInput", tab_input[0].value);
			// formData.append("prenomInput", tab_input[1].value);
			// formData.append("emailInput", tab_input[2].value);
			
			// alert("avant ajax");
			// $.ajax({
			// url : "formulaire.php",
			// type : "post",
			// data : formData,
			// cach : false,
			// processData : false,
			// contentType : false
			// }).done(function(msg){

				// alert("Retour du serveur : "+msg);
			// });
			// alert("après ajax");
			
			
			// $('.class_bouton_connexion').submit( function(event) {
			
				alert("prou prout");
				$.ajax({
					url     : 'formulaire.php',
					type    : 'post',
					dataType: 'json',
					data    : element.parents("form:first").serialize(),
					success : function( data ) {
								for(var id in data) {
									// jQuery('#' + id).html( data[id] );
									alert("Valeur serveur : " + id);
								}
							},
					error : function(xr, text, erreur) {
					
								alert("XR : "+xr);
								alert("TEXT : "+text);
								alert("ERREUR : "+erreur);
							}
				});

				// return false;
			// });
		}
	}
}

$(document).ready(function(){
	//Evènement click sur le bouton de connexion
	$(".class_bouton_connexion").on("click", function(event){
		event.preventDefault();
		eventConnexion($(this));
	});
});


