<?php

spl_autoload_register(function ($class_name) {
    require 'classes/'. $class_name . '.php';
});





//Création des objets clients
$virgileG = new Client("GIBELLO","Virgile");
$mickaM = new Client("MURMANN","Micka");

//Création des objets hôtels
$hilton = new Hotel ("Hilton ****","10, route de la Gare","STRASBOURG","67000");
$regent = new Hotel ("Regent ****","61, rue Dauphine","Paris","75006");

//Création des objets Chambres
$chambre1 = new Chambre("1","1 lit",60,false,$hilton);
$chambre2 = new Chambre("2","1 lit",60,false,$hilton);
$chambre3 = new Chambre("3","2 lits",120,false,$hilton);
$chambre4 = new Chambre("4","2 lits",120,false,$hilton);

$chambre16= new Chambre("16","3 lits",300,false,$regent);
$chambre17= new Chambre("17","3 lits",300,false,$hilton);
$chambre18= new Chambre("18","3 lits",300,false,$regent);
$chambre19= new Chambre("19","3 lits",300,false,$regent);

//Création des objets Réservations 
$reservation1 = new Reservation($mickaM,$chambre3,"2021-01-01","2021-01-09");
$reservation2 = new Reservation($mickaM,$chambre4,"2021-03-11","2021-03-17");
// $reservation3 = new Reservation($virgileG,$chambre19,"2021-04-01","2021-04-01");
$reservation4 = new Reservation($virgileG,$chambre17,"2021-04-01","2021-04-09");

// Ajout des objets chambre au tableau $chambres de l'hôtel
// => L'ajout est automatique à chaque instanciation d'un nouvel objet Chambre ; 
// Dans le constructeur de l'objet Chambre, j'appelle la méthode ajouterChambre() défini dans la classe Hotel ; 
// Ainsi, chaque nouvel objet chambre est automatiquement ajouté au tableau de chambres de l'objet Hotel ; 

// Ajout des objets reservation au tableau $reservations de Client et Chambre -> ajout automatique à l'instanciation de l'objet Reservation en raison de la présence des méthodes
// addReservation() respectives des objets Client et Chambre dans le constructor de Reservation ;




// AFFICHAGE
echo $hilton->InfoHotel();
echo $regent->InfoHotel();
echo $hilton->voirReservations();
echo $regent->voirReservations();
echo $mickaM->afficherReservationsClient();

