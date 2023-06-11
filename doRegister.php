<?php

include './DB_Conn.php';

$name = $_POST['inName'];
$birthday = $_POST['inBirthday'];
$email = $_POST['inEmail'];
$type = $_POST['inType'];
$username = $_POST['inUsername'];
$password = $_POST['inPassword'];


$sql = "INSERT INTO users (name,birthday,email,type,username,password) "
        . "VALUES('" . $name . "','" . $birthday . "','" . $email . "','" . $type . "','" . $username . "','" . $password . "')";


$isSaved = mysqli_query($connection, $sql);

if ($isSaved) {
    header("Location: userManager.php");
} else {
   header("Location: userManager.php");
}

mysqli_close($connection);

?>