<?php 

include('connection.php');


 if(isset($_POST['signUpButton'])){
   $firstName = $_POST['first-name'];
   $lastName = $_POST['last-name'];
   $userName = $_POST['user-name'];
   $collegeName = $_POST['college-name'];
   $password = $_POST['pass'];
   $confirmPass = $_POST['confirm'];
  
   $check_username = "SELECT * from user WHERE UserName = '$userName'";
   $run_query = mysqli_query($link, $check_username);

   if(mysqli_num_rows($run_query)>0)
   {
     echo "<script>alert('User $userName already exist in our database, Please try another one!', </script>";
     exit();  
   }
   
   
    $query = "INSERT INTO user(FirstName,LastName,UserName,CollegeName,pass)
              VALUES('$firstName','$lastName','$userName','$collegeName','$password')";

    $result = mysqli_query($link,$query);

    if($result) 
    {
      session_destroy();
      include('C:\xampp\htdocs\StudentDiary\index.php');
    }
    else {
      echo "Failed";
    }
 }
?>