<?php

class Reservation{
    private Hotel $hotel;
    private Client $client;
    private DateTime $dateReservation;

    public function __construct(Hotel $hotel, Client $client, string $dateReservation){
        $this->hotel=$hotel;
        $this->client=$client;
        $this->dateReservation=$dateReservation;

        $this->hotel=addHotel($this);
        $this->client=addClient($this);
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
}