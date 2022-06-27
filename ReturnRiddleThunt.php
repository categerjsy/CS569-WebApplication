<?php
include 'config.php';
session_start ();

$name_thunt="Demo 2";//$_POST["thunt"];

$query = mysqli_query($conn, "SELECT * FROM treasure_hunt WHERE name='$name_thunt'");
    while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
        $id_thunt=$row["id_thunt"];
    }
$number=1;
$query = mysqli_query($conn, "SELECT * FROM has WHERE id_thunt='$id_thunt'");
    while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
        $riddle=$row["id_riddle"];
        $queryr = mysqli_query($conn, "SELECT * FROM riddle WHERE id_riddle='$riddle'");
         while ($rowr = mysqli_fetch_array($queryr, MYSQLI_ASSOC)) {
            echo $rowr["text"];
            echo "*";
            echo $rowr["location_solution"];
            echo "*";
            echo $rowr["infotext"];
            echo "*";
            echo $rowr["points"];
            echo "*";
            echo "riddle_t";
            echo $id_thunt;
            echo "_r";
            echo $number;
            echo "*";
         }
    }