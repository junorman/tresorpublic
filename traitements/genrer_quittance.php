<?php 

include '../db/db.php';

$numero = $_POST['numero'];

$sql = "SELECT * FROM paiements WHERE code = '".$numero."'"; 
$result = mysqli_query($db,$sql);
$row = mysqli_num_rows($result);

if ($row > 0) {
	echo "success";
}else{
	echo "error";
}

 ?>