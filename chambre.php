<?php

class Chambre {
    private string $numeroChambre;
    private string $nbLits;
    private float $prixNuit;
    private boolean $wifi;
    private boolean $booked;

    private Hotel $hotel;

    public function __construct(Hotel $hotel,string $numeroChambre,string $nbLits, float $prixNuit, boolean $wifi, boolean $booked){
        $this->numeroChambre = $numeroChambre;
        $this->nbLits = $nbLits;
        $this->prixNuit = $prixNuit;
        $this->wifi = $wifi;
        $this->booked = $booked;

        $this->hotel=addHotel($this);
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

    public function getWifi():boolean{
        return $this->wifi;
    }

    public function setWifi($wifi){
        $this->wifi=$wifi;
    }

    public function getBooked($booked):boolean{
        return $this->booked;
    }

    public function setBooked(){
        $this->booked=$booked;
    }
}

