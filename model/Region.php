<?php
class Region
{
    private $idRegion;
    private $nomRegion;
    private $superficie;

    //Definissions les getter et setter des attribut de la class Region
    public function setIdRegion($idRegion)
    {
        $this->idRegion = $idRegion;
    }
    public function getIdRegion()
    {
        return $this->idRegion;
    }
    public function setNomRegion($nomRegion)
    {
        $this->nomRegion = $nomRegion;
    }
    public function getNomRegion()
    {
        return $this->nomRegion;
    }
    public function setSuperficie($superficie){
        $this->superficie=$superficie;
    }
    public function getSuperficie()
    {
    return $this->superficie;
    }
}
