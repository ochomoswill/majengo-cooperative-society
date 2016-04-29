<!--Connecting to a database-->
<?php

session_start();
include "database.php"
?>

<!--The HTML User Interface-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Majengo Cooperative Society! | </title>

    <!-- Bootstrap core CSS -->

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/icheck/flat/green.css" rel="stylesheet">


    <script src="js/jquery.min.js"></script>

    <!--[if lt IE 9]>
    <script src="../assets/js/ie8-responsive-file-warning.js"></script>
    <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body style="background:#F7F7F7;" >

<div class="">
    <a class="hiddenanchor" id="toregister"></a>
    <a class="hiddenanchor" id="tologin"></a>

    <div id="wrapper">
        <div id="login" class="animate form">
            <section class="login_content">
                <form method = "POST">
                    <h1>Login Form</h1>
                    <div>
                        <input type="text" name = "user" class="form-control" placeholder="Username"  required="" />
                    </div>
                    <div>
                        <input type="password" name = "pwd" class="form-control" placeholder="Password" required="" />
                    </div>
                    <div>
                        <button type="submit" name= "login" class="btn btn-default submit">Log In</button>
                        <a class="reset_pass" href="#">Lost your password?</a>
                    </div>
                    <div class="clearfix"></div>
                    <div class="separator">

                        <p class="change_link">New to site?
                            <a href="#toregister" class="to_register"> Create Account </a>
                        </p>
                        <div class="clearfix"></div>
                        <br />
                        <div>
                            <h1><i class="fa fa-paw" style="font-size: 26px;"></i> Majengo Cooperative Society!</h1>

                            <p>©2015 All Rights Reserved. Privacy and Terms</p>
                        </div>
                    </div>
                </form>
                <!-- form -->
            </section>
            <!-- content -->
        </div>
        <div id="register" class="animate form">
            <section class="login_content">


                <form method="POST">
                    <h1>Create Account</h1>
                    <div>
                        <input type="text" class="form-control" placeholder="Username" name = "user_name" required="" />
                    </div>
                    <div>
                        <input type="email" class="form-control" placeholder="Email" name = "email" required="" />
                    </div>
                    <div>
                        <input type="password" class="form-control" placeholder="Password" name = "user_pwd" required="" />
                    </div>
                    <div>
                        <input type="password" class="form-control" placeholder="Confirm Password" name = "user_cpwd" required="" />
                    </div>
                    <div>
                        <button type="submit" name= "signup" class="btn btn-default submit">Sign Up</button>
                    </div>
                    <div class="clearfix"></div>
                    <div class="separator">

                        <p class="change_link">Already a member ?
                            <a href="#tologin" class="to_register"> Log in </a>
                        </p>
                        <div class="clearfix"></div>
                        <br />
                        <div>
                            <h1><i class="fa fa-paw" style="font-size: 26px;"></i> Majengo Cooperative Society!</h1>

                            <p>©2015 All Rights Reserved. Privacy and Terms</p>
                        </div>
                    </div>
                </form>
                <!-- form -->
            </section>
            <!-- content -->
        </div>
    </div>
</div>

</body>

</html>

<!--php code for log in-->
<?php

if(isset($_POST['login'])) {
    $username = $_POST['user'];
    $password = $_POST['pwd'];

    if ($username && $password) {
        $query = mysqli_query($connect,"SELECT * FROM (tblLogin) WHERE username = '$username'");

        $num_rows = mysqli_num_rows($query);

        if ($num_rows != 0) {
            while ($row = mysqli_fetch_assoc($query)) {
                $db_username = $row['username'];
                $db_password = $row['password'];
            }

            if ($username == $db_username && $password == $db_password) {

                echo "<script>window.open('home.php','_self')</script>";
                $_SESSION['username'] = $db_username;

            } else
                echo "<center>Incorrect password!</center>";
        } else {
            die("<center>That user doesn't exist!</center>");
        }
    } else
        die("<center>Please enter Username and Password!</center>");
}
?>

<!--php code for sign up-->
<?php


if(isset($_POST['signup']))
{
    $user_name = $_POST['user_name'];
    $email = $_POST['email'];
    $user_pwd = $_POST['user_pwd'];
    $user_cpwd = $_POST['user_cpwd'];

    if($user_pwd == $user_cpwd)
    {
        $query = mysqli_query($connect,"INSERT INTO tblLogin (username, email, password)VALUES('$user_name','$email','$user_pwd')");
        echo "<center>Registration successful!</center>";
    }
    else
    {
        echo "<center>Password mismatch!</center>";
    }
}
?>
