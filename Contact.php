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
    <!-- Contact form starts here -->
    <div class="lesson-wrapper--outer bg-light-grey">
        <div class="lesson wrapper--inner padded bg-light-grey centerize">
            <div class="lesson-layout--row">
                <div class="lesson-sidebar bg-white padded">
                    <div class="lesson-sidebar--content">
                        <h2 class="margin-zero">Contact</h4>
                        <ul class="lesson-nav">
                            <li><a href="courses.php">Home</a></li>
                            <li><a href="lesson.php">Lesson</a></li>
                        </ul>
                    </div>
                </div>
                <div class="lesson-content bg-white padded"> 
                    <div class="lesson-content--body">
                        <h2 class="margin-zero text-center">Contact your lecture</h4>
                        <div class="lesson-text padded">
                            <p> <h5>*Submit this form to send any question or comment that you might be having to your lecture</h5>
                            <form action="" method="">
                                <div class="form-items">
                                    <label for="email">Your email</label> <br>
                                    <input type="email" name="email" value=""><br>
                                </div>
                                <div class="form-items">
                                    <label for="cohort">Your Cohort</label> <br>
                                    <input type="text" name="cohort" value=""><br>
                                </div>
                                <div class="form-items">
                                    <label for="message">Message</label> <br>
                                    <textarea name="message" value="" rows="10" cols="60"></textarea><br><br>
                                </div>
                                <div class="text-center padded-tb">
                                    <button value="submit" class="action-btn button" id="start-quiz">Submit message</button>
                                </div>
                            </form>
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