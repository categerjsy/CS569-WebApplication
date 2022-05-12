<?php
include 'config.php';
session_start ();

$riddleText=$_POST['riddleText'];
$solution=$_POST['solution'];
$object=$_POST['object'];
$infoText=$_POST['infoText'];
$number=$_POST['number'];


$sql = "INSERT INTO riddle (text, location_solution ,object_AR ,infotext, points)
VALUES ('$riddleText','$solution','$object','$infoText','$number')";
mysqli_query($conn,$sql);
$last_id = $conn->insert_id;
$user=$_SESSION["id_user"];
$sql1 = "INSERT INTO produce (id_user,id_riddle)
VALUES ('$user','$last_id')";
mysqli_query($conn,$sql1);
header("Location: homepage.php?msg=riddle");

?>