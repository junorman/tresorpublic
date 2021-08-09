<?php 
include '../db/db.php';

//traitement retour pvit......

$data_received=file_get_contents("php://input");
$data_received_xml=new SimpleXMLElement($data_received);
$ligne_response=$data_received_xml[0];

$reference_received=$ligne_response->REF;
$statut_received=$ligne_response->STATUT;
$operateur_received=$ligne_response->OPERATEUR;
$client_received=$ligne_response->TEL_CLIENT;
$message_received=$ligne_response->MESSAGE;

$retour = '200';

mysqli_query($db,"UPDATE tmp_paiement SET statut=".$retour." WHERE code='".$reference_received."'");