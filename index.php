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
$reservation1 = new Reservation($mickaM,$chambre3,"2021-01-01","2021-01-01");
$reservation2 = new Reservation($mickaM,$chambre4,"2021-03-11","2021-03-11");
$reservation3 = new Reservation($virgileG,$chambre19,"2021-04-01","2021-04-01");
$reservation4 = new Reservation($virgileG,$chambre17,"2021-04-01","2021-04-01");

$reservation5 = new Reservation($virgileG,$chambre17,"2021-04-01","2021-04-01");

//Attribution de la valeur "true" au booleen $reservee des objets Chambres 
// $chambre3->setReservee(true);
// $chambre4->setReservee(true);
// $chambre19->setReservee(true);
// $chambre17->setReservee(true);

//
// $reservation1->reserverChambre($chambre3);
// $reservation2->reserverChambre($chambre4);
// $reservation3->reserverChambre($chambre19);
// $reservation4->reserverChambre($chambre17);

// $reservation5->reserverChambre($chambre3);


// Ajout des objets chambres au tableau $chambres de l'hôtel
$hilton->ajouterChambre($chambre1);
$hilton->ajouterChambre($chambre2);
$hilton->ajouterChambre($chambre3);
$hilton->ajouterChambre($chambre3);
$hilton->ajouterChambre($chambre17);

$regent->ajouterChambre($chambre16);
$regent->ajouterChambre($chambre18);
$regent->ajouterChambre($chambre19);

// Ajout des objets réservations au tableau $reservations des clients 
$mickaM->addReservation($reservation1);
$mickaM->addReservation($reservation2);
$virgileG->addReservation($reservation3);
$virgileG->addReservation($reservation4);

// Ajout des objets réservations au tableau $reservations des chambres 
$chambre3->addReservation($reservation1);
$chambre4->addReservation($reservation2);
$chambre19->addReservation($reservation3);
$chambre17->addReservation($reservation4);





// $chambre17->addReservation($reservation5);
// echo $reservation5;

// var_dump($hilton->getChambres());
// var_dump($hilton->getNbChambresReservees());



// AFFICHAGE
echo $hilton->InfoHotel();


// echo $hilton->voirReservations();

// echo $chambre3->afficherReservations();

echo $reservation1->afficherDetailsReservation();