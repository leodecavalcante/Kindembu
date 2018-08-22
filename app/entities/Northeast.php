<?php
/**
 * Created by PhpStorm.
 * User: leodm
 * Date: 21/08/2018
 * Time: 21:39
 */

class Northeast
{
    public function getLat() {
        return $this->lat;
    }
    public function setLat($lat) {
        $this->lat = $lat;
    }
    private $lat; //double

    public function getLng() {
        return $this->lng;
    }
    public function setLng($lng) {
        $this->lng = $lng;
    }
    private $lng; //double

}
