<?php
/**
 * Created by PhpStorm.
 * User: arxontispipertzis
 * Date: 1/7/19
 * Time: 11:00 PM
 */
include "ProductTypeInfoRetriever.php";
include "ProductType.php";
class ProductRetriever
{
    var $products =[];

    function retrieveProducts(){
        $con = mysqli_connect("localhost","id8263187_eshop","pipertzis1997","id8263187_eshop");


        $proTypeRetr = new ProductTypeInfoRetriever();
        $proTypeRetr->retrieveInfo();
        $proTypeList = $proTypeRetr->getTypeList();

        $sql = "SELECT * FROM Products";
        $result = $con->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                foreach ($proTypeList as $productType){
                    if ($row["ProductType"] == $productType->getName()){
                        $productType->addToProductList(new Product($row["ID"],$row["Name"],$row["Description"],$row["Quantity"],$row["Price"],$row["Image"],$row["ProductType"]));
                    }

                }
            }

            $this->products = $proTypeList;
        } else {
            echo "110 results";
        }
    }

    /**
     * @return array
     */
    public function getProducts()
    {
        return $this->products;
    }



}