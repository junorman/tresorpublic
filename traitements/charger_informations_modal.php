<?php 

include '../db/db.php';

extract($_POST);

//echo "confirmation";

$sql = "SELECT *, t.montant as mt FROM titres as t, recettes as r 
WHERE t.code_rec=r.code_rec AND t.code ='$numero'"; 

$result = mysqli_query($db,$sql);
$get_confirmation = mysqli_fetch_array($result);
if($get_confirmation){
 ?>


 <div class="row">
 	<div class="col-md-6">
 		<strong><b>Code: </b></strong><br>
 		<strong><b>Recette:</b></strong><br>
 		<strong><b>Montant:</b></strong><br>
 		<strong><b>Nom & prenom:</b></strong><br>
 		<strong><b>Matricule:</b></strong><br>
 		<strong><b>Tel:</b></strong>
 	</div>
 	<div class="col-md-6">
 		<span><?php echo $get_confirmation['code'] ?></span><br>
 		<span><?php echo $get_confirmation['libelle_rec']?></span><br>
 		<span><?php echo $get_confirmation['mt']?></span><br>
 		<span><?php echo $get_confirmation['nom'].' '.$get_confirmation['prenom']?></span><br>
 		<span><?php echo $get_confirmation['matricule']?></span><br>
 		<span><?php echo $tel ?></span>
 	</div>
 </div>
 <?php 
}
 ?>

