<?php 

include('connection.php');


   $roll = $_POST['roll'];
   $semester = $_POST['semester'];
   $technology = $_POST['technology'];
   $gender = $_POST['gender'];
   $collegename = $_POST['college-name'];
   $fname = $_POST['fathers-name'];
   $mname = $_POST['mothers-name'];
   $dateofbirth = $_POST['date-of-birth'];
   $religion = $_POST['religion'];
   $admissiondate = $_POST['admission-date'];
   $uname = $_SESSION['username']; 

    $query = "INSERT INTO userprofile(Roll,Semester,Technology,Gender,CollegeName,FatherName, MotherName,DateOfBirth, Religion, AdmissionDate, username)
              VALUES('$roll','$semester','$technology','$gender', '$collegename','$fname', '$mname', '$dateofbirth', '$religion', '$admissiondate', '$uname')";

    mysqli_query($link,$query);
    echo $uname;
    header("Location: profile.php?signup=success");

 
?>