// Mon petit panier version 1.12
// Antoine, https://www.1formatik.com

//Configuration

// Faut-il imposer un nombre de produits commandés minimum ?
// 0 pour désactiver les commandes par lot
// 1 pour activer la fonctionnalité de commande par lot
var Qte_Minimum = 1;

// Si la fonction est activé, quel est le nombre de produits minimum
var Qte_Minimum_Valeur = 6; 

// Les messages concernant la fonctionnalité de commande par lot
var txt_qte_minimum_bad = "<font color='red'>Attention les quantités ne sont pas corrects, les commandes se font par lot de " + Qte_Minimum_Valeur + " produits minimum</font>";
var txt_qte_minimum_ok = "<font color='green'>Le nombre de produits est correct</font>";
var txt_qte_minimum_defaut = "Les commandes se font par lot de " + Qte_Minimum_Valeur + " produits";

// Livraison
// 0 pour désactiver un coût supplémentaire lié à la livraison
// 1 pour activer la fonctionnalité de modification du prix total pour inclure le prix de la livraison selon un pourcentage du prix total
// 2 pour activer la fonctionnalité de modification du prix total pour inclure le prix de la livraison selon un forfait fixe
// 3 pour activer la fonctionnalité de choix du transporteur avec prix différents selon le choix
// Si vous activez un autre choix que l'option 3, pensez à supprimer la portion de code HTML dan sle fichier index.php correspondant aux modes de livraison
var Livraison = 3;

// Si oprion 1, % du prix total total correspondant au prix de la livraison
var Poucentage_Livraison = 25;

// Si option 2, forfait de la livraison en euro
var Forfait_Livraison = 19;

// Comment affiche-t-on les prix du panier et du total
// Pour rappel, les prix des produits sont à modifier via les attributs HTML data-prix dans le fichier index.php
// 0 pour aficher aucune décimale : 19 euros
// 2 pour afficher deux décimales : 19.00 euros
var decimal = 2;

//Comportement des boutons ajouter au panier
// 0 Plusieurs clics sur un même bouton remplacent l'ancienne quantité choisie
// 1 Plusieurs clics sur un même bouton cumulent les quantités
var clic_bouton = 0;

// Ne pas modifier la suite sauf si vous désirez modifier le code
var MonPanier = (function() {
	panier = [];
	function Item(nom, prix, quantite) {
		this.nom = nom;
		this.prix = prix;
		this.quantite = quantite;
	}

	function savepanier() {
		sessionStorage.setItem('MonPanier', JSON.stringify(panier));
	}

	function loadpanier() {
		panier = JSON.parse(sessionStorage.getItem('MonPanier'));
	}
	
	if (sessionStorage.getItem("MonPanier") != null) {
		loadpanier();
	}

	var obj = {};

	obj.ajouter_produit_dans_panier = function(nom, prix, quantite) {
		for(var item in panier) {
			if(panier[item].nom === nom) {
				if((quantite) && (clic_bouton == 0))
				{
					panier[item].quantite = Number(quantite);
				}
				else if((quantite) && (clic_bouton == 1))
				{
					panier[item].quantite = Number(panier[item].quantite) + Number(quantite);
				}
				else 
				{
					panier[item].quantite ++;
				}
				savepanier();
				return;
			}
		}
		var item = new Item(nom, prix, quantite);
		panier.push(item);
		savepanier();
	}

	obj.setquantiteForItem = function(nom, quantite) {
		for(var i in panier) {
			if (panier[i].nom === nom) {
				panier[i].quantite = quantite;
				break;
			}
		}
	};

	obj.enlever_produit_de_panier = function(nom) {
		for(var item in panier) {
			if(panier[item].nom === nom) {
				panier[item].quantite --;
				if(panier[item].quantite === 0) {
					panier.splice(item, 1);
				}
			break;
			}
		}
		savepanier();
	}

	obj.enlever_produit_de_panier_tous = function(nom) {
		for(var item in panier) {
			if(panier[item].nom === nom) {
				panier.splice(item, 1);
				break;
			}
		}
		savepanier();
	}

	obj.clearpanier = function() {
		panier = [];
		savepanier();
	}

	obj.totalquantite = function() {
		var totalquantite = 0;
		for(var item in panier) {
			totalquantite += Number(panier[item].quantite);
		}
		return Number(totalquantite);
	}

	obj.totalpanier = function() {
		var totalpanier = 0;
		for(var item in panier) {
			totalpanier += panier[item].prix * panier[item].quantite;
		}
		return Number(totalpanier.toFixed(decimal));
	}

	obj.listpanier = function() {
		var panierCopy = [];
		for(i in panier) {
			item = panier[i];
			itemCopy = {};
			for(p in item) {
				itemCopy[p] = item[p];
			}
			itemCopy.total = Number(item.prix * item.quantite).toFixed(decimal);
			panierCopy.push(itemCopy)
		}
		return panierCopy;
	}

	return obj;
})();

function changeQte(element){
	var qte = element.value;
	var t = $(element);
	var label = t.attr("aria-label");
	let data_qte =  document.querySelector("[data-nom='"+ label +"']");
	data_qte.removeAttribute("data-qte");
	data_qte.setAttribute("data-qte", ""+qte+"");
}

