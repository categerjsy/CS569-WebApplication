<?php
include 'config.php';
session_start ();

$teamname=$_POST['teamname'];
$number=$_POST['number'];

$sql = "INSERT INTO team (name,numberPlayers)
VALUES ('$teamname','$number')";
mysqli_query($conn,$sql);
$last_id = $conn->insert_id;
$user=$_SESSION["id_user"];
$_SESSION["id_team"] =$last_id;
$sql1 = "INSERT INTO creates_team (id_user,id_team)
VALUES ('$user','$last_id')";
mysqli_query($conn,$sql1);
header("Location: homepage.php?msg=team");

?>