<?php

class Reservation{
    private Hotel $hotel;
    private Client $client;
    private Chambre $chambre;
    private DateTime $dateReservation;
    private DateTime $dateDepart;


    public function __construct(Hotel $hotel, Client $client,Chambre $chambre, string $dateReservation, string $dateDepart){
        $this->hotel=$hotel;
        $this->client=$client;
        $this->chambre=$chambre;
        $this->dateReservation=new DateTime($dateReservation);
        $this->dateDepart=new DateTime($dateDepart);
  
        $this->hotel=addReservation($this);
        $this->client=addReservation($this);
        $this->chambre=addReservation($this);
        
    }

    public function getHotel(){
        return $this->hotel;
    }

    public function setHotel($hotel){
        $this->hotel=$hotel;
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