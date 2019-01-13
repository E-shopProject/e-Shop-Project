<?php
/**
 * Created by PhpStorm.
 * User: arxontispipertzis
 * Date: 1/7/19
 * Time: 10:55 PM
 */

class ProductType
{
    var $ID;
    var $Name;
    var $productList = [];

    /**
     * ProductType constructor.
     * @param $ID
     * @param $Name
     */
    public function __construct($ID, $Name)
    {
        $this->ID = $ID;
        $this->Name = $Name;
    }

    /**
     * @return mixed
     */
    public function getID()
    {
        return $this->ID;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @return mixed
     */
    public function getProductList()
    {
        return $this->productList;
    }

    /**
     * @param mixed $productList
     */
    public function addToProductList($product)
    {
        array_push($this->productList,$product);
    }




}