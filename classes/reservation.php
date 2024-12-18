<?php

class Reservation{
    private Client $client;
    private Chambre $chambre;
    private DateTime $dateArrivee;
    private DateTime $dateDepart;

    public function __construct(Client $client,Chambre $chambre, string $dateArrivee, string $dateDepart){
        $this->client=$client;
        $this->chambre=$chambre;
        $this->dateArrivee=new DateTime($dateArrivee);
        $this->dateDepart=new DateTime($dateDepart);
  
        $this->client=addReservation($this);
        $this->chambre=addReservation($this);
        
    }

    public function getClient(){
        return $this->client;
    }

    public function setClient($client){
        $this->client=$client;
    }

    public function getDateArrivee(){
        return $this->dateReservation;
    }

    public function setDateArrivee($dateArrivee){
        $this->dateReservation = $dateReservation;
    }

    public function getDateDepart(){
        return $this->dateDepart;
    }

    public function setDateDepart($dateDepart){
        $this->dateDepart = $dateDepart;
    }

}