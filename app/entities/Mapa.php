<?php
/**
 * Created by PhpStorm.
 * User: leodm
 * Date: 21/08/2018
 * Time: 21:34
 */

class Mapa
{
    private $conn;
    private $nomeTabela;

    private $cod_mapa_planta; //String
    private $reg_adm; //String
    private $org_set_origem; //String
    private $num_mapoteca; //String
    private $gaveta_mapoteca; //String
    private $prancha_mapoteca; //String
    private $titulo_mapa_planta; //String
    private $endereco_mapa_planta_antigo; //String
    private $bairro_mapa_planta_antigo; //String
    private $municipio_uf_antigo; //String
    private $cep_mapa_planta_antigo; //String
    private $endereco_mapa_planta_novo; //String
    private $bairro_mapa_planta_novo; //String
    private $municipio_uf_novo; //String
    private $cep_mapa_planta_novo; //String
    private $tipologia_mapa_planta; //String
    private $trecho_tipologia; //String
    private $municipio_tipologia; //String
    private $num_processo_tipologia; //String
    private $supervisor_origem_tipologia; //String
    private $org_emissor_origem_tipologia; //String
    private $dimensao_imovel_area_total_tipologia; //String
    private $confrontamento_tipologia; //String
    private $autor_tipologia; //String
    private $original_copia_tipologia; //String
    private $data_tipologia; //String
    private $escala; //String
    private $num_folha; //String
    private $descritores; //String
    private $planta; //String
    private $armario; //String
    private $tela; //String
    private $tubo; //String
    private $quant; //String
    private $observacao; //String
    private $data_cadastramento; //String
    private $cadastrador; //String
    private $sel; //String
    private $latitude; //Double
    private $longitude; //Double

    /**
     * Mapa constructor.
     * @param $cod_mapa_planta
     * @param $reg_adm
     * @param $org_set_origem
     * @param $num_mapoteca
     * @param $gaveta_mapoteca
     * @param $prancha_mapoteca
     * @param $titulo_mapa_planta
     * @param $endereco_mapa_planta_antigo
     * @param $bairro_mapa_planta_antigo
     * @param $municipio_uf_antigo
     * @param $cep_mapa_planta_antigo
     * @param $endereco_mapa_planta_novo
     * @param $bairro_mapa_planta_novo
     * @param $municipio_uf_novo
     * @param $cep_mapa_planta_novo
     * @param $tipologia_mapa_planta
     * @param $trecho_tipologia
     * @param $municipio_tipologia
     * @param $num_processo_tipologia
     * @param $supervisor_origem_tipologia
     * @param $org_emissor_origem_tipologia
     * @param $dimensao_imovel_area_total_tipologia
     * @param $confrontamento_tipologia
     * @param $autor_tipologia
     * @param $original_copia_tipologia
     * @param $data_tipologia
     * @param $escala
     * @param $num_folha
     * @param $descritores
     * @param $planta
     * @param $armario
     * @param $tela
     * @param $tubo
     * @param $quant
     * @param $observacao
     * @param $data_cadastramento
     * @param $cadastrador
     * @param $sel
     */

    public function __construct($db)
    {
        $this->conn = $db;
    }

    /**
     * @return mixed
     */
    public function getCodMapaPlanta()
    {
        return $this->cod_mapa_planta;
    }

    /**
     * @param mixed $cod_mapa_planta
     */
    public function setCodMapaPlanta($cod_mapa_planta)
    {
        $this->cod_mapa_planta = $cod_mapa_planta;
    }

    /**
     * @return mixed
     */
    public function getRegAdm()
    {
        return $this->reg_adm;
    }

    /**
     * @param mixed $reg_adm
     */
    public function setRegAdm($reg_adm)
    {
        $this->reg_adm = $reg_adm;
    }

    /**
     * @return mixed
     */
    public function getOrgSetOrigem()
    {
        return $this->org_set_origem;
    }

