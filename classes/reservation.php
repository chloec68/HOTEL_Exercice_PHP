<?php

class Reservation{
    private Client $client;
    private Chambre $chambre;
    private DateTime $dateReservation;
    private DateTime $dateDepart;


    public function __construct(Client $client,Chambre $chambre, string $dateReservation, string $dateDepart){
        $this->client=$client;
        $this->chambre=$chambre;
        $this->dateReservation=new DateTime($dateReservation);
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

    public function getDateReservation(){
        return $this->dateReservation;
    }

    public function setDateReservation($dateReservation){
        $this->dateReservation = $dateReservation;
    }

    public function getDateDepart(){
        return $this->dateDepart;
    }

    public function setDateDepart($dateDepart){
        $this->dateDepart = $dateDepart;
    }

}