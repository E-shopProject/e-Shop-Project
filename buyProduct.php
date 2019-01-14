<?php
/**
 * Created by PhpStorm.
 * User: arxontispipertzis
 * Date: 1/8/19
 * Time: 7:27 PM
 */

$con = mysqli_connect("localhost","id8263187_eshop","pipertzis1997","id8263187_eshop");

$sql = "INSERT INTO Orders (Name,SurName,Address,Phone,Email,ProductID,ProductName,ProductPrice) VALUES ('".$_POST["name"]."','".$_POST["surName"]."', '".$_POST["address"]."','".$_POST["phone"]."','".$_POST["email"]."','".$_POST["productID"]."','".$_POST["productName"]."','".$_POST["productPrice"]."')";
$update = 'UPDATE Products set Quantity = Quantity - 1 where ID =' . $_POST["productID"];
$msg = "Customer name :" . $_POST["name"]
    . "\r\nCustomer surname :" . $_POST["surName"]
    . "\r\nCustomer address :" . $_POST["address"]
    . "\r\nProduct name :" . $_POST["productName"]
    . "\r\nTotal price :" . $_POST["productPrice"]
    . "\r\nThank you for your support!!! :)";

$msg = wordwrap($msg,100);
if (mysqli_query($con, $sql)) {
    mysqli_query($con,$update);
    echo "You have successfully bought the product!!!";
    echo '<a href="products.php">Go back to products';
    mail($_POST["email"],"E-Shop Order Info",$msg);
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

