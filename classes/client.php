<?php

class Client {
    private string $nomClient;
    private string $prenomClient;

    private array $reservations;



        public function __construct(string $nomClient,string $prenomClient){
            $this->nomClient=$nomClient;
            $this->prenomClient=$prenomClient;

            $this->reservations=[];

            
        }

        public function getNomClient():string{
            return $this->nomClient;
        }

        public function setNomClient($nomclient){
            $this->nomClient=$nomClient;
        }

        public function getPrenomClient():string{
            return $this->prenomClient;
        }

        public function setPrenomClient($prenomClient){
            $this->prenomClient=$prenomClient;
        }

        public function addReservation(Reservation $reservation){
            $this->reservations[]=$reservation;
        }

        public function getReservations():array{
            return $this->reservations;
         }


        // fonction d'affichage

        public function __toString(){
            return $this->prenomClient . " " . $this->nomClient. " : <br>";
        }

        public function afficherReservationsClient(){
            foreach($this->reservations as $reservation){
                echo $reservation->afficherDetailsReservation() ;
                
            }
        }
}