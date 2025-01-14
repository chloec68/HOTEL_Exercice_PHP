<?php

class Reservation{
// définition de la classe Reservation avec ses attributs et méthodes ; 
// une class est un plan de construction d'un objet 
    private Client $client;
    private Chambre $chambre;
    private DateTime $dateArrivee;
    private DateTime $dateDepart;
    // définition des attributs de la classe Reservation ;
    // ces attributs ne sont accessibles ou modifiables que depuis l'intérieur de la classe 

    public function __construct(Client $client,Chambre $chambre, string $dateArrivee, string $dateDepart){
    // définition du constructeur de la classe Reservation ; 
    // un constructeur est une fonction spéciale qui est automatiquement appelée lors de la création d'un nouvel objet/d'une nouvelle instance
        $this->client=$client;
        $this->chambre=$chambre;
        $this->dateArrivee=new DateTime($dateArrivee);
        $this->dateDepart=new DateTime($dateDepart);
        // définition des paramètres du constructeur ; 
        // lorsqu'un nouvel objet Reservation est créé, il faut lui fournir ces paramètres ; 
        
    }

    public function getClient(){
        return $this->client;
    }
    // définition de la méthode qui permet de récupérer la valeur de l'attribut client (en dehors de la classe) qui est privé; 

    public function setClient($client){
        $this->client=$client;
    }
    // définition de la méthode qui permet de modifier la valeur de l'attribut client qui est privé;

    public function getDateArrivee(){
        return $this->dateReservation;
    }

    public function setDateArrivee($dateArrivee){
        $this->dateReservation = $dateReservation;
    }

    public function getDateDepart(){
        return $this->dateDepart;
    }

    public function setDateDepart($dateDepart){
        $this->dateDepart = $dateDepart;
    }

}