    /**
     * @param mixed $org_set_origem
     */
    public function setOrgSetOrigem($org_set_origem)
    {
        $this->org_set_origem = $org_set_origem;
    }

    /**
     * @return mixed
     */
    public function getNumMapoteca()
    {
        return $this->num_mapoteca;
    }

    /**
     * @param mixed $num_mapoteca
     */
    public function setNumMapoteca($num_mapoteca)
    {
        $this->num_mapoteca = $num_mapoteca;
    }

    /**
     * @return mixed
     */
    public function getGavetaMapoteca()
    {
        return $this->gaveta_mapoteca;
    }

    /**
     * @param mixed $gaveta_mapoteca
     */
    public function setGavetaMapoteca($gaveta_mapoteca)
    {
        $this->gaveta_mapoteca = $gaveta_mapoteca;
    }

    /**
     * @return mixed
     */
    public function getPranchaMapoteca()
    {
        return $this->prancha_mapoteca;
    }

    /**
     * @param mixed $prancha_mapoteca
     */
    public function setPranchaMapoteca($prancha_mapoteca)
    {
        $this->prancha_mapoteca = $prancha_mapoteca;
    }

    /**
     * @return mixed
     */
    public function getTituloMapaPlanta()
    {
        return $this->titulo_mapa_planta;
    }

    /**
     * @param mixed $titulo_mapa_planta
     */
    public function setTituloMapaPlanta($titulo_mapa_planta)
    {
        $this->titulo_mapa_planta = $titulo_mapa_planta;
    }

    /**
     * @return mixed
     */
    public function getEnderecoMapaPlantaAntigo()
    {
        return $this->endereco_mapa_planta_antigo;
    }

    /**
     * @param mixed $endereco_mapa_planta_antigo
     */
    public function setEnderecoMapaPlantaAntigo($endereco_mapa_planta_antigo)
    {
        $this->endereco_mapa_planta_antigo = $endereco_mapa_planta_antigo;
    }

    /**
     * @return mixed
     */
    public function getBairroMapaPlantaAntigo()
    {
        return $this->bairro_mapa_planta_antigo;
    }

    /**
     * @param mixed $bairro_mapa_planta_antigo
     */
    public function setBairroMapaPlantaAntigo($bairro_mapa_planta_antigo)
    {
        $this->bairro_mapa_planta_antigo = $bairro_mapa_planta_antigo;
    }

    /**
     * @return mixed
     */
    public function getMunicipioUfAntigo()
    {
        return $this->municipio_uf_antigo;
    }

    /**
     * @param mixed $municipio_uf_antigo
     */
    public function setMunicipioUfAntigo($municipio_uf_antigo)
    {
        $this->municipio_uf_antigo = $municipio_uf_antigo;
    }

    /**
     * @return mixed
     */
    public function getCepMapaPlantaAntigo()
    {
        return $this->cep_mapa_planta_antigo;
    }

    /**
     * @param mixed $cep_mapa_planta_antigo
     */
    public function setCepMapaPlantaAntigo($cep_mapa_planta_antigo)
    {
        $this->cep_mapa_planta_antigo = $cep_mapa_planta_antigo;
    }

    /**
     * @return mixed
     */
    public function getEnderecoMapaPlantaNovo()
    {
        return $this->endereco_mapa_planta_novo;
    }

    /**
     * @param mixed $endereco_mapa_planta_novo
     */
    public function setEnderecoMapaPlantaNovo($endereco_mapa_planta_novo)
    {
        $this->endereco_mapa_planta_novo = $endereco_mapa_planta_novo;
    }

    /**
     * @return mixed
     */
    public function getBairroMapaPlantaNovo()
    {
        return $this->bairro_mapa_planta_novo;
    }

    /**
     * @param mixed $bairro_mapa_planta_novo
     */
    public function setBairroMapaPlantaNovo($bairro_mapa_planta_novo)
    {
        $this->bairro_mapa_planta_novo = $bairro_mapa_planta_novo;
    }

