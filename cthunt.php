<?php
include 'config.php';
session_start ();

$thname=$_POST['thname'];
$datetime=$_POST['datetime'];

$sql = "INSERT INTO treasure_hunt (name,datetime,status)
VALUES ('$thname','$datetime','Created')";
mysqli_query($conn,$sql);
$last_id = $conn->insert_id;
$_SESSION["id_thunt"] =$last_id;
$user=$_SESSION["id_user"];
$sql1 = "INSERT INTO creates_treasure_hunt (id_user,id_thunt)
VALUES ('$user','$last_id')";
mysqli_query($conn,$sql1);
header("Location: homepage.php?msg=hunt");

?>