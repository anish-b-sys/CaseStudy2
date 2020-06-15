<?php
/**
 * Class Category
 *  Author: Anish Bhalla
 *  Date: 09-06-2020
 *  version: 1
 */
class Product
{
    public $id;
    public $name;
    public $price;
    public $image;
    public $categoryID;

    /**
     * Product constructor.
     * @param $id
     * @param $name
     * @param $price
     * @param $image
     * @param $categoryID
     */
    public function __construct($id, $name, $price, $image, $categoryID)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->image = $image;
        $this->categoryID = $categoryID;
    }


}