<?php

class Chambre {
    private string $numeroChambre;
    private string $nbLits;
    private float $prixNuit;
    private bool $wifi;
    private bool $reservee;

    private Hotel $hotel;

    private array $reservations;
    

    public function __construct(string $numeroChambre,string $nbLits, float $prixNuit, bool $wifi,$hotel, bool $reservee=false){
        $this->numeroChambre = $numeroChambre;
        $this->nbLits = $nbLits;
        $this->prixNuit = $prixNuit;
        $this->wifi = $wifi;
        $this->reservee=$reservee;
       
        $this->hotel=$hotel;
        //j'appelle la méthode ajouterChambre() de la classe Hotel et je l'applique à l'objet instancié pour que chaque nouvel objet Chambre s'ajoute dès l'instanciation à 
        // un tableau indexé standard $chambres qui fait partie de la classe Hotel
        $this->hotel->ajouterChambre($this);
        
        // initialisation de l'attribut reservation de la classe Chambre : un tableau vide -> je créé une méthode addReservation() dans la classe Chambre et je l'appelle dans 
        // reservations pour que chaque nouvel objet reservation créé s'ajoute au tableau contenu dans l'objet Chambre dès l'instanciation
        $this->reservations=[];
    }

    public function getNumeroChambre():string{
        return $this->numeroChambre;
    }

    public function setNumeroChambre($numeroChambre){
        $this->numeroChambre=$numeroChambre;
    }

    public function getNbLits():string{
        return $this->nbLits;
    }

    public function setNbLits($nbLits){
        $this->nbLits=$nbLits;
    }

    public function getPrixNuit():float{
        return $this->prixNuit;
    }

    public function setPrixNuit($prixNuit){
        $this->prixNuit = $prixNuit;
    }

    public function getWifi():bool{
        return $this->wifi;
    }

    public function setWifi($wifi){
        $this->wifi=$wifi;
    }

    public function getReservee():bool{
        return $this->reservee;
    }

    public function setReservee($reservee){
        $this->reservee=$reservee;
    }

    public function getHotel():Hotel{
        return $this->hotel;
    }

    public function getReservations():array{
        return $this->reservations;
    }

    public function addReservation(Reservation $reservation){
            if($this->getReservee()==false){
                $this->reservations[]=$reservation;
                $this->setReservee(true);
            }else{
                echo "La chambre est déjà réservée";
            }
    }
// PROBLEME ICI :
    // public function afficherReservations(){
 
    //     foreach($this->reservations as $reservation){
    //         $reservation->afficherDetailsReservation();
    //         echo "Bonjour";
    //     }
    // }
}

