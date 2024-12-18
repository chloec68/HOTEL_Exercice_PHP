<?php

class Hotel {
    //attributs 
    private string $nomHotel; 
    private string $adresseHotel;
    private string $ville;
    private string $cp;

    private array $chambres;

    // fonction constructeur 
    public function __construct(string $nomHotel, string $adresseHotel, int $nbChambres, string $ville,string $cp){
        $this->nomHotel = $nomHotel;
        $this->adresseHotel = $adresseHotel;
        $this->ville=$ville;
        $this->cp=$cp;

        $this->chambres=[];
    }

    //getters & setters 
    public function getNomHotel():string{
        return $this->nomHotel;
    }

    public function setNomHotel($nomHotel){
        $this->nomHotel = $nomHotel;
    }

    public function getAdresseHotel():string{
        return $this->adresseHotel;
    }

    public function setAdresseHotel($adresseHotel){
        $this->adresseHotel=$adresseHotel;
    }

    public function getVille():string{
        return $this->ville;
    }

    public function setVille($ville){
        $this->ville=$ville;
    }

    public function getCp():string{
        return $this->cp;
    }

    public function setCp($cp){
        $this->cp=$cp;
    }


    public function addChambre(Chambre $chambre){
        $this->chambres[]=$chambre;
    }
    

    // fonctions affichage

    public function showInfoHotel(){
        $result = "<p style=font-family:Arial>".$this->getNomHotel()." ".$this->getCp()." ".$this->getVille()."<br>".$this->getAdresseHotel()."<br>"."Nombre de chambres : "."<br>"."Nombre de chambres réservées : "."<br>"."Nombre de chambres disponibles : "."</p>";
         return $result;
    }

    public function afficherChambresReservees(){

    }


    public function __toString(){
        return $this->nomHotel." ".$this->ville;
    }
}