<?php
include 'config.php';

    $userName=$_REQUEST['userName'];
    $PassWord=$_REQUEST['passWord'];
    $checkQuery="SELECT * FROM user WHERE username='$userName' AND password='$PassWord'";
    $result=mysqli_query($conn,$checkQuery);
    
    if(mysqli_num_rows($result)==1)
    {
     echo $userName;
    }
     else
    {
      echo 0;
    }


// $username=$_POST['username'];
// $password=$_POST['password'];

// $queryp = mysqli_query($conn,"select * from user where password='$password' AND username='$username'");
// $rowsp = mysqli_num_rows($queryp);

// if($rowsp == 1) {
//     $_SESSION["username"] = $username;

//     $id = mysqli_query($conn,"select id_user from user where password='$password' AND username='$username'");
//      while ($row = mysqli_fetch_array($id, MYSQLI_ASSOC)) {
//          $my_user=$row["id_user"];
//     }
//     $_SESSION["id_user"] =  $my_user;

    
//} 
?>
