<?php

class Reservation{
    private Hotel $hotel;
    private Client $client;
    private $dateReservation;
    private $dateDepart;


    public function __construct(Hotel $hotel, Client $client, $dateReservation, $dateDepart){
        $this->hotel=$hotel;
        $this->client=$client;
        $this->dateReservation=$dateReservation;
  

        // $this->hotel=addHotel($this);
        // $this->client=addClient($this);
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

    // public function showReservations(){

    // if()
    //         foreach($this->reservations as $reservation){
    //         $result = "";
    //         }
    // }


}