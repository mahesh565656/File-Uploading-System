<?php include "php/config.php";

if(isset($_POST['submit'])){

    $filename = $_FILES["image"]["name"] ;

    $tempname = $_FILES["image"]["tmp_name"];

    $folder = "profile-image/".$filename;

    move_uploaded_file($tempname, $folder);

    $fullname=$_POST['fullname'];
    $email=$_POST['email'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $query="INSERT INTO users(fullname, email,username,password,image) VALUES ('$fullname', '$email','$username', '$password','$folder')";
    $sql=mysqli_query($conn,$query)or die("Could Not Perform the Query");
    header ("Location:login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="link/login.css">
</head>

<body>
    <div class="page">
        <div class="text">
            <div class="text-content">
                <div class="brand-name">
                    <h1 style="color: black;">Studybuddy</h1>
                </div>
                <div class="para" style="color:black;">Studybuddy helps you connect and share your study material with other students.</div>
            </div>
        </div>
        <div class="login">
            <div class="form-page">
                <form action="register.php" method="post" enctype="multipart/form-data">
                    <div class="form-name">
                        <h1 style="color:black;">Register</h1>
                    </div>
                    <div class="form-item"><input type="text" name="fullname" placeholder="Enter Your Full Name"></div>
                    <div class="form-item"><input type="text" name="username" placeholder="Enter Your Username"></div>
                    <div class="form-item"><input type="email" name="email" placeholder="Enter Your E-mail"></div>
                    <div class="form-item"><input type="password" name="password" placeholder="Enter Your Password"></div>
                  <!--  <div class="form-item"><input type="password" name="confirm_password" placeholder="Enter Confirm Password"></div>-->
                    <div class="form-item">
                        <p style="color:black;">Upload Image</p><input type="file" name="image" placeholder="Upload Profile Image">
                    </div>

                    <div class="form-item-login"><input type="submit" name="submit" placeholder="Submit"></div>
                    <div class="form-item-login"><button><a href="login.php" style="color:white;text-decoration:none;">Already registered,then login</a></button></div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>