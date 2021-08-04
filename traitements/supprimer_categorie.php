<?php 
include '../db/db.php';

extract($_POST);

$sql = "DELETE FROM categories WHERE id_cat='".$id."'";

if(mysqli_query($db, $sql)) { echo "success"; } else { echo mysqli_error($db); }

 ?>