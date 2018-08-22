<?php
/**
 * Created by PhpStorm.
 * User: leodm
 * Date: 21/08/2018
 * Time: 21:41
 */

class Viewport
{
    public function getNortheast() {
        return $this->northeast;
    }
    public function setNortheast($northeast) {
        $this->northeast = $northeast;
    }
    private $northeast; //

    public function getSouthwest() {
        return $this->southwest;
    }
    public function setSouthwest($southwest) {
        $this->southwest = $southwest;
    }
    private $southwest; //

}