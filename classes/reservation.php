<?php

class Reservation{
// définition de la classe Reservation avec ses attributs et méthodes ; 
// rappel: une class est un plan de construction d'un objet 
    private Client $client;
    private Chambre $chambre;
    private DateTime $dateArrivee;
    private DateTime $dateDepart;
    // définition des attributs de la classe Reservation ;
    // ces attributs ne sont accessibles ou modifiables que depuis l'intérieur de la classe 
    // la propriété $client de la classe Reservation contient un objet de la classe Client,etc

    public function __construct(Client $client,Chambre $chambre, string $dateArrivee, string $dateDepart){
    // définition du constructeur de la classe Reservation ; 
    // un constructeur est une fonction spéciale qui est automatiquement appelée lors de la création d'un nouvel objet/d'une nouvelle instance
        $this->client=$client;
        $this->chambre=$chambre;
        $this->dateArrivee=new DateTime($dateArrivee);
        $this->dateDepart=new DateTime($dateDepart);
      
        $this->client->addReservation($this);
        $this->chambre->addReservation($this);
        
    }

    public function getClient(){
        return $this->client;
    }
    // définition de la méthode qui permet de récupérer la valeur de l'attribut client (en dehors de la classe) qui est privé; 

    public function setClient($client){
        $this->client=$client;
    }
    // définition de la méthode qui permet de modifier la valeur de l'attribut client qui est privé;

    public function getChambre(){
        return $this->chambre;
    }

    public function setChambre($chambre){
        $this->chambre=$chambre;
    }

    public function getDateArrivee(){
        return $this->dateArrivee;
    }

    public function setDateArrivee($dateArrivee){
        $this->dateArrivee = $dateArrivee;
    }

    public function getDateDepart(){
        return $this->dateDepart;
    }

    public function setDateDepart($dateDepart){
        $this->dateDepart = $dateDepart;
    }

    public function getTotalNuits(){
        $dateArrivee = $this->getDateArrivee();
        $dateDepart = $this->getDateDepart();
        $totalNuits = $dateDepart->diff($dateArrivee);
        $result = $totalNuits->days;
        return $result;
    }

    public function getPrixTotal(){
        $nbJours=$this->getTotalNuits();
        $prixNuit=$this->chambre->getPrixNuit();
        $prixTotal = $nbJours * $prixNuit . " euros";
        return $prixTotal;
    }
 

    public function __toString(){
       
    }
    // définition de la méthode magique __toString() qui permet de retourner une chaîne de caractères lorsqu'on essaie d'afficher un OBJET de la classe Reservation = transforme l'objet en string ; 
    // exemple : echo $reservation1; 

    public function afficherDetailsReservation(){
        return $this->client->getPrenomClient() . " " . $this->client->getNomClient()." - Chambre n° ".$this->chambre->getNumeroChambre()." du ".$this->dateArrivee->format('d-m-Y')." au ".$this->dateDepart->format('d-m-Y') . "<br>";
    }

    public function afficherDetailsReservationClient(){
        return $this->chambre->getHotel() . " / Chambre : ".$this->chambre->getNumeroChambre(). " (". $this->chambre->getNbLits() . "-" . $this->chambre->getPrixNuit() . "euros" . " - Wifi:" .$this->chambre->getWifi() .")" . " du ".$this->dateArrivee->format('d-m-Y')." au ".$this->dateDepart->format('d-m-Y') . " (" . $this->getTotalNuits() . "jours) <br>" . "Total : " . $this->getPrixTotal() . "<br>";
    }

}