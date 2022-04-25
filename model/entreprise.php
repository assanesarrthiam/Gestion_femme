<?php
class entreprise
{
    private $identreprise;
    private $nomEntreprise;
    private $Coordonnée_GPS;
    private $SiegeSocial;
    private $dateCreation;
    private $registreCommerce;
    private $NINEA;
    private $pageWeb;
    private $nombreEmployer;
    
    //Definissions les getter et setter des attribut de la class organisation
    public function setidentreprise($identreprise)
    {
        $this->identreprise = $identreprise;
    }
    public function getidentreprise()
    {
        return $this->identreprise;
    }
    public function setnomEntreprise($nomEntreprise)
    {
        $this->	nomEntreprise = $nomEntreprise;
    }
    public function getnomEntreprise()
    {
        return $this->getnomEntreprise;
    }
    public function setCoordonnéeGPS($Coordonnée_GPS){
        $this->CoordonnéeGPS=$Coordonnée_GPS;
    }
    public function CoordonnéeGPS()
    {
    return $this->CoordonnéeGPS;
    }
    public function SiegeSocial($SiegeSocial)
    {
        $this->	SiegeSocial = $SiegeSocial;
    }
    public function getSiegeSocial()
    {
        return $this->SiegeSocial;
    }   
    public function dateCreation($dateCreation)
    {
        $this->	dateCreation = $dateCreation;
    }
    public function getdateCreation()
    {
        return $this->dateCreation;
    }   
 
    public function registreCommerce($registreCommerce)
    {
        $this->	registreCommerce = $registreCommerce;
    }
    public function getregistreCommerce()
    {
        return $this->registreCommerce;
    }
    public function NINEA($NINEA)
    {
        $this->	NINEA = $NINEA;
    }
    public function getNINEA()
    {
        return $this->NINEA;
    } 
   
    public function pageWeb($pageWeb)
    {
        $this->	pageWeb = $pageWeb;
    }
    public function getpageWeb()
    {
        return $this->pageWeb;
    } 
    public function nombreEmployer($nombreEmployer)
    {
        $this->	nombreEmployer = $nombreEmployer;
    }
    public function getnombreEmployer()
    {
        return $this->nombreEmployer;
    }
    }