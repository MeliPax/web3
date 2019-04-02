<?php 
    /*
        1. Get user email and password 
        2. Query user details from Database 
        3. Check whether the password is valid 
            3.1. If valid show courses
            3.2. else redirect to home
    */
    // $conn = new mysqli($servername, $username, $password,$db);
    include ("db_connection/db_connect.php");
    $email= $_POST['email'];
    $password= $_POST['password'];
    
    // User input fetch 
    // $sql =("SELECT * from users where $row['email']== $email and $row['password']== $password";
    $sql = mysqli_query( $conn,"SELECT * from users where email='$email' and password='$password'"); 
    // $result = mysqli_query($conn , $sql);
    if(!$sql){echo $conn->error; }
    if ($sql && $sql->num_rows == 0) { header("location: login.php"); }

    mysqli_close($conn);
        

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/css.css">
    <script src="js/js.js"></script>
    <title>Lesson Page</title>
</head>
<body>
<<<<<<< HEAD
    <div class="main-container">
=======
    <!-- courses section begins here -->
    <div class="courses-wrapper--outer">
    <div class="courses-wrapper--inner centerize">
        <div class="section-heading padded">
        <h2>Courses</h2>
        </div>
        <div class="courses-list row">
            <div class="course-box padded">
            <div class="course">
                <div class="course-body padded">
                <h1 class="course-title"> Literature</h1>
                </div>
            </div>
            </div>
            <div class="course-box padded">
            <div class="course">
                <div class="course-body padded">
                <h1 class="course-title"> Philosophy</h1>
                </div>
            </div>
            </div>
            <div class="course-box padded">
            <div class="course">
                <div class="course-body padded">
                <h1 class="course-title"> Computer Science</h1>
                </div>
            </div>
            </div>
        </div>
    </div>
    </div>
    <!-- end courses section -->
    
    <!-- <div class="main-container">
>>>>>>> 37b96ae49149be5514f20af2cbdbb97f89d948c6
        <div class="header">
            <div class="logo"><img class="logo" src="images\EasyLearn_logo.png" alt="Easy Learn" srcset="" > </div>
            <div class="main-nav"><h3>Navigation goes here</h3></div>
            <div class="user-info">
                <div class="profile-pic"></div>
                <div class="user-name"></div>
                <div class="drop-icon"></div>
            </div>
        </div>
        <div class="container">
            <div class="course-list">
                <div class="course-box"></div>
                <div class="course-box"></div>
                <div class="course-box"></div>
                <div class="course-box"></div>
            </div>
        </div>
        
    </div>
    <div class="footer">
        <h2> Footer goes here</h2>
    </div>
    <!-- <h1>Email: <?php echo $_POST['email'];?></h1>
    <h2>password <?php echo $_POST['password'];?></h2> -->
</body>
</html>