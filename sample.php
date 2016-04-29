<?php
include 'database.php'
?>

<html>
<body>
<h1>Patient Records system</h1>

<form method = "GET">
    enter patientid :<br/>
    <input type="number" name="id"/></br>
    enter patientname:</br>
    <input type="text" name="name"/></br>

    <input type="submit" name ="ok"/>
    </form>
    </body>
</html>

<?php
if(isset($_GET['ok'])) {

    $id = $_GET['id'];
    $pname = $_GET['name'];

    mysqli_query($connect,"INSERT INTO patientinfo(patientid,patientname)VALUES('$id','$pname')");
}
?>