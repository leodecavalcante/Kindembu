<?php
/**
 * Created by PhpStorm.
 * User: leodm
 * Date: 26/08/2018
 * Time: 15:39
 */

interface MapaRepositoryInterface
{
    public function findMapaByLatitudeAndLongitude($lat, $lng);

    public function findMapaByEnderecoNovo($nome);

    public function findMapaByEnderecoAntigo($nome);

    public function findMapaByEndereco($nome);

    public function save(Mapa $mapa);
}