<!------------------------------------------------------------------------------------------------>
<!--php connection string-->
<!------------------------------------------------------------------------------------------------>

<?php

// Connect to the database
$connect = @oci_connect('system', 'transport', 'localhost/transport') or die("Could not connect to Oracle server");

?>



<!------------------------------------------------------------------------------------------------>
    <!--php header-->
    <!------------------------------------------------------------------------------------------------>

    <?php

    session_start();
    include "database.php"

    ?>


    <!------------------------------------------------------------------------------------------------>
    <!--php code for counting number of rows-->
    <!------------------------------------------------------------------------------------------------>

<?php

$query = oci_parse($connect, "SELECT clientid FROM tblclients");
oci_execute($query);
$no_of_clients = 0;
while (($row = oci_fetch_array($query, OCI_NUM)) != false)
{
    $no_of_clients ++;
}

?>
    <!------------------------------------------------------------------------------------------------>
    <!--php code for login-->
    <!------------------------------------------------------------------------------------------------>

<?php

include ('database.php');

if(isset($_POST['login'])) {
    $username = $_POST['user'];
    $password = $_POST['pwd'];

    if ($username && $password) {
        $stid = oci_parse($connect,"SELECT * FROM tblLogin WHERE USER_NAME = '$username' AND USER_PWD = '$password'");
        oci_execute($stid);

        if(($row = oci_fetch_array($stid, OCI_NUM)) != false)
        {

            
            echo "<script>window.open('home.php','_self')</script>";
            $_SESSION['username'] = $username;
            
        }
        else
        {
            echo "<center>Please enter the correct credentials</center>";
        }

    } else

        die("<center>Please enter Username and Password!</center>");
}
?>
    <!------------------------------------------------------------------------------------------------>
    <!--php code for sign up-->
    <!------------------------------------------------------------------------------------------------>

<?php


if(isset($_POST['signup']))
{
    $user_name = $_POST['user_name'];
    $email = $_POST['email'];
    $user_pwd = $_POST['user_pwd'];
    $user_cpwd = $_POST['user_cpwd'];

    if($user_pwd == $user_cpwd)
    {
        $query = oci_parse($connect,"INSERT INTO tblLogin (user_name, email, user_pwd)VALUES('$user_name','$email','$user_pwd')");
        oci_execute($query);
        echo "<center>Registration successful!</center>";
    }
    else
    {
        echo "<center>Password mismatch!</center>";
    }
}
?>
