<?php
include '../db/db.php';

extract($_POST);


$retour = '<script type="text/javascript">';

if (preg_match("#^[A-Za-zéèàùçêâûôîäëïüö -]+$#", $libelle)) {
	$sql = "SELECT libelle_cat FROM categories WHERE libelle_cat = '".$libelle."'";
	$result = mysqli_query($db,$sql);
	$row = mysqli_num_rows($result);

	if ($row == 0) {
		if(mysqli_query($db,"INSERT INTO categories (libelle_cat) VALUES('$libelle')")) {
			$sql = "SELECT * FROM categories WHERE libelle_cat = '$libelle'";
			$result = mysqli_query($db,$sql);
			$get_cats = mysqli_fetch_array($result);

			$ligne = '<tr id="'.$get_cats['id_cat'].'">';
			$ligne .= '<td class="table-plus">'.$get_cats['libelle_cat'].'</td>';
			$ligne .= '<td>'.$get_cats['date_cat'].'</td>';
			$ligne .= '<td>';
			$ligne .= '<div class="dropdown">';
			$ligne .= '<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">';
			$ligne .= '<i class="dw dw-more"></i>';
			$ligne .= '</a>';
			$ligne .= '<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">';
			$ligne .= '<button id="'.$get_cats['id_cat'].'" class="dropdown-item btn-delete"><i class="dw dw-delete-3"></i> Supprimer</button>';
			$ligne .= '</div></div></td></tr>';


			$retour .= '$(\''.$ligne.'\').appendTo($("#liste-cat"));';
			$retour .= '$("#lib-cat.is-invalid").removeClass("is-invalid");';
			$retour .= '$("#lib-cat").val("");';
			$retour .= '$("#msg-success").show();';
			$retour .= '$("#msg-success").fadeIn();';
			$retour .= '$("#msg-success").focus();';
			$retour .= 'setTimeout(function(){ $("#msg-success").fadeOut("slow"); }, 5000);';
		} else {
			echo mysqli_error($db);
		}
	} else {
		$retour .= '$("#lib-cat").addClass("is-invalid");';
		$retour .= '$("#msg-error").show();';
		$retour .= '$("#msg-error").fadeIn();';
		$retour .= '$("#msg-error").focus();';
		$retour .= 'setTimeout(function(){ $("#msg-error").fadeOut("slow"); }, 5000);';
	}
} else {
	$retour .= '$("#lib-cat").addClass("is-invalid");';
}

$retour .= '</script>';

echo $retour;
?>