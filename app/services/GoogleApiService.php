<?php
/**
 * Created by PhpStorm.
 * User: leodm
 * Date: 21/08/2018
 * Time: 21:34
 */

class GoogleApiService
{
    private $geoCodingUrl = "https://maps.googleapis.com/maps/api/geocode/json?address=";
    private $urlAddOnAdress = "json?adress=";
    private $urlAddOnKey = "&key=";
    private $keu = "AIzaSyCAXlFSrxi2e8j8wfwFr5Jj-o0a2Kug5x8";

    public function getGeoCode($endereco_mapa_planta_novo){
        $url = geoCodingUrl+urlAddOnAdress+endereco_mapa_planta_novo.replace(" ","+")+urlAddOnKey+key;
        $request = new HttpRequest($url, HttpRequest::METH_GET);
        $request->addQueryData($endereco_mapa_planta_novo);
        try{
            $request->send();
            if ($request->getResponseCode() == 200){
                return $request->getResponseBody();
            }
        } catch(HttpException $ex){
            echo $ex;
        }
    }

}