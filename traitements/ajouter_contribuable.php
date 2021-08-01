<?php 
include '../db/db.php';

extract($_POST);

$statut_cont = 1;
$sex = "";
$nif_cont = "";

$sql = "SELECT * FROM contribuables WHERE nom = '".$nom."' 
AND prenom = '".$prenom."'";
$result = mysqli_query($db,$sql);
$row = mysqli_num_rows($result);

if ($type == 1 && $nif == "") {
	
	echo "errors";
}else if($type == 2){
	$sex = $sexe;
	$nif_cont = "";
	
	if ($row == 0) {
	if(mysqli_query($db,"insert into contribuables (nom, prenom, tel, type, sexe, statut_cont, nif) values('$nom','$prenom','$tel', '$type', '$sex', '$statut_cont', '$nif_cont')"))
	{ echo "success";}  
	else{ echo mysqli_error($db);}

	}else{
		echo "error";
	}

}else{
	$sex = "";
	$nif_cont = $nif;
	
	if ($row == 0) {
	if(mysqli_query($db,"insert into contribuables (nom, prenom, tel, type, sexe, statut_cont, nif) values('$nom','$prenom','$tel', '$type', '$sex', '$statut_cont', '$nif_cont')"))
	{ echo "success";}  
	else{ echo mysqli_error($db);}

	}else{
		echo "error";
	}
}



 ?>