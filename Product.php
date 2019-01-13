<?php
/**
 * Created by PhpStorm.
 * User: arxontispipertzis
 * Date: 1/7/19
 * Time: 10:08 PM
 */

class Product {
    var $ID;
    var $Name;
    var $Description;
    var $Quantity;
    var $Price;
    var $Image;
    var $ProductType;

    /**
     * Product constructor.
     * @param $ID
     * @param $Name
     * @param $Description
     * @param $Quantity
     * @param $Price
     * @param $Image
     * @param $ProductType
     */
    public function __construct($ID, $Name, $Description, $Quantity, $Price, $Image, $ProductType)
    {
        $this->ID = $ID;
        $this->Name = $Name;
        $this->Description = $Description;
        $this->Quantity = $Quantity;
        $this->Price = $Price;
        $this->Image = $Image;
        $this->ProductType = $ProductType;

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
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @return mixed
     */
    public function getProductType()
    {
        return $this->ProductType;
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->Price;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->Image;
    }




}