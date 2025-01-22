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

        public function nbReservations():int{
            $nbReservations = 0;
            foreach($this->reservations as $reservation){
                $nbReservations++; 
            }
            return $nbReservations;
        }


        // fonction d'affichage

        public function __toString(){
            return $this->prenomClient . " " . $this->nomClient. " : <br>";
        }

        public function afficherReservationsClient(){
            echo "Réservation de " . $this->__toString();
                echo "<div style= background-color:green;color:white;padding-left:5px;padding-right:5px;width:fit-content;border-radius:5px>" . $this->nbReservations() . " réservations </div>";
                foreach($this->getReservations() as $reservation){
                  echo $reservation->afficherDetailsReservationClient();
            }
            
            "<br>";
        }
}