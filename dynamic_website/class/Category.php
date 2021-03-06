<?php
/**
 * Class Category
 *  Author: Anish Bhalla
 *  Date: 15-06-2020
 *  version: 1
 */

class Category
{
    public $id;
    public $name;
    public $picture;

    /**
     * Category constructor.
     * @param $id
     * @param $name
     * @param $picture
     */
    public function __construct($id, $name, $picture)
    {
        $this->id = $id;
        $this->name = $name;
        $this->picture = $picture;
    }
}