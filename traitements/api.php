<?php 
include '../db/db.php';

$numero = $_POST['numero'];
$message = $_POST['message'];

echo $numero." ".$message;


if(mysqli_query($db,"insert into contribuables (nom, prenom) values('$numero','$message')"))
    { echo "success";}  
    else{ echo mysqli_error($db);}


 ?>