<?php

include './DB_Conn.php';

$id_user = $_POST['id_user'];
$name = $_POST['name'];
$birthday = $_POST['birthday'];
$email = $_POST['email'];
$type = $_POST['type'];
$username = $_POST['username'];




$sql = "UPDATE users SET name='" . $name . "',birthday='" . $birthday . "',email='" . $email . "',type='" . $type . "',username='" . $username . "' "
        . "WHERE id_user = '".$id_user."' ";
$isSaved = mysqli_query($connection, $sql);

if ($isSaved) {
    header("Location: userManager.php");
} else {
    header("Location: userManager.php");
}

mysqli_close($connection);
?>