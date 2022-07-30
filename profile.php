<?php
  include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Diary || Profile</title>
    <link rel= "stylesheet" href = "css/profile.css">
</head>
<body>

    <div class="navbar">
        <nav>
            <ul class = "primary-nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Why use this website?</a></li>
            </ul>  
        </nav>
    </div>  
   
    <div class = "left-profile-box">
        <ul class = "left-profile-box-item">
            <li class ="about-me"><a>About me</a></li>
            <li class ="academic-result"><a>Academic Result</a></li>
            <li class ="exam-schedule"><a>Exam Schedule</a></li>
            <li class ="plans"><a href="#">Plans</a></li>       
        </ul>
    </div>
    <div class="right-profile-box">
        <div class="box-left">
            <img src="images/user.svg" class = "userImage" alt="user"></li>
            <div style ="height: 10%;" class="intro">
                
                <ul class="student-info">
                    <ul class="username">
                        <li style= "font-size: larger; text-align: center; font-weight: bold;" class="name"><?php
                        echo $_SESSION['username'];
                        ?>
                    </ul>
                </ul>
            </div>
            <div class="info">
                <ul>
                    <li>Roll:</li>
                    <li>Semester:</li>
                    <li>Technology:</li>
                    <li>Gender:</li>
                    <li>College Name:</li>
                    <li>Father's Name:</li>
                    <li>Mother's Name:</li>
                    <li>Date of Birth:</li>
                    <li>Religion:</li>
                    <li>Admission date:</li>   
                </ul>
                <form action= "userprofile.php" method="POST">
                    <div class = "dataField" id ="userProfileUpdate">
                    <ul>
                    <li><input type="text" name="roll" required></li>
                    <li><input type="text" name="semester" required></li>
                    <li><input type="text" name="technology" required></li>
                    <li><input type="text" name="gender" required></li>
                    <li><input type="text" name="college-name" required></li>
                    <li><input type="text" name="fathers-name" required></li>
                    <li><input type="text" name="mothers-name" required></li>
                    <li><input type="text" name="date-of-birth" required></li>
                    <li><input type="text" name="religion" required></li>
                    <li><input type="text" name="admission-date" required></li>
                   
                    
                </ul>
                <button style="background: #699BF7;
                                width: 6em;
                                padding: 12px;
                                border-radius: 12px;
                                margin-left: 5em;
                                margin-top: 2em;
                                text-align: center;
                                cursor: pointer;"
                                type="submit" class="saveProfile" name="signUpButton" id = "save">Save</button>
                <button style = "background: #699BF7;
                                width: 6em;
                                padding: 12px;
                                border-radius: 12px;
                                margin-left: 13em;
                                margin-top: -3.2em;
                                text-align: center;
                                cursor: pointer;"type="button" class="close-info-profile" id ="close-info" onclick="closeForm()">Close</button></div> 
                </form>
                
                <div class="userinfo-div" >
                    <?php
                        $uname = $_SESSION['username'];
                        $sql = "SELECT * FROM userprofile WHERE username ='$uname' ";
                        $result = mysqli_query($link, $sql);
                        $resultCheck = mysqli_num_rows($result);
                        if($resultCheck > 0){
                            while($row = mysqli_fetch_assoc($result)){
                        ?>
                    <ul class="user-info" id = "userProfileInfo">
                        <li><?php echo $row['Roll']?></li>
                        <li><?php echo $row['Semester']?></li>
                        <li><?php echo $row['Technology']?></li>
                        <li><?php echo $row['Gender']?></li>
                        <li><?php echo $row['CollegeName']?></li>
                        <li><?php echo $row['FatherName']?></li>
                        <li><?php echo $row['MotherName']?></li>
                        <li><?php echo $row['DateOfBirth']?></li>
                        <li><?php echo $row['Religion']?></li>
                        <li><?php echo $row['AdmissionDate']?></li>
                        <?php
                            }
                        }
                        ?>
                    <button id = "profileUpdate" class="update-info" onclick="openForm()">update</button>
                    </ul>
                </div>               
            </div>
            
            
            
        </div>
        <div class="box-right">
            <p>Academic Results:</p>
            <div class ="result">
                <ul class="result">
                    <li>Semester</li>
                    <p></p>
                    <ul class="semester-list">
                        <li>1st Semester:</li>
                        <li>2nd Semester:</li>
                        <li>3rd Semester:</li>
                        <li>4th Semester:</li>
                        <li>5th Semester:</li>
                        <li>6th Semester:</li>
                        <li>7th Semester:</li>
                        <li>8th Semester:</li>
                    </ul>
                    <form action= "academic.php" method="POST" >
                    <div class="cgpa" id = "cgpa">
                    <ul>
                        <li>CGPA</li>
                        <p></p>
                        <li><input type="text" name = "first" required></li>
                        <li><input type="text" name = "second" required></li>
                        <li><input type="text" name = "third" required></li>
                        <li><input type="text" name = "fourth" required></li>
                        <li><input type="text" name = "fifth" required></li>
                        <li><input type="text" name = "sixth" required></li>
                        <li><input type="text" name = "seventh" required></li>
                        <li><input type="text" name = "eighth" required></li>
                        <button style ="background: #699BF7;
                                        width: 6em;
                                        padding: 12px;
                                        border-radius: 12px;
                                        margin-top: 2em;
                                        text-align: center;
                                        cursor: pointer;" type="submit" name="signUpButton" class="save-academic">Save</button>
                        <button style = "background: #699BF7;
                                        width: 6em;
                                        padding: 12px;
                                        border-radius: 12px;
                                        margin-top: 2em;
                                        text-align: center;
                                        cursor: pointer;" type="button" class="close-info-academic" onclick="closeFormCgpa()">Close</button>
                    </ul>
                    
                    </div>
                    
                    </form>

                    <div class="scoreinfo">
                    <?php
                        $uname = $_SESSION['username'];
                        $sql = "SELECT * FROM academic WHERE username ='$uname' ";
                        $result = mysqli_query($link, $sql);
                        $resultCheck = mysqli_num_rows($result);
                        if($resultCheck > 0){
                            while($row = mysqli_fetch_assoc($result)){
                        ?>
                        <ul class="semesterScore" id = "semesterScore">
                        <li>CGPA</li>
                        <li><?php echo $row['FirstSemester']?></li>
                        <li><?php echo $row['SecondSemester']?></li>
                        <li><?php echo $row['ThirdSemester']?></li>
                        <li><?php echo $row['FourthSemester']?></li>
                        <li><?php echo $row['FifthSemester']?></li>
                        <li><?php echo $row['SixthSemester']?></li>
                        <li><?php echo $row['SeventhSemester']?></li>
                        <li><?php echo $row['EighthSemester']?></li>
                        <?php
                            }
                        }
                        
                        ?>
                        <button class="update-result" onclick="openFormCgpa()">update</button>
                    </ul>
                    </div> 
                </ul>
            </div>
        </div>

    </div>
    <div class="exam-schedule">
        <p>Exam Schedule:</p>
        <div class="innerExam">
            
        </div>
        
        
    </div>
    <script>
        //Profle
        function openForm(){

            document.getElementById("userProfileUpdate").style.display = "block";
            document.getElementById("userProfileInfo").style.display = "none";
            document.getElementById("save").style.display = "block";
            document.getElementById("close-info").style.display = "block";
            document.getElementById("update-info").style.display = "none";

        }
        function closeForm(){
            document.getElementById("userProfileUpdate").style.display = "none";
            document.getElementById("userProfileInfo").style.display = "block";
            document.getElementById("save").style.display = "none";
            document.getElementById("close-info").style.display = "none";
            document.getElementById("update-info").style.display = "block";
            
        }
        //CGPA
        function openFormCgpa(){
            document.getElementById("cgpa").style.display = "block";
            document.getElementById("semesterScore").style.display = "none";
        }
        function closeFormCgpa(){
            document.getElementById("cgpa").style.display = "none";
            document.getElementById("semesterScore").style.display = "block";
        }
        //Exam Schedule
        function openFormExam(){
            
            

        }
        function closeFormExam(){
            
            
            

        }

    </script>

</body>
</html>