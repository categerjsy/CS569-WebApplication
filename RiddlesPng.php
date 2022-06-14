<?php
include 'config.php';

$id_thunt=20;//$_POST["thunt"];

$query = mysqli_query($conn, "SELECT * FROM has WHERE id_thunt='$thunt'");
    while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
        echo $row["qrcode"];
        echo "*";
    }