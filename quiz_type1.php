<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="css/css.css" rel="stylesheet">
</head>
<body>
    
<div class="header">
    <div class="logo"><a href="courses.php"> <img class="logo" src="images\EasyLearn_logo.png" alt="Easy Learn" srcset="" ></a></div>
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
                        <li><a class="text-underline" href="quiz_type1.php">Quiz 1</a></li>
                        <li><a href="quiz_type2.php">Quiz 2</a></li>
                        <li><a href="quiz_type3.php">Quiz 3</a></li>
                        <li><a href="quiz_type4.php">Quiz 4</a></li>
                    </ul>
                </div>
                <span class="contact-btn"><br><br><br><br><a href="contact.php" >Chat with your lecture</a></span>
            </div>
            <div class="quiz-content-wrapper padded">
                <div class="lesson-content--body">
                    <h2 class="margin-zero">Database: Quiz 1</h2>
                    
                    <!-- question one -->
                    <div class="quiz-content padded-tb">
                        <div class="question-group padded bg-white shadow">
                            <label>1. What best describes a database?</label><br/>
                            <input type="radio" name="q1" value="a car" class="radio-res">a car<br/>
                            <input type="radio" name="q1" value="a drink" class="radio-res">a drink<br/>
                            <input type="radio" name="q1" value="a file" class="radio-res">a file<br/>
                            <input type="radio" name="q1" value="a collection of inter-related data" class="radio-res">a collection of inter-related data<br/>
                        </div>
                    </div>
                    <!-- question two -->
                    <div class="quiz-content padded-tb">
                        <div class="question-group padded bg-white shadow">
                            <label>2. DBMS in full is...</label><br/> 
                            <input type="radio" name="q2" value="Data Base Mega System" class="radio-res">Data Base Mega System<br/>
                            <input type="radio" name="q2" value="Data Big Mega System" class="radio-res">Data Big Mega System<br/>
                            <input type="radio" name="q2" value="Data Base Management System" class="radio-res">Data Base Management System<br/>
                            <input type="radio" name="q2" value="Data Big Managment System" class="radio-res">Data Big Managment System<br/>
                        </div>
                    </div>
                    <div class="quiz-content padded-tb">
                        <div class="question-group padded bg-white shadow">
                            <label>3. Data Definition helps to ....</label><br/>
                            <input type="radio" name="q3" value="1" class="radio-res"> Create, modify definitions of data in the database<br/>
                            <input type="radio" name="q3" value="2" class="radio-res"> Create, remove definitions of data in the database<br/>
                            <input type="radio" name="q3" value="3" class="radio-res">Defines the organization of data in a database<br/>
                            <input type="radio" name="q3" value="4" class="radio-res">All of the above<br/>
                        </div>
                    </div>
                    <div class="quiz-content padded-tb">
                        <div class="question-group padded bg-white shadow">
                            <label>4. Data updation serves in ...</label><br/>  
                            <input type="radio" name="q4" value="1" class="radio-res"> insertion, deletion of data in a database<br/>
                            <input type="radio" name="q4" value="2" class="radio-res"> Insertion, modification, deletion of actual data in the database <br/>
                            <input type="radio" name="q4" value="3" class="radio-res"> Updating the name of the database<br/>
                            <input type="radio" name="q4" value="4" class="radio-res">Updating database storage<br/>
                        </div>
                    </div>
                    <div class="quiz-content padded-tb">
                        <div class="question-group padded bg-white shadow">
                            <label>5. Data retrievial helps us...</label><br/>
                            <input type="radio" name="q5" value="1" class="radio-res"> In retrieveing data to the databse to be used anywhere in the program<br/>
                            <input type="radio" name="q5" value="2" class="radio-res">In updating data from the client side for use<br/>
                            <input type="radio" name="q5" value="3" class="radio-res">To access data from the database to use anywhere by the software<br/>
                            <input type="radio" name="q5" value="4" class="radio-res">In reading data from the database<br/>
                        </div>
                    </div>

                    <div class="padded-tb text-center">
                    <a class="action-btn button" id="start-quiz">Submit Quiz </a>
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