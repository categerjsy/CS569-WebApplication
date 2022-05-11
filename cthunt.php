<?php
include 'config.php';
session_start ();

$thname=$_POST['thname'];
$datetime=$_POST['datetime'];
$status=$_POST['status'];

$sql = "INSERT INTO treasure_hunt (name,datetime,status)
VALUES ('$thname','$datetime','$status')";
mysqli_query($conn,$sql);
$last_id = $conn->insert_id;
$user=$_SESSION["id_user"];
$sql1 = "INSERT INTO creates_treasure_hunt (id_user,id_thunt)
VALUES ('$user','$last_id')";
mysqli_query($conn,$sql1);
header("Location: homepage.php?msg=hunt");

?>