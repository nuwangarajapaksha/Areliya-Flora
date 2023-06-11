<?php

//include_once './errorController.php';
include './DB_Conn.php';

$id = '';


if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $productname = $_POST['productName'];
    $productDescription = $_POST['productDescription'];
    $productCategory = $_POST['productCategory'];
    $sellPrice = $_POST['sellPrice'];
    $buyPrice = $_POST['buyPrice'];
    $is_active = $_POST['is_active'];
//echo $id." ".$name." ".$birthday." ".$email;
    $sql = "UPDATE `products` SET `productName`='".$productname."' , `productDescription`='".$productDescription."', `productCategory`='".$productCategory."',`sellPrice`='".$sellPrice."', `buyPrice`='".$buyPrice."', `is_active`='".$is_active."' WHERE `id_product`='".$id."'";

    $isSaved = mysqli_query($connection, $sql);

    if ($isSaved) {
        echo "User Update Successfully !";
    } else {
        echo 'Error !';
    }
}


mysqli_close($connection);
