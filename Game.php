<?php
include 'config.php';
//Logiki gia to url na exei to username
$username=$_GET["username"];

$idQuery== mysqli_query($conn,"SELECT * FROM user WHERE username='$username'");
 while ($row = mysqli_fetch_array($idQuery, MYSQLI_ASSOC)) {
    $id_user=$row["id_user"];

    $query = mysqli_query($conn, "SELECT * FROM is_member WHERE id_user='$id_user' AND role='leader'");
    while ($rowi = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
      $id_team=$rowi['id_team']; 

      $queryt = mysqli_query($conn, "SELECT * FROM team WHERE id_team='$id_team'");
      while ($rowt = mysqli_fetch_array($queryt, MYSQLI_ASSOC)) {
        $teams_name=$rowt['name'];
        echo $teams_name;  
      }

 }

}   
  

?>
