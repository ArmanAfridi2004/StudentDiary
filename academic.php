<?php 

include('connection.php');



   $first = $_POST['first'];
   $second = $_POST['second'];
   $third = $_POST['third'];
   $fourth = $_POST['fourth'];
   $fifth = $_POST['fifth'];
   $sixth = $_POST['sixth'];
   $seventh = $_POST['seventh'];
   $eighth = $_POST['eighth'];
   $uname = $_SESSION['username']; 
   
    $query = "INSERT INTO academic(FirstSemester,SecondSemester,ThirdSemester,FourthSemester,FifthSemester,SixthSemester, SeventhSemester, EighthSemester, username)
              VALUES('$first','$second','$third','$fourth', '$fifth','$sixth', '$seventh', '$eighth', '$uname')";
    mysqli_query($link,$query);

    header("Location: profile.php?signup=success");

 
?>