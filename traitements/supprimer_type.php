<?php 
include '../db/db.php';

extract($_POST);

$sql = "DELETE FROM types WHERE id_type='".$id."'";

if(mysqli_query($db, $sql)) { echo "success"; } else { echo mysqli_error($db); }

 ?>