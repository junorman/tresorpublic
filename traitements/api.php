<?php 
include '../db/db.php';

$numero = $_POST['numero'];
$message = $_POST['message'];
$date = date('Y-m-d H:i:s');
$status = 0;
$transaction = rand(15,35).$numero;
$token = rand(10,35);

$sql = "SELECT * FROM titres WHERE code = '".$message."'"; 
$result = mysqli_query($db,$sql);
$row = mysqli_num_rows($result);


if ($row > 0) {
	mysqli_query($db,"insert into tmp_paiement (code, date, transaction, tel, statut)
					 values('$message','$date','$transaction', '$numero', '$status')");
	
	// pvit implementation

	$post = [
		'tel_marchand' => '074814529',
		'montant' => $row->montant,
		'ref'   => $transaction,
		'tel_client'  => $tel,
		'token'   => $token,
		'action'   => 1,
		'service'   => 'REST',
		'operateur'   => 'AM',
		'agent'   => 'SPONTANNE',
	];
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_URL,"https://mypvit.com/pvit-secure-full-api.kk");
	curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($post));
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	$resultat = curl_exec($ch);


	var_dump($resultat);

}


 ?>