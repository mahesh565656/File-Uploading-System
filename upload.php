<?php include "php/config.php";
//error_reporting(0);
?>
<?php
if (isset($_POST['submit'])) {


    if (empty($_POST['name']) or empty($_POST['subject']) or empty($_POST['semester'])/* or empty($_POST['notes'])*/) {
        echo "<script>alert('one or more inputs are empty');</script>";
    } else {


        $filename = $_FILES["notes"]["name"];
        $tempname = $_FILES["notes"]["tmp_name"];

        $folder1 = "file/" . $filename;

        move_uploaded_file($tempname, $folder1);


        $filename2 = $_FILES["image"]["name"];
        $tempname2 = $_FILES["image"]["tmp_name"];

        $folder2 = "thumbnail/" . $filename2;

        move_uploaded_file($tempname2, $folder2);


        $name = $_POST['name'];
        $subject = $_POST['subject'];
        $semester = $_POST['semester'];
    $username=$_POST['username'];
    $description=$_POST['description'];
    

    $sql=mysqli_query($conn,"INSERT INTO notesdata(name,subject,semester,username,description,image,notes)
    VALUES('$name','$subject','$semester','$username','$description','$folder2','$folder1')");
        

        echo "<script> window.location.href='index.php'; </script>";
        //  header("location:".APPURL."/login.php");

    }
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
<link rel="stylesheet" href="link/upload.css">
    <title>Document</title>
</head>
<body>
    

<section>
    <div class="content">
        <div class="login">
            <div class="form-page">
                <form action="upload.php" method="post" enctype="multipart/form-data">
                    <div class="form-name">
                        <h1>Upload Your Notes</h1>
                    </div>
                    <div class="form-item"><input type="text" name="name" placeholder="Full Name" value="<?php echo $_SESSION['fullname']; ?>"></div>
                    <div class="form-item"><input type="text" name="username" placeholder="Full Name" value="<?php echo $_SESSION['username']; ?>"></div>
                    <div class="form-item"><input type="varchar" name="subject" placeholder="Enter Subject"></div>
                    <div class="form-item"><input type="number" name="semester" placeholder="Enter Semester"></div>
                    <div class="form-item"><input type="text" name="description" placeholder="Enter Deescription"></div>
                    
                    <div class="form-item"><label>Upload Thumbnail Image</label><input type="file" name="image"></div>

                    <div class="form-item"><label>Upload File</label><input type="file" name="notes" placeholder="upload file"></div>
                    <div class="form-item-login"><input type="submit" name="submit" placeholder="Submit"></div>


                </form>
            </div>
        </div>
    </div>
</section>
<!--
        <section>
            <div class="ads">
                <h1 style="text-align: center;color: white;padding-top: 10px;">Advertisement</h1>
                <div class="advertise">

                </div>
                <div class="advertise">

                </div>
                <div class="advertise">

                </div>

            </div>
        </section>
-->
</div>
</body>

</html>