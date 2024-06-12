<?php

require_once("conn.php");


if (empty($_POST['username_data']) || empty($_POST['password_data'])) {
echo $error = "Input username and password!";
}
else
{
$user = $_POST["username_data"];
$pass = $_POST["password_data"];


$sql = "SELECT username, password FROM $invent_admin WHERE username='$user' AND password='$pass'";
$result = $conn->query($sql);
$number = $result->num_rows;

if ($number > 0) {

    	echo $data = 1;

} else {
    echo "Wrong Username or Password!";
}
}
?>