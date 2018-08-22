<?php
/**
 * Created by PhpStorm.
 * User: leodm
 * Date: 21/08/2018
 * Time: 21:42
 */

class Geometry
{
    public function getBounds() {
        return $this->bounds;
    }
    public function setBounds($bounds) {
        $this->bounds = $bounds;
    }
    private $bounds; //Bounds

    public function getLocation() {
        return $this->location;
    }
    public function setLocation($location) {
        $this->location = $location;
    }
    private $location; //Location

    public function getLocation_type() {
        return $this->location_type;
    }
    public function setLocation_type($location_type) {
        $this->location_type = $location_type;
    }
    private $location_type; //String

    public function getViewport() {
        return $this->viewport;
    }
    public function setViewport($viewport) {
        $this->viewport = $viewport;
    }
    private $viewport; //Viewport

}