<?php
/**
 * Created by PhpStorm.
 * User: leodm
 * Date: 26/08/2018
 * Time: 15:37
 */

class MapaRepository implements MapaRepositoryInterface
{

    protected $db;

    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    public function findMapaByLatitudeAndLongitude($lat, $lng)
    {
        return $this->db->find($lat,$lng,'mapa','Mapa');
        //return Mapa::where('latitude','=',$lat,'and','longitude','=',$lng)->get();
    }

    public function findMapaByEnderecoNovo($nome)
    {
        return Mapa::where('endereco_novo','=',$nome)->get();
    }

    public function findMapaByEnderecoAntigo($nome)
    {
        return Mapa::where('endereco_antigo','=',$nome)->get();
    }

    public function findMapaByEndereco($nome)
    {
        return Mapa::where('endereco_novo','=',$nome,'OR','endereco_antigo','=',$nome)->get();
    }

    public function save(Mapa $mapa){
        $this->db->save($mapa,'Mapa');
        //Mapa::insert($mapa);
    }
}