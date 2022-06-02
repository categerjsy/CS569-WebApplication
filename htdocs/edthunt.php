<?php
include 'config.php';
session_start ();

$thname=$_POST['thname'];
$datetime=$_POST['datetime'];
$id_thunt=$_SESSION['id_thunt'];

$sql = "UPDATE treasure_hunt SET name='$thname' AND datetime='$datetime' WHERE id_thunt='$id_thunt'";
mysqli_query($conn,$sql);

header("Location: homepage.php?msg=edhunt");

?>