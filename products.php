<?php
include "Product.php";
include "ProductRetriever.php";
/**
 * Created by PhpStorm.
 * User: arxontispipertzis
 * Date: 12/18/18
 * Time: 7:53 PM
 */

$proRetr = new ProductRetriever();
$proRetr->retrieveProducts();

$typeList = $proRetr->getProducts();

/*foreach ($typeList as $type){
    echo $type->getName(). "<br>";
    foreach ($type->getProductList() as $product){
        echo "ID: " . $product->getID() . " Name : " . $product->getName() . " Description: " . $product->getDescription() . " Quantity: " . $product->getQuantity() ." Price: " . $product->getPrice() ." Image: " . $product->getImage() . " ProductType: " . $product->getProductType() . "<br>";
    }
    echo "<br>";
}*/


?>

<?php /*foreach ($productList as $product){
    echo "ID: " . $product->getID() . " Name : " . $product->getName() . " Description: " . $product->getDescription() . " ProductType: " . $product->getProductType()."<br>";
}*/?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>E-shop</title>
    <link rel="stylesheet" href="style.css">

</head>
<body background="cart.jpg">
<section style="color: rgba(0, 0, 0, 0.5);">
    <nav class="shift">
        <ul>
            <li><a href="main.html">Home</a></li>
            <li><a href="products.php">Products</a></li>
            <li><a href="aboutUs.html">About Us</a></li>
        </ul>
    </nav>
</section>

<div id="main" style="height: auto">
    <p id="productHeader">
        OurProducts
    </p>

    <?php
    foreach ($typeList as $type) {
        echo '<p class="productTitle">' . $type->getName(). '</p>';
        foreach ($type->getProductList() as $product) {
            echo '<div class="product">';
            echo '<img class="productImage" src="' . $product->getImage() . '" >';
            echo '<div class="test">';
            echo '<p class="productTitle">' . $product->getName() . '</p><br>' ;
            echo 'Description: ' . $product->getDescription() . '<br />' ;
            echo 'Quantity: ' . $product->getQuantity() . '<br />' ;
            echo 'Price: ' . $product->getPrice() . '€' ;
            echo '<form action="order.php" method="post">
                  <input type="hidden" name="productID" value="' . $product->getID() . '" />
                  <input type="hidden" name="productName" value="' . $product->getName() . '" />
                  <input type="hidden" name="productDesc" value="' . $product->getDescription() . '" />
                  <input type="hidden" name="productPrice" value="' . $product->getPrice() . '" />
                  <input type="submit" name="someAction" value="Buy Product" /></form>';
            echo '</div>';

            echo '</div>';
        }

    }
    echo '<script src="main.js"></script>';
    ?>
</div>

<script src="main.js"></script>

</body>
</html>