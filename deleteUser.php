<?php

include './DB_Conn.php';

$uid = $_GET["id"];

$sql = "DELETE FROM users WHERE id_user = "
        . $uid . " ";

$isDelete = mysqli_query($connection, $sql);

if ($isDelete) {
    header("Location: userManager.php");
} else {
    header("Location: userManager.php");
}
?>