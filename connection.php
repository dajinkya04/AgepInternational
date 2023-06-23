<?php
$con = mysqli_connect('localhost', 'root');

if ($con) {
    echo "Connection Successful";
} else {
    echo "No connection";
}

mysqli_select_db($con, 'agepinternational');

$user = $_POST['user'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$query = "insert into userinfodata (user, email, subject, message)
values ('$user','$email','$subject','$message')";

mysqli_query($con, $query);

header('location:index.php');
