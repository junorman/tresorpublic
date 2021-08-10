<?php 
include '../db/db.php';
extract($_POST);

$sql = "SELECT * FROM titres WHERE code = '".$numero."'"; 

$date = date('Y-m-d H:i:s');
$status = 0;
$transaction = rand(15,35).$numero;
$token = "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.d1gyRFhqNm1BWWFFUEc2YndkSkdOSWRvZkV1Um1vSG5yR3pISkhEa1EvdGQ4MFpQMXdGSGcxK0RrT2QvVU9yVzlHQWJ6dC9EbkhLd2E4a3FFV2dnU0JGbWpIc2ZLVjlLNUlKenBLNENKcWdBMjRrUW9YdUV3aElxTWhUWThySEhKcVlEWHpJRGdYdmJqV1VkQVRUQVVEVTBZa3hHQS9uMkMrNng2NlBSbjl5c2NqS2RlM0lsN0lWdjgzemZ2bDJYOjpHN3lpNXhjOVRZdG1tTVVTamJMcDN3PT0=.Yo8sFgnsTGMdUCrPQp4px34+N9j3PyM1gL7R1PRqJUY=";
//$token = rand(10,35);

$result = mysqli_query($db,$sql);
$row = mysqli_num_rows($result);

if ($row > 0) {
	mysqli_query($db,"insert into tmp_paiement (code, date, transaction, tel, statut)
					 values('$numero','$date','$transaction', '$tel', '$status')");
	
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


	var_dump($response);


	echo "success";
}else{
	echo 'code invalide';
}

?>