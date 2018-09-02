<?php
/**
 * Created by PhpStorm.
 * User: leodm
 * Date: 21/08/2018
 * Time: 21:34
 */

class MapaService
{

    public function populateLatLng() {
        $mapas = MapaRepository::findMapaByLatitudeAndLongitude(null,null);

        $quant = 0;
        foreach($mapas as $mapa){
            if ($mapa->getEnderecoMapaPlantaNovo() != null){
                $geoCodingResponse = GoogleApiService::getGeoCode($mapa->getEnderecoMapaPlantaNovo());

                if ($geoCodingResponse->getStatus() == "OK"){
                    $lat = $geoCodingResponse->getResults()->get(0)->getLocation()->getLat();
                    $mapas->setLatitude($lat);
                    $lng = $geoCodingResponse->getResults()->get(0)->getLocation()->getLng();
                    $mapas->setLongitude($lng);

                    $quant++;
                    MapaRepository::save($mapa);
                }
            }
        }
    }


}