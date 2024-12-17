<?php

class Chambre {
    private string $numeroChambre;
    private string $nbLits;
    private float $prixNuit;
    private bool $wifi;

    private Hotel $hotel;

    private array $reservations;
    

    public function __construct(string $numeroChambre,string $nbLits, float $prixNuit, bool $wifi,$hotel){
        $this->numeroChambre = $numeroChambre;
        $this->nbLits = $nbLits;
        $this->prixNuit = $prixNuit;
        $this->wifi = $wifi;
        
        $this->hotel=$hotel;

        $this->hotel->addChambre($this);

        $this->reservations=[];

    }

    public function getNumeroChambre():string{
        return $this->numeroChambre;
    }

    public function setNumeroChambre($numeroChambre){
        $this->numeroChambre=$numeroChambre;
    }

    public function getNbLits():string{
        return $this->nbLits;
    }

    public function setNbLits($nbLits){
        $this->nbLits=$nbLits;
    }

    public function getPrixNuit():float{
        return $this->prixNuit;
    }

    public function setPrixNuit($prixNuit){
        $this->prixNuit = $prixNuit;
    }

    public function getWifi():bool{
        return $this->wifi;
    }

    public function setWifi($wifi){
        $this->wifi=$wifi;
    }

    public function getReservations(){
        return $this->reservations;
    }

    public function setReservations($reservations){
        $this->reservations=$reservations;
    }

    public function addReservation(Reservation $reservation){
        $this->reservations[]=$reservation;
    }

    // fonction chambreReservee 

    // fonction d'affichage 

    public function afficherClient(){

    }

}

