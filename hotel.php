<?php

class Hotel {
    //attributs 
    private string $nomHotel; 
    private string $adresseHotel;
    private integer $nbChambres;

    // private array $chambres;

    private array $reservations;

    // fonction constructeur 
    public function __construct(string $nomHotel, string $adresseHotel, integer $nbChambres){
        $this->nomHotel = $nomHotel;
        $this->adresseHotel = $adresseHotel;
        $this->nbChambres = $nbChambres;

        // $this->chambres=[];

        $this->reservations=[];
    }

    //getters & setters 
    public function getNomHotel():string{
        return $this->nomHotel;
    }

    public function setNomHotel($nomHotel){
        $this->nomHotel = $nomHotel;
    }

    public function getAdresseHotel():string{
        return $this->adresseHotel;
    }

    public function setAdresseHotel($adresseHotel){
        $this->adresseHotel=$adresseHotel;
    }

    public function getNbChambres(){
        return $this->getNbChambres;
    }

    public function setNbChambres($nbChambres){
        $this->NbChambres=$nbChambres;
    }



    public function showInfoHotel(){
        $result = "<h2> $this->getNomHotel() <h2><br>
                    $this->getAdresseHotel<br>
                    $this->getNbChambres";

         return $result;
    }


    // public function getChambres():array{
    //     return $this->chambres;
    // }

    // public function setChambres($chambres){
    //     $this->chambres=$chambres;
    // }


    public function getReservations():array{
        return $this->reservations;
    }

    public function setReservations($reservations){
        $this->reservations=$reservations;
    }

    public function addReservation(Reservation $reservation){
        $this->reservations[]=$reservation;
    }

    public function showReservations(){

        foreach($this->reservations as $reservation){
            $result = "";
        }
    }
   
}