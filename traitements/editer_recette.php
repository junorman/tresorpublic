<?php
include '../db/db.php';

extract($_POST);
$erreur = false;


$retour = '<script type="text/javascript">';

$retour .= '$(".is-invalid").removeClass("is-invalid");';

if (!preg_match("#^[A-Za-zéèàùçêâûôîäëïüö -]+$#", $libelle)) {
	$erreur = true;

	$retour .= '$("#lib-rec").addClass("is-invalid");';
}

if (preg_match("#^[ <>=]$#", $code)) {
	$erreur = true;

	$retour .= '$("#code-rec").addClass("is-invalid");';
}

if (!$erreur) {
	if(mysqli_query($db,"UPDATE recettes SET libelle_rec = '$libelle',code_rec = '$code',categorie_rec = $categorie,cont_rec = $cont WHERE id_rec = $id_rec")) {
		$retour .= '$(".is-invalid").removeClass("is-invalid");';
		$retour .= '$("#msg-success").show();';
		$retour .= '$("#msg-success").fadeIn();';
		$retour .= '$("#msg-success").focus();';
		$retour .= 'setTimeout(function(){ $("#msg-success").fadeOut("slow"); }, 5000);';
	} else {
		echo mysqli_error($db);
	}
}

$retour .= '</script>';

echo $retour;
?>