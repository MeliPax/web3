<?php 

    // Databse connection
    // Fetching for data in the data base
    // include ("db_connection/db_connect.php");
    // $sql = mysqli_query( $conn,"SELECT * from content"); 
    // if(!$sql){echo $conn->error; }
    // if ($sql && $sql->num_rows == 0) { header("location: login.php"); }
    // mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lesson</title>
    <link href="css/css.css" rel="stylesheet">
</head>
<body>
    
<div class="header">
    <div class="logo"> <img class="logo" src="images\EasyLearn_logo.png" alt="Easy Learn" srcset="" > </div>
    <div class="main-nav"><h3></h3></div>
    <div class="user-info">
        <div class="profile-pic"></div>
        <div class="user-name"></div>
        <div class="drop-icon"></div>
    </div>
</div>

<!-- lesson view  -->
<div class="lesson-wrapper--outer bg-light-grey">
    <div class="lesson wrapper--inner padded bg-light-grey centerize">
        <div class="lesson-layout--row">
            <div class="lesson-sidebar bg-white padded">
                <div class="lesson-sidebar--content">
                    <h2 class="margin-zero">Database</h4>
                    <ul class="lesson-nav">
                        <li><a href="lesson.php">Intro</a></li>
                        <li><a href="quiz_type1.php">Quiz 1</a></li>
                        <li><a href="quiz_type2.php">Quiz 2</a></li>
                        <li><a href="quiz_type3.php">Quiz 3</a></li>
                        <li><a href="quiz_type4.php">Quiz 4</a></li>
                    </ul>
                </div>
                <span class="contact-btn"><br><br><br><br><a href="contact.php" >Chat with your lecture</a></span>
            </div>
            <div class="lesson-content bg-white padded">
                <div class="lesson-content--body">
                    <h2 class="margin-zero text-center">Database: Introduction</h4>
                    <div class="lesson-text padded">
                    <p> <h3>Important Terminology</h3>
                        
                        <strong>Database:</strong> Database is a collection of inter-related data which helps in efficient retrieval, insertion and deletion of data from database and organizes the data in the form of tables, views, schemas, reports etc. For Example, university database organizes the data about students, faculty, and admin staff etc. which helps in efficient retrieval, insertion and deletion of data from it.
                        <br><br>
                        <strong>Database Management System:</strong>The software which is used to manage database is called Database Management System (DBMS). For Example, MySQL, Oracle etc. are popular commercial DBMS used in different applications. DBMS allows users the following tasks:
                            <br><br>
                        <strong>Data Definition:</strong> It helps in creation, modification and removal of definitions that define the organization of data in database.
                        <br><br>
                        <strong>Data Updation:</strong> It helps in insertion, modification and deletion of the actual data in the database.
                        <br><br>

                        <strong>Data Retrieval:</strong> It helps in retrieval of data from the database which can be used by applications for various purposes.
                        <br><br>
                        <strong>User Administration:</strong> It helps in registering and monitoring users, enforcing data security, monitoring performance, maintaining data integrity, dealing with concurrency control and recovering information corrupted by unexpected failure.</p>
                    </div>
                    <div class="text-center padded-tb">
                    <a href="quiz_type1.php" class="action-btn button" id="start-quiz">Start Quiz</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="footer">
    <h2> &copy; EasyLearn Company</h2>
</div>
</body>
</html>