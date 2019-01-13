<?php
/**
 * Created by PhpStorm.
 * User: arxontispipertzis
 * Date: 1/7/19
 * Time: 10:57 PM
 */

class ProductTypeInfoRetriever
{
    var $typeList =[];

    function retrieveInfo(){
        $con = mysqli_connect("localhost","id8263187_eshop","pipertzis1997","id8263187_eshop");


        $sql = "SELECT * FROM ProductType";
        $result = $con->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                array_push($this->typeList,new ProductType($row["ID"],$row["Name"]));
            }
        } else {
            echo "0 results";
        }




    }

    /**
     * @return mixed
     */
    public function getTypeList()
    {
        return $this->typeList;
    }


}