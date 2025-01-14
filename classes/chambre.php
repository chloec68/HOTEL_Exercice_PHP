<?php

class Chambre {
    private string $numeroChambre;
    private string $nbLits;
    private float $prixNuit;
    private bool $wifi;
    private bool $reservee;
    // définition de l'attribut hotel de la classe chambre auquel on affecte un objet hotel de la classe Hotel
    private Hotel $hotel;
    private Reservation $reservation;
    

    public function __construct(string $numeroChambre,string $nbLits, float $prixNuit, bool $wifi,$hotel, bool $reservee=false){
        $this->numeroChambre = $numeroChambre;
        $this->nbLits = $nbLits;
        $this->prixNuit = $prixNuit;
        $this->wifi = $wifi;
        $this->reservee=$reservee;
        //assignation de l'objet hotel à la propriété hotel de la classe Chambre
        $this->hotel=$hotel;
        //ajout de l'objet chambre à l'objet hotel
        $this->hotel->addChambre($this);
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

    public function getReservee():bool{
        return $this->reservee;
    }

    public function setReservee($reservee){
        $this->reservee=$reservee;
    }

    public function getHotel():Hotel{
        return $this->hotel;
    }

    public function getReservation():Reservation{
        return $this->$reservation;
    }

    public function shoWBooking(){
        return $this->reservation->reservation();
    }
}

