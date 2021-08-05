<?php 
include '../db/db.php';

extract($_POST);

$sql = "UPDATE recettes SET statut_rec=0 WHERE id_rec='$id'";
		if(mysqli_query($db, $sql)){ echo "success";} 
		else{ echo mysqli_error($db);}

 ?>