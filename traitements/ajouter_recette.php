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

if (preg_match("#^Sélectionner une catégorie$#", $categorie)) {
	$erreur = true;

	$retour .= '$("#cat-rec").addClass("is-invalid");';
}

if (preg_match("#^Sélectionner un contribuable$#", $cont)) {
	$erreur = true;

	$retour .= '$("#cont-rec").addClass("is-invalid");';
}

if (!$erreur) {
	$sql = "SELECT code_rec FROM recettes WHERE code_rec = '$code'";
	$result = mysqli_query($db,$sql);
	$row = mysqli_num_rows($result);

	if ($row == 0) {
		if(mysqli_query($db,"INSERT INTO recettes (libelle_rec,code_rec,categorie_rec,cont_rec) VALUES('$libelle','$code','$categorie','$cont')")) {
			$retour .= '$(".is-invalid").removeClass("is-invalid");';
			$retour .= '$("#lib-rec").val("");';
			$retour .= '$("#code-rec").val("");';
			$retour .= '$("#cat-rec").val("");';
			$retour .= '$("#msg-success").show();';
			$retour .= '$("#msg-success").fadeIn();';
			$retour .= '$("#msg-success").focus();';
			$retour .= 'setTimeout(function(){ $("#msg-success").fadeOut("slow"); }, 5000);';
		} else {
			echo mysqli_error($db);
		}
	} else {
		$retour .= '$("#code-rec").addClass("is-invalid");';
		$retour .= '$("#msg-error").show();';
		$retour .= '$("#msg-error").fadeIn();';
		$retour .= '$("#msg-error").focus();';
		$retour .= 'setTimeout(function(){ $("#msg-error").fadeOut("slow"); }, 5000);';
	}
}

$retour .= '</script>';

echo $retour;
?>