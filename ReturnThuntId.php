<?php
include 'config.php';
$thunt=$_POST["name"];
$user=$_POST["user"];
$idQueryUser=mysqli_query($conn,"SELECT * FROM user WHERE username='$user'");
 while ($rowu = mysqli_fetch_array($idQueryUser, MYSQLI_ASSOC)) {
    $id_user=$rowu["id_user"];
 }

$id_thunt=-1;
$idQuery=mysqli_query($conn,"SELECT * FROM treasure_hunt WHERE name='$thunt'");
 while ($row = mysqli_fetch_array($idQuery, MYSQLI_ASSOC)) {
    $id_thunt=$row["id_thunt"];
 }

$id_team=-1;
$idQueryTeam=mysqli_query($conn,"SELECT * FROM is_member,participate
                                 WHERE is_member.id_user='$id_user' AND is_member.role='leader' AND participate.id_thunt='$id_thunt'
                                 AND participate.id_team=is_member.id_team");
 while ($rowt = mysqli_fetch_array($idQueryTeam, MYSQLI_ASSOC)) {
   $id_team=$rowt["id_team"];

 }

echo "Treasure Hunt *";
echo $id_thunt;
echo "* Team *";
echo $id_team;
?>