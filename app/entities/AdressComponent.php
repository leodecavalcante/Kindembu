<?php
/**
 * Created by PhpStorm.
 * User: leodm
 * Date: 21/08/2018
 * Time: 21:38
 */

class AdressComponent
{
    private $long_name; //String
    private $short_name; //String
    private $types; //array(String)

    public function getLong_name() {
        return $this->long_name;
    }
    public function setLong_name($long_name) {
        $this->long_name = $long_name;
    }
    public function getShort_name() {
        return $this->short_name;
    }
    public function setShort_name($short_name) {
        $this->short_name = $short_name;
    }
    public function getTypes() {
        return $this->types;
    }
    public function setTypes($types) {
        $this->types = $types;
    }
}