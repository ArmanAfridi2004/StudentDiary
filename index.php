<?php
  include('connection.php');
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Student Diary || Home</title>
        <link rel= "stylesheet" href = "css/index.css"> 
    </head>
    
    <body>
        <div class = "navbar">
            <div class="container">
                <nav>
                  <ul class = "primary-nav">
                    <li class ="current"><a href="index.php">Home</a></li>
                    <li><a href="#">Why use this website?</a></li>
                    <div id ="login"><li ><button class="sign-in-button" onclick="openForm()">Sign In</button></li></div>   
                </ul>  
                </nav>
            </div>
        </div>
        <section class = "star">
            <div class="container">
                <div class="left-col">
                    <h1>Student Diary</h1>
                    <p>Do you want to keep track of<br> your work
                       as a student?
                       If so,<br> then you can start doing it right now.</p>
                       <p id= "message">By clicking on the link below.</p>
                    </p>
                    <div class = "create" id ="reg">
                        <button class="create-account" onclick="openFormReg()">Create an account </button>
                    </div>
                </div>
                <div class="right-col" id="myImg">
                    <img  src="images/illustration.svg" class = "star-img" alt="logo">
                </div>
            </div>
        </section>

        <div class="form-popup" id="myForm">
            <form action= "login.php" method="post" class="form-container">
              <h1>Login</h1>
              <p>See your progress</p>
              <div class="info">
                <label class ="name" for="username"><b>User Name<br></b></label>
                <input type="text" placeholder="  Enter User Name" name="username" required>
            
                <label class ="pass" for="psw"><b><br>Password<br></b></label>
                <input type="password" placeholder="  Enter Password" name="psw" required>
              </div>

             
          
              <button type="submit" class="btn" name="loginButton" style="color: white;">Login</button>
              <button type="button" class="btn cancel" style="color: white;" onclick="closeForm()">Close</button>
            </form>
          </div>

          <div class="reg-form-popup" id="myRegForm">
            <form action = "registration.php" method="post" class="reg-form-container">
              
              <p>You can create your very own personalized online <br>diary which will help you to keep track<br> of your own work in your college</p>
              <div class="reg-info">
              
                <label class ="first-name" for="first-name"><b>First Name<br></b></label>
                <input type="text" name="first-name" required>
              
                <label class ="last-name" for="last-name"><b><br>Last Name<br></b></label>
                <input type="text" name="last-name" required> 

                <label class ="user-name" for="user-name"><b><br>User Name<br></b></label>
                <input class= "usertext"type="text" name="user-name" required>

                <label class ="college-name" for="college-name"><b><br>College Name<br></b></label>
                <input class= "coltext" type="text" name="college-name" required>

                <label class ="password" for="pass"><b><br>Password<br></b></label>
                <input type="password" name="pass" required>

                <label class ="confirm-password" for="confirm"><b><br>Confirm Password<br></b></label>
                <input type="password" name="confirm" required>
              </div>

              <button type="submit" class="btn" name="signUpButton" style="color: white;">Sign up</button>
              <button type="button" class="btn cancel" style="color: white;" onclick="closeRegForm()">Close</button>
            </form>
          </div>

        <script>
            function openForm() {
              document.getElementById("myForm").style.display = "block";
              document.getElementById("myImg").style.display = "none";
              document.getElementById("reg").style.display = "none";
              document.getElementById("message").style.display = "none";
              
            }
            
            function closeForm() {
              document.getElementById("myForm").style.display = "none";
              document.getElementById("myImg").style.display = "block";
              document.getElementById("reg").style.display = "block";
              document.getElementById("message").style.display = "block";
            }

            function openFormReg(){
                document.getElementById("myRegForm").style.display = "block";
                document.getElementById("myImg").style.display = "none";
                document.getElementById("login").style.display = "none";
                document.getElementById("message").style.display = "none";
            }
            function closeRegForm() {
                document.getElementById("myRegForm").style.display = "none";
                document.getElementById("myImg").style.display = "block";
                document.getElementById("login").style.display = "block";
                document.getElementById("message").style.display = "block";
            }
            

            
            </script>
    </body>
</html>