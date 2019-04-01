<?php 
    /*
        1. Get user email and password 
        2. Query user details from Database 
        3. Check whether the password is valid 
            3.1. If valid show courses
            3.2. else redirect to home
    */
    include ("db_connection/db_connect.php");
    $email= $_POST['email'];
    $password= $_POST['password'];
    
    // User input fetch 
    // $sql = "SELECT * FROM users where $email=='$row['email']' and $password=='$row[password]'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // output data of each row
        

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
    <!-- <div class="main-container">
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
    </div> -->
    <h1>Email: <?php echo $_POST['email'];?></h1>
    <h2>password <?php echo $_POST['password'];?></h2>
</body>
</html>