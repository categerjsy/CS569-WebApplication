<?php
include 'config.php';
session_start ();

 if (isset($_SESSION["username"])==NULL){
  $actual_link = $_SERVER['REQUEST_URI'];   
  $_SESSION['URL']= $actual_link;
  header("Location: index.php"); 
 }
 if (!isset($_SESSION["username"])==NULL){
    unset($_SESSION['URL']);
    $_SESSION["part_id"]=$_GET["id"];

    $diff=$_SESSION["age"];
    if($diff>14){
      header("location:homepage.php?msg=age");
    }else {
      header("location:selectTeam.php"); 
    }
 }

?>