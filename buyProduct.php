<?php
/**
 * Created by PhpStorm.
 * User: arxontispipertzis
 * Date: 1/8/19
 * Time: 7:27 PM
 */

$con = mysqli_connect("localhost","id8263187_eshop","pipertzis1997","id8263187_eshop");

$sql = "INSERT INTO Orders (Name,SurName,Address,Phone,Email,ProductID,ProductName,ProductPrice) VALUES ('".$_POST["name"]."','".$_POST["surName"]."', '".$_POST["address"]."','".$_POST["phone"]."','".$_POST["email"]."','".$_POST["productID"]."','".$_POST["productName"]."','".$_POST["productPrice"]."')";


if (mysqli_query($con, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

