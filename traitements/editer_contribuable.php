<?php 
include '../db/db.php';

extract($_POST);

/*$sql = "SELECT * FROM contribuables WHERE nom = '".$nom."' 
AND prenom = '".$prenom."'";
$result = mysqli_query($db,$sql);
$row = mysqli_num_rows($result);*/

if ($type == 1 && $nif == "") {
        
        echo "errors";
}else if($type == 2){
        $sex = $sexe;
        $nif_cont = "";

        $sql = "update contribuables set  nom='".$nom."',
        prenom='".$prenom."', tel='".$tel."',
        type='".$type."', sexe='".$sex."', nif='".$nif_cont."' 
        WHERE id_cont='".$id_cont."' ";
                if(mysqli_query($db, $sql)){ echo "success";} 
                else{ echo mysqli_error($db);}
}else{
        $sex = "";
        $nif_cont = $nif;

        $sql = "update contribuables set  nom='".$nom."',
        prenom='".$prenom."', tel='".$tel."',
        type='".$type."', sexe='".$sex."', nif='".$nif_cont."' 
        WHERE id_cont='".$id_cont."' ";
                if(mysqli_query($db, $sql)){ echo "success";} 
                else{ echo mysqli_error($db);}
}

 ?>