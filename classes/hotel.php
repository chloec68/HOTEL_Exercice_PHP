<?php

class Hotel {
    //attributs 
    private string $nomHotel; 
    private string $adresseHotel;
    private int $nbChambres;

    private array $chambres;

    private array $reservations;

    // fonction constructeur 
    public function __construct(string $nomHotel, string $adresseHotel, int $nbChambres){
        $this->nomHotel = $nomHotel;
        $this->adresseHotel = $adresseHotel;
        $this->nbChambres = $nbChambres;

        $this->chambres=[];

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

    public function getNbChambres():int{
        return $this->nbChambres;
    }

    public function setNbChambres($nbChambres){
        $this->NbChambres=$nbChambres;
    }

    public function addChambre(Chambre $chambre){
        $this->chambres[]=$chambre;
    }

    public function getReservations():array{
        return $this->reservations;
    }

    public function setReservations($reservations){
        $this->reservations=$reservations;
    }

    public function addReservation(Reservation $reservation){
        $this->reservations[]=$reservation;
        //ou array_push($this->livres,$livre);
    }


    // fonctions permettant de compter le nombre de chambres disponibles 
    function combienChambresReservees(){
        $chambresReservees = $this->getNbChambres - count($this->reservations);  
        //nombre chambres réservées = count($this->reservations) 
    }
    

    // fonctions affichage

    public function showInfoHotel(){
        $result = "<p style=font-family:Arial>".$this->getNomHotel()."<br>".$this->getAdresseHotel()."<br>"."Nombre de chambres : ".$this->getNbChambres()."<br>"."Nombre de chambres réservées : "."<br>"."Nombre de chambres disponibles : "."</p>";
         return $result;
    }


    public function showReservations(){
        $result="<p style=font-family:Arial>"."Réservation de l'hôtel ".$this->getNomHotel()."</p>";

            if($this->getReservations()==[]){
                $result .= "<p style=font-family:Arial>"."Aucune réservation!"."</p>";
            }else{
            foreach($this->reservations as $reservation){
                $result.="test";
            }
        }
        return $result;
    }
}