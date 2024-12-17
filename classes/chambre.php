<?php

class Chambre {
    private string $numeroChambre;
    private string $nbLits;
    private float $prixNuit;
    private bool $wifi;

    // private Client $client;

    private Hotel $hotel;

    public function __construct(string $numeroChambre,string $nbLits, float $prixNuit, bool $wifi,$hotel){
        $this->numeroChambre = $numeroChambre;
        $this->nbLits = $nbLits;
        $this->prixNuit = $prixNuit;
        $this->wifi = $wifi;
        

        $this->hotel=$hotel;

        // $this->client->addChambre($this);
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

}

