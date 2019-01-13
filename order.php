<?php
/**
 * Created by PhpStorm.
 * User: arxontispipertzis
 * Date: 1/8/19
 * Time: 7:47 PM
 */
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>tes12222t</title>
    <link rel="stylesheet" href="style.css">

</head>
<body background="cart.jpg">
<section style="color: rgba(0, 0, 0, 0.5);">
    <nav class="shift">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="products.php">Products</a></li>
            <li><a href="#">About Us</a></li>
        </ul>
    </nav>
</section>

<div id="main" style="height: auto; text-align: left">
    <div>
        <p id="orderInfo">
        <?php
        echo 'Product Name: ' . $_POST["productName"] . '<br>';
        echo 'Product Description: ' . $_POST["productDesc"] . '<br>';
        echo 'Product Price: ' . $_POST["productPrice"] . '€ <br>';
        ?>
        </p>
    </div>
    <form action="buyProduct.php" method="post">
        Name:
        <input type="text" name="name"> <br><br>
        SurName:
        <input type="text" name="surName"> <br><br>
        Address:
        <input type="text" name="address"> <br><br>
        Phone Number:
        <input type="text" name="phone"> <br><br>
        E-mail:
        <input type="text" name="email"> <br>
        <?php
        echo '<form action="buyProduct.php" method="post">
                  <input type="hidden" name="productID" value="' . $_POST["productID"] . '" />
                  <input type="hidden" name="productName" value="' .$_POST["productName"] . '" />
                  <input type="hidden" name="productDesc" value="' . $_POST["productDesc"] . '" />
                  <input type="hidden" name="productPrice" value="' . $_POST["productPrice"] . '" />
                  <input type="submit" name="buyProduct" value="Finish Order" /></form>';
        ?>
    </form>
</div>
</body>
</html>