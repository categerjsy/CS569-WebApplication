<?php

include 'config.php';
$id_riddle=$_GET["r"];
//εδω καπως θα μπουν τα αντιστοιχα :3
$id_thunt=5;
$id_team=5;


$sql = "INSERT INTO solve (id_riddle,id_thunt,id_team)
VALUES ('$id_riddle','$id_thunt','$id_team')";
mysqli_query($conn,$sql);

?>