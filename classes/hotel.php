<?php

class Hotel {
    //attributs 
    private string $nomHotel; 
    private string $adresseHotel;
    private int $nbChambres;

    private array $chambres;

    // fonction constructeur 
    public function __construct(string $nomHotel, string $adresseHotel, int $nbChambres){
        $this->nomHotel = $nomHotel;
        $this->adresseHotel = $adresseHotel;
        $this->nbChambres = $nbChambres;

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

    public function getNbChambres():int{
        return $this->nbChambres;
    }

    public function setNbChambres($nbChambres){
        $this->NbChambres=$nbChambres;
    }

    public function addChambre(Chambre $chambre){
        $this->chambres[]=$chambre;
    }
    

    // fonctions affichage

    public function showInfoHotel(){
        $result = "<p style=font-family:Arial>".$this->getNomHotel()."<br>".$this->getAdresseHotel()."<br>"."Nombre de chambres : ".$this->getNbChambres()."<br>"."Nombre de chambres réservées : "."<br>"."Nombre de chambres disponibles : "."</p>";
         return $result;
    }

    public function afficherChambresReservees(){

    }
}