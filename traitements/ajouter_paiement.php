<?php 
include '../db/db.php';
extract($_POST);

$sql = "SELECT * FROM titres WHERE code = '".$numero."'"; 

$date = date('Y-m-d H:i:s');
$status = 0;
$transaction = rand(15,35).$numero;

$result = mysqli_query($db,$sql);
$row = mysqli_num_rows($result);

if ($row > 0) {
	if(mysqli_query($db,"insert into tmp_paiement (code, date, transaction, tel, statut) values('$numero','$date','$transaction', '$tel', '$status')"))
	{ echo "success";}
}



?>