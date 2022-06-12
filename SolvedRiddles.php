<?php
include 'config.php';

$id_team=5;
$id_thunt=20;

$checkQuery="SELECT * FROM has WHERE id_thunt='$id_thunt'";
$result=mysqli_query($conn,$checkQuery);
$total=mysqli_num_rows($result);

$solveQuery="SELECT * FROM has WHERE id_thunt='$id_thunt' AND id_team='$id_team";
$solveResult=mysqli_query($conn,$solveQuery);
$solved=mysqli_num_rows($solveResult);

echo $solved+"/"+$total;


?>