    /**
     * @return mixed
     */
    public function getMunicipioUfNovo()
    {
        return $this->municipio_uf_novo;
    }

    /**
     * @param mixed $municipio_uf_novo
     */
    public function setMunicipioUfNovo($municipio_uf_novo)
    {
        $this->municipio_uf_novo = $municipio_uf_novo;
    }

    /**
     * @return mixed
     */
    public function getCepMapaPlantaNovo()
    {
        return $this->cep_mapa_planta_novo;
    }

    /**
     * @param mixed $cep_mapa_planta_novo
     */
    public function setCepMapaPlantaNovo($cep_mapa_planta_novo)
    {
        $this->cep_mapa_planta_novo = $cep_mapa_planta_novo;
    }

    /**
     * @return mixed
     */
    public function getTipologiaMapaPlanta()
    {
        return $this->tipologia_mapa_planta;
    }

    /**
     * @param mixed $tipologia_mapa_planta
     */
    public function setTipologiaMapaPlanta($tipologia_mapa_planta)
    {
        $this->tipologia_mapa_planta = $tipologia_mapa_planta;
    }

    /**
     * @return mixed
     */
    public function getTrechoTipologia()
    {
        return $this->trecho_tipologia;
    }

    /**
     * @param mixed $trecho_tipologia
     */
    public function setTrechoTipologia($trecho_tipologia)
    {
        $this->trecho_tipologia = $trecho_tipologia;
    }

    /**
     * @return mixed
     */
    public function getMunicipioTipologia()
    {
        return $this->municipio_tipologia;
    }

    /**
     * @param mixed $municipio_tipologia
     */
    public function setMunicipioTipologia($municipio_tipologia)
    {
        $this->municipio_tipologia = $municipio_tipologia;
    }

    /**
     * @return mixed
     */
    public function getNumProcessoTipologia()
    {
        return $this->num_processo_tipologia;
    }

    /**
     * @param mixed $num_processo_tipologia
     */
    public function setNumProcessoTipologia($num_processo_tipologia)
    {
        $this->num_processo_tipologia = $num_processo_tipologia;
    }

    /**
     * @return mixed
     */
    public function getSupervisorOrigemTipologia()
    {
        return $this->supervisor_origem_tipologia;
    }

    /**
     * @param mixed $supervisor_origem_tipologia
     */
    public function setSupervisorOrigemTipologia($supervisor_origem_tipologia)
    {
        $this->supervisor_origem_tipologia = $supervisor_origem_tipologia;
    }

    /**
     * @return mixed
     */
    public function getOrgEmissorOrigemTipologia()
    {
        return $this->org_emissor_origem_tipologia;
    }

    /**
     * @param mixed $org_emissor_origem_tipologia
     */
    public function setOrgEmissorOrigemTipologia($org_emissor_origem_tipologia)
    {
        $this->org_emissor_origem_tipologia = $org_emissor_origem_tipologia;
    }

    /**
     * @return mixed
     */
    public function getDimensaoImovelAreaTotalTipologia()
    {
        return $this->dimensao_imovel_area_total_tipologia;
    }

    /**
     * @param mixed $dimensao_imovel_area_total_tipologia
     */
    public function setDimensaoImovelAreaTotalTipologia($dimensao_imovel_area_total_tipologia)
    {
        $this->dimensao_imovel_area_total_tipologia = $dimensao_imovel_area_total_tipologia;
    }

    /**
     * @return mixed
     */
    public function getConfrontamentoTipologia()
    {
        return $this->confrontamento_tipologia;
    }

    /**
     * @param mixed $confrontamento_tipologia
     */
    public function setConfrontamentoTipologia($confrontamento_tipologia)
    {
        $this->confrontamento_tipologia = $confrontamento_tipologia;
    }

