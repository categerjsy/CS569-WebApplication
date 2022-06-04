<?php

//$_SESSION['URL']
$id_hunt=$_SESSION["part_id"];

unset($_SESSION["part_id"]);

$team=$_POST["team"];

$sql= "INSERT INTO participate (id_thunt,id_team)
    VALUES ('$id_hunt','$team')";
mysqli_query($conn,$sql);

header("location:homepage.php?msg=huntpart"); 


?>