<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/css.css">
    <script src="js/js.js"></script>
    <title>Home Page</title>
</head>
<body>
    <div class="login-page">
    <!-- logo -->
    <div class="logo">
        <img class="login-logo" src="images\EasyLearn_logo.png" alt="Easy Learn" srcset="" > 
    </div>
    <!-- logo end -->

    <!-- form start -->
        <div class="login-form">
            <h1>Sign In </h1>
            <form action="lesson.php" method="post">
                <div class="form-items">
                    <label for="email">Email</label> 
                    <input type="email" name="email"><br>
                </div>
                <div class="form-items">
                    <label for="password">Password</label> 
                    <input type="password" name="password"><br><br>
                </div>
                <button type="submit"> Login</button>
            </form>
        </div>
    <!-- form end -->
    </div>
    <!-- <div class="footer">
        <h2> Footer goes here</h2>
    </div> -->
</body>
</html>