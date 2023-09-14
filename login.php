<?php include "php/config.php";

if(isset($_POST['submit']))
{
extract($_POST);
    
    $sql=mysqli_query($conn,"SELECT * FROM users where email='$email' and password='$password'");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {
        $_SESSION["id"] = $row['id'];
        $_SESSION["email"]=$row['email'];
        $_SESSION["fullname"]=$row['fullname'];
        $_SESSION["username"]=$row['username'];
        $_SESSION["image"]=$row['folder']; 
        echo  "<script>window.location.href='index.php'</script>";
    }
    else
    {
        echo "Invalid Email ID/Password";
    }
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
                <div class="para" style="color: black;">Studybuddy helps you connect and share your study material with other students.</div>
            </div>
        </div>
        <div class="login">
            <div class="form-page">
                <form action="login.php" method="post">
                    <div class="form-name">
                        <h1 style="color: black;">Log in</h1>
                    </div>
                    <div class="form-item"><input type="email" name="email" placeholder="Enter Your E-mail"></div>
                    <div class="form-item"><input type="password" name="password" placeholder="Enter Your Password"></div>
                    <div class="form-item-login"><input type="submit" name="submit" placeholder="Submit"></div>
                    <div class="form-item-login"><button><a href="register.php" style="color:white;text-decoration:none;">Create New Account</a></button></div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>