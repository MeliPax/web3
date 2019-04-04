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
                        <li><a href="quiz_type1.php">Quiz 1</a></li>
                        <li><a class="text-underline" href="quiz_type2.php">Quiz 2</a></li>
                        <li><a href="quiz_type3.php">Quiz 3</a></li>
                        <li><a href="quiz_type4.php">Quiz 4</a></li>
                    </ul>
                </div>
            </div>
            <div class="quiz-content-wrapper padded">
                <div class="lesson-content--body">
                    <h2 class="margin-zero">Database: Quiz</h2>
                    
                    <!-- question one -->
                    <div class="quiz-content padded-tb">
                        <div class="question-group padded bg-white shadow">
                            <label>1. Lorem ipsum lorem isum lorem ipsum lorem ipsum</label><br/>
                            <input type="radio" name="q1" value="Lorem Ipsum" class="radio-res">Lorem Ipsum<br/>
                            <input type="radio" name="q1" value="Ipsum Lorem" class="radio-res">Ipsum Lorem<br/>
                            <input type="radio" name="q1" value="Yada yada" class="radio-res">Yada yada<br/>
                        </div>
                    </div>
                    <!-- question two -->
                    <div class="quiz-content padded-tb">
                        <div class="question-group padded bg-white shadow">
                            <label>2. Lorem ipsum lorem isum lorem ipsum lorem ipsum</label><br/>
                            <input type="radio" name="q2" value="Lorem Ipsum" class="radio-res">Lorem Ipsum<br/>
                            <input type="radio" name="q2" value="Ipsum Lorem" class="radio-res">Ipsum Lorem<br/>
                            <input type="radio" name="q2" value="Yada yada" class="radio-res">Yada yada<br/>
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