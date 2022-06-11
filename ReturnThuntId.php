<?php
include 'config.php';
$thunt=$_POST["name"];

$id_thunt=-1;
$idQuery=mysqli_query($conn,"SELECT * FROM treasure_hunt WHERE name='$thunt'");
 while ($row = mysqli_fetch_array($idQuery, MYSQLI_ASSOC)) {
    $id_thunt=$row["id_thunt"];
 }

echo $id_thunt;
?>