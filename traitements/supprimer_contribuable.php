<?php 
include '../db/db.php';

extract($_POST);

$statut_cont = 0;

$sql = "update contribuables set  statut_cont='".$statut_cont."' 
        WHERE id_cont='".$id."' ";
		if(mysqli_query($db, $sql)){ echo "success";} 
		else{ echo mysqli_error($db);}

 ?>