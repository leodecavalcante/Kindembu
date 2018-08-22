<?php
/**
 * Created by PhpStorm.
 * User: leodm
 * Date: 21/08/2018
 * Time: 21:42
 */

class Result
{
    public function getAddress_components() {
        return $this->address_components;
    }
    public function setAddress_components($address_components) {
        $this->address_components = $address_components;
    }
    private $address_components; //array(AddressComponent)

    public function getFormatted_address() {
        return $this->formatted_address;
    }
    public function setFormatted_address($formatted_address) {
        $this->formatted_address = $formatted_address;
    }
    private $formatted_address; //String

    public function getGeometry() {
        return $this->geometry;
    }
    public function setGeometry($geometry) {
        $this->geometry = $geometry;
    }
    private $geometry; //Geometry

    public function getPartial_match() {
        return $this->partial_match;
    }
    public function setPartial_match($partial_match) {
        $this->partial_match = $partial_match;
    }
    private $partial_match; //boolean

    public function getPlace_id() {
        return $this->place_id;
    }
    public function setPlace_id($place_id) {
        $this->place_id = $place_id;
    }
    private $place_id; //String

    public function getTypes() {
        return $this->types;
    }
    public function setTypes($types) {
        $this->types = $types;
    }
    private $types; //array(String)

}