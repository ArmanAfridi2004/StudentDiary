<?php
include('connection.php');


if(isset($_POST['loginButton'])){

  $userName = $_POST['username'];
  $password = $_POST['psw'];

  
  $query = "SELECT * from user WHERE UserName = '$userName' AND pass = '$password'";

  $run= mysqli_query($link, $query);
  if(mysqli_num_rows($run))
  {
      echo "<script>window.open('profile.php','_self')</script>";
      $_SESSION['username']= $userName;
  }
  
  
}



?>