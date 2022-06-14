<?php
include 'config.php';

$id_thunt=$_POST["thunt"];

$query = mysqli_query($conn, "SELECT * FROM has WHERE id_thunt='$id_thunt'");
    while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
        echo $row["qrcode"];
        echo "*";
    }