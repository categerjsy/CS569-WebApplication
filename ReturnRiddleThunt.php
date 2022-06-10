<?php
include 'config.php';
session_start ();

$thunt=20; //εδω καλο ειναι να μπει Post αλλιως Get το βλέπουμε


$query = mysqli_query($conn, "SELECT * FROM has WHERE id_thunt='$thunt'");
    while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
        $riddle=$row["id_riddle"];
        $queryr = mysqli_query($conn, "SELECT * FROM riddle WHERE id_riddle='$riddle'");
         while ($rowr = mysqli_fetch_array($queryr, MYSQLI_ASSOC)) {
            echo $rowr["text"];
            echo "*";
            echo $rowr["location_solution"];
            echo"*";
            echo $rowr["object_AR"];
            echo "*";
            echo $rowr["infotext"];
            echo "*";
            echo $rowr["points"];
         }
    }