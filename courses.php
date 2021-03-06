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
    <title>Subjects list</title>
</head>
<body>
    <div class="main-container">
        <div class="header">
            <div class="logo"> <a href="courses.php"> <img class="logo" src="images\EasyLearn_logo.png" alt="Easy Learn" srcset="" ></a> </div>
            <div class="main-nav"><h3></h3></div>
            <div class="user-info">
                <div class="profile-pic"></div>
                <div class="user-name"></div>
                <div class="drop-icon"></div>
            </div>
        </div>
        <div class="courses-wrapper--outer">
    <div class="courses-wrapper--inner centerize">
        <div class="section-heading padded">
        <h2>Courses</h2>
        </div>
        <?php
            /* 
                1. Database request query for course page data
                    1.1. list all the courses available in the database
                    1.2. link each to the content page
            */ 
            include ("db_connection/db_connect.php");

            // query all courses available in the database
            $sql = mysqli_query( $conn,"SELECT * from courses");
            
            if(!$sql){ 
                die('Could not get data: ' . mysql_error());
            }
            while($row = mysqli_fetch_array($sql, MYSQL_ASSOC)) {
                $course=$row['course'];
                echo "
                    <div class='course-box padded'>
                        <a href='lesson.php' title=''>
                            <div class='course'>
                                <div class='course-body padded'>
                                <h1 class='course-title'> $course</h1>
                                </div>
                            </div>
                        </a>
                    </div>
                ";
            } 
        ?>
    </div>
    </div>
    </div>
    <div class="footer">
        <h2> &copy; EasyLearn Company</h2>
    </div>

</body>
</html>