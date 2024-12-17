<?php

spl_autoload_register(function ($class_name) {
    require 'classes/'. $class_name . '.php';
});

//Création des clients
$virgileG = new Client("GIBELLO","Virgile");
$mickaM = new Client("MURMANN","Micka");

//Création des hôtels
$hilton = new Hotel ("Hilton **** STRASBOURG","10, route de la Gare 67000 STRASBOURG",30);
$regent = new Hotel ("Regent **** Paris","61, rue Dauphine 75006 Paris",25);

//Réservations 
$reservation1 = new Reservation ($hilton,$mickaM,"2021-01-01","01-01-2021");
$reservation2 = new Reservation ($hilton,$mickaM,"2021-03-11","2021-03-11");
$reservation3 = new Reservation ($hilton,$virgileG,"2021-04-01","2021-04-01");

//Chambres
$chambre1 = new Chambre("1","1 lit",60,false,$hilton);
$chambre2 = new Chambre("2","1 lit",60,false,$hilton);
$chambre3 = new Chambre("3","2 lits",120,false,$hilton);
$chambre4 = new Chambre("4","2 lits",120,false,$hilton;

$chambre16= new Chambre("16","3 lits",300,true,$hilton);
$chambre17= new Chambre("17","3 lits",300,true,$hilton);
$chambre18= new Chambre("18","3 lits",300,true,$hilton);
$chambre19= new Chambre("19","3 lits",300,true,$hilton);



echo $hilton->showInfoHotel();

echo $hilton->showReservations();

echo $regent->showReservations();

echo $mickaM->afficherReservations();