$('.ajouter-panier').click(function(event) {
	event.preventDefault(); 
	var nom_option = "";
	var prix_option = 0;
	var option_checkbox = $(this).data('checkbox');
	if (option_checkbox != "") 
	{
		var checkboxes = document.getElementsByClassName(option_checkbox);
			for(var i = 0; i < checkboxes.length; i++) {
				if (checkboxes[i].checked == true) {
					var nom_option = nom_option + " (" + $(checkboxes[i]).data('nom') +")";
					var prix_option = prix_option + Number($(checkboxes[i]).data('prix'));
				}
			}
	}  
	if ($(this).data('select')) 
	{
		var nom = $(this).data('nom') + " (" + document.getElementById(""+$(this).data('select')+"").value + ")" + nom_option;
	}
	else var nom = $(this).data('nom');
	var prix = Number($(this).data('prix')) + prix_option;
	if ($(this).attr('data-qte'))
	{
		var qte_option = $(this).attr('data-qte');
		MonPanier.ajouter_produit_dans_panier(nom, prix, qte_option);
	}
	else MonPanier.ajouter_produit_dans_panier(nom, prix, 1);
	afficherpanier();
});

$('.clear-panier').click(function() {
	MonPanier.clearpanier();
	afficherpanier();
});

$('.choix_livraison').click(function() {
	const cases = document.querySelectorAll('input[name="choix_livraison"]');
	for (const x of cases) {
		if (x.checked) {
		afficherpanier();
	}}
});

function afficherpanier() {
	var panierArray = MonPanier.listpanier();
	var output = "";
	for(var i in panierArray) {
		output += "<div class='row mt-3'>"
		  + "<div class='col-md-5 text-start'>" + panierArray[i].nom + "</div>" 
		  + "<div class='col-md-2 text-start'>Prix unitaire " + panierArray[i].prix.toFixed(decimal) + " €</div>"
		  + "<div class='col-md-3 form-inline'><div class='input-group'><button class='btn btn-primary moins-item' data-nom='" + panierArray[i].nom + "'>-</button>"
		  + "<input type='number' min='1' class='form-control item-quantite' style='width:100px !important' data-nom='" + panierArray[i].nom + "' value='" + panierArray[i].quantite + "'>"
		  + "<button class='btn btn-primary plus-item' data-nom='" + panierArray[i].nom + "'>+</button>"
		  + "<button class='btn btn-danger ms-3 effacer-item' data-nom='" + panierArray[i].nom + "'>X</button></div></div>"
		  + "<div class='col-md-2 text-end'>" + panierArray[i].total + " €</div>" 
		  +  "</div>";
	}
	$('.show-panier').html(output);
	if (Livraison == 3)
	{
		const cases = document.querySelectorAll('input[name="choix_livraison"]');
		for (const x of cases) {
			if (x.checked) {
				let nom_choix_livraison = x.dataset.nom;
				let prix_choix_livraison = x.value;
				let prix_et_livraison = MonPanier.totalpanier() + Number(prix_choix_livraison);
				$('.total-panier').html(prix_et_livraison.toFixed(decimal));
				document.getElementById('livraison-detail').innerHTML = "Livraison incluse (" + nom_choix_livraison + ") : " + prix_choix_livraison +" euros.";
				break;
			}
		}
	}
	if (Livraison == 1)
	{
		$('.total-panier').html(((MonPanier.totalpanier()) + (MonPanier.totalpanier()/(100/Poucentage_Livraison))).toFixed(decimal));
		document.getElementById('livraison-detail').innerHTML = "Livraison incluse: " + Poucentage_Livraison +"% du prix total.";
	}
	if (Livraison == 2)
	{
		$('.total-panier').html((MonPanier.totalpanier() + Forfait_Livraison).toFixed(decimal));
		document.getElementById('livraison-detail').innerHTML = "Livraison incluse: " + Forfait_Livraison +" euros.";
	}
	if (Livraison == 0)
	{
		$('.total-panier').html(((MonPanier.totalpanier())).toFixed(decimal));
	}
	$('.total-panier-modal').html(MonPanier.totalpanier());
	$('.total-quantite').html(MonPanier.totalquantite());
	if ((Qte_Minimum == 1) && (Math.sign(MonPanier.totalquantite() - Qte_Minimum_Valeur) == -1) && (MonPanier.totalquantite() != 0))
	{
		document.getElementById('qte_minimum_report').innerHTML = txt_qte_minimum_bad;
	}
	else if ((Qte_Minimum == 1) && ((Math.sign(MonPanier.totalquantite() - Qte_Minimum_Valeur) == 1) || (Math.sign(MonPanier.totalquantite() - Qte_Minimum_Valeur) == 0)) && (MonPanier.totalquantite() != 0))
	{
		document.getElementById('qte_minimum_report').innerHTML = txt_qte_minimum_ok;
	}
	else if (Qte_Minimum == 1)
	{
		document.getElementById('qte_minimum_report').innerHTML = txt_qte_minimum_defaut;  
	}
	else if (Qte_Minimum == 0)
	{
		document.getElementById('qte_minimum_report').innerHTML = "";
	} 
	
	document.getElementById('total_qte').innerHTML = MonPanier.totalquantite();
}

$('.show-panier').on("click", ".effacer-item", function(event) {
	var nom = $(this).data('nom')
	MonPanier.enlever_produit_de_panier_tous(nom);
	afficherpanier();
})

$('.show-panier').on("click", ".moins-item", function(event) {
	var nom = $(this).data('nom')
	MonPanier.enlever_produit_de_panier(nom);
	afficherpanier();
})

$('.show-panier').on("click", ".plus-item", function(event) {
	var nom = $(this).data('nom')
	MonPanier.ajouter_produit_dans_panier(nom);
	afficherpanier();
})

$('.show-panier').on("change", ".item-quantite", function(event) {
	var nom = $(this).data('nom');
	var quantite = Number($(this).val());
	MonPanier.setquantiteForItem(nom, quantite);
	afficherpanier();
});

afficherpanier();