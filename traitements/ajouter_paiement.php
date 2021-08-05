<?php 
include '../db/db.php';
extract($_POST);

$sql = "SELECT * FROM titres WHERE code = '".$numero."'"; 

$result = mysqli_query($db,$sql);
$row = mysqli_num_rows($result);

?>