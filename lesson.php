<?php 

    // Databse connection
    // Fetching for data in the data base
    include ("db_connection/db_connect.php");
    $sql = mysqli_query( $conn,"SELECT * from content where unit"); 
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
                    </ul>
                </div>
            </div>
            <div class="lesson-content bg-white padded">
                <div class="lesson-content--body">
                    <h2 class="margin-zero text-center">Database: Introduction</h4>
                    <div class="lesson-text padded">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    </div>
                    <div class="text-center padded-tb">
                    <a href="quiz.php" class="action-btn button" id="start-quiz">Start Quiz</a>
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