<?php

class Client {
    private string $clientName;
    private string $clientSurname;

    private array $reservations;

        public function __construct(string $clientName,string $clientSurname){
            $this->clientName=$clientName;
            $this->clientSurname=$clientSurname;

            $this->reservations=[];
        }

        public function getClientName():string{
            return $this->clientName;
        }

        public function setClientName($clientName){
            $this->clientName=$clientName;
        }

        public function getClientSurname():string{
            return $this->clientSurname;
        }

        public function setClientSurname($clientSurname){
            $this->clientSurname=$clientSurname;
        }

        public function getReservations():array{
            return $this->reservations;
        }

        public function setReservations($reservations){
            $this->reservations=$reservations;
        }

        public function addReservation(Reservation $reservation){
            $this->reservations[]=$reservation;
        }

        // fonction d'affichage

        public function afficherReservations(){
            $result = "<p style=font-family:Arial>"."Réservations de ".$this->getClientSurname()." ".$this->getClientName()."<br>";

            foreach($this->reservations as $reservation){
                $result.= $this->getHotel()." /"."Chambre :".$this->getNumeroChambre()." (".$this->getNbLits()." - ".$this->getPrixNuit()." - "."Wifi : ".$this->getWifi().")".$this->getDateReservation()." au ".$this->getDateDepart();
            }

            return $result;
        }
}