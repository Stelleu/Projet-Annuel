<?php 
error_reporting(E_ALL);
ini_set("display_errors", 0);

// Mofidier ci-dessous l'adresse mail de la personne à qui doit parvenir la commande
$destinataire = "noreply@1formatik.com";

if ((isset($_GET["nom"]) && ($_GET["nom"] != "")) 
&& (isset($_GET["prenom"]) && ($_GET["prenom"] != ""))
&& (isset($_GET["cp"]) && ($_GET["cp"] != ""))
&& (isset($_GET["ville"]) && ($_GET["ville"] != ""))
&& (isset($_GET["email"]) && ($_GET["email"] != ""))
&& (isset($_GET["livraison"]) && ($_GET["livraison"] != ""))
&& (isset($_GET["commande"]) && ($_GET["commande"] != ""))
){
	$nom = htmlspecialchars($_GET["nom"], ENT_QUOTES);
	$prenom = htmlspecialchars($_GET["prenom"], ENT_QUOTES);
	$cp = htmlspecialchars($_GET["cp"], ENT_QUOTES);
	$ville = htmlspecialchars($_GET["ville"], ENT_QUOTES);
	$email = htmlspecialchars($_GET["email"], ENT_QUOTES);
	$livraison = htmlspecialchars($_GET["livraison"], ENT_QUOTES);
	$message = nl2br(htmlspecialchars($_GET["message"], ENT_QUOTES));
	$commande = $_GET["commande"];
	$prix_total = htmlspecialchars($_GET["prix_total"], ENT_QUOTES);
	$sujet = 'Commande reçue';
	$messagez = "Nom: ".$nom."<br>
	Prénom: ".$prenom."<br>
	Code postal: ".$cp."<br>
	Ville: ".$ville."<br>
	Adresse e-Mail: ".$email."<br>
	Message: ".$message."<br>
	Liste des produits: ".$commande."<br>
	Prix Total: ".$prix_total."<br>
	Mode de livraison: ".$livraison."";
	$headers = "From: \"Commande\"<".$destinataire.">\n";
	$headers .= "Reply-To: ".$destinataire."\n";
	$headers .= "Content-Type: text/html; charset=\"utf-8\"";
	if(mail($destinataire,$sujet,$messagez,$headers))
	{
		echo "1";
	}
	else
	{
		echo "0";
	}
}
else echo "0";
?>