    /**
     * @return mixed
     */
    public function getAutorTipologia()
    {
        return $this->autor_tipologia;
    }

    /**
     * @param mixed $autor_tipologia
     */
    public function setAutorTipologia($autor_tipologia)
    {
        $this->autor_tipologia = $autor_tipologia;
    }

    /**
     * @return mixed
     */
    public function getOriginalCopiaTipologia()
    {
        return $this->original_copia_tipologia;
    }

    /**
     * @param mixed $original_copia_tipologia
     */
    public function setOriginalCopiaTipologia($original_copia_tipologia)
    {
        $this->original_copia_tipologia = $original_copia_tipologia;
    }

    /**
     * @return mixed
     */
    public function getDataTipologia()
    {
        return $this->data_tipologia;
    }

    /**
     * @param mixed $data_tipologia
     */
    public function setDataTipologia($data_tipologia)
    {
        $this->data_tipologia = $data_tipologia;
    }

    /**
     * @return mixed
     */
    public function getEscala()
    {
        return $this->escala;
    }

    /**
     * @param mixed $escala
     */
    public function setEscala($escala)
    {
        $this->escala = $escala;
    }

    /**
     * @return mixed
     */
    public function getNumFolha()
    {
        return $this->num_folha;
    }

    /**
     * @param mixed $num_folha
     */
    public function setNumFolha($num_folha)
    {
        $this->num_folha = $num_folha;
    }

    /**
     * @return mixed
     */
    public function getDescritores()
    {
        return $this->descritores;
    }

    /**
     * @param mixed $descritores
     */
    public function setDescritores($descritores)
    {
        $this->descritores = $descritores;
    }

    /**
     * @return mixed
     */
    public function getPlanta()
    {
        return $this->planta;
    }

    /**
     * @param mixed $planta
     */
    public function setPlanta($planta)
    {
        $this->planta = $planta;
    }

    /**
     * @return mixed
     */
    public function getArmario()
    {
        return $this->armario;
    }

    /**
     * @param mixed $armario
     */
    public function setArmario($armario)
    {
        $this->armario = $armario;
    }

    /**
     * @return mixed
     */
    public function getTela()
    {
        return $this->tela;
    }

    /**
     * @param mixed $tela
     */
    public function setTela($tela)
    {
        $this->tela = $tela;
    }

    /**
     * @return mixed
     */
    public function getTubo()
    {
        return $this->tubo;
    }

    /**
     * @param mixed $tubo
     */
    public function setTubo($tubo)
    {
        $this->tubo = $tubo;
    }

    /**
     * @return mixed
     */
    public function getQuant()
    {
        return $this->quant;
    }

    /**
     * @param mixed $quant
     */
    public function setQuant($quant)
    {
        $this->quant = $quant;
    }

    /**
     * @return mixed
     */
    public function getObservacao()
    {
        return $this->observacao;
    }

    /**
     * @param mixed $observacao
     */
    public function setObservacao($observacao)
    {
        $this->observacao = $observacao;
    }

    /**
     * @return mixed
     */
    public function getDataCadastramento()
    {
        return $this->data_cadastramento;
    }

    /**
     * @param mixed $data_cadastramento
     */
    public function setDataCadastramento($data_cadastramento)
    {
        $this->data_cadastramento = $data_cadastramento;
    }

    /**
     * @return mixed
     */
    public function getCadastrador()
    {
        return $this->cadastrador;
    }

    /**
     * @param mixed $cadastrador
     */
    public function setCadastrador($cadastrador)
    {
        $this->cadastrador = $cadastrador;
    }

    /**
     * @return mixed
     */
    public function getSel()
    {
        return $this->sel;
    }

    /**
     * @param mixed $sel
     */
    public function setSel($sel)
    {
        $this->sel = $sel;
    }

    /**
     * @return mixed
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @param mixed $latitude
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }

    /**
     * @return mixed
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @param mixed $longitude
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    }



}