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

if($statut_received == 200){
    //mettre a jour la table paiement temporaire
    mysqli_query($db,"update tmp_paiement set statut = 1 where transaction = '$reference_received'");

    //recuprer les elements de la table temporaire et dees titres, 
    $sql = "SELECT *, t.code as titre FROM tmp_paiement p, titres t WHERE p.transaction = '".$reference_received."' and t.code = p.code";
    $result = mysqli_query($db,$sql);
    $data = mysqli_fetch_array($result);
    $code = $data['code'];
    $matricule = $data['matricule'];
    $date_gen = $data['date_gen'];
    $code_rec = $data['code_rec'];
    $montant = $data['montant'];
    $tel = $data['tel'];
    $nom = $data['nom'];
    $prenom = $data['prenom'];

    //inserer dans la table des paiements
    $date = date('Y-m-d H:i:s');
    mysqli_query($db,"insert into paiements (code, matricule, date_gen, date_paiement, code_rec, montant, tel, nom, prenom)
    values('$result->code','$result->matricule','$result->date','$date','$result->code_rec',$result->montant ,'$result->tel','$result->nom','$result->prenom')");

    //mises a jour des titres
    mysqli_query($db,"update titres set statut = 1 where code = '$code'");
}

?>