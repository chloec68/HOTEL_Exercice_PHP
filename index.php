<?php

spl_autoload_register(function ($class_name) {
    require 'classes/'. $class_name . '.php';
});



//Création des hôtels
$hilton = new Hotel ("Hilton ****","10, route de la Gare","STRASBOURG","67000");
$regent = new Hotel ("Regent ****","61, rue Dauphine","Paris","75006");

//Création des clients
$virgileG = new Client("GIBELLO","Virgile");
$mickaM = new Client("MURMANN","Micka");

//Chambres
$chambre1 = new Chambre("1","1 lit",60,false,$hilton);
$chambre2 = new Chambre("2","1 lit",60,false,$hilton);
$chambre3 = new Chambre("3","2 lits",120,false,$hilton);
$chambre4 = new Chambre("4","2 lits",120,false,$hilton);

$chambre16= new Chambre("16","3 lits",300,true,$hilton);
$chambre17= new Chambre("17","3 lits",300,true,$hilton);
$chambre18= new Chambre("18","3 lits",300,true,$hilton);
$chambre19= new Chambre("19","3 lits",300,true,$hilton);

//Réservations 
$reservation1 = new Reservation($mickaM,$chambre3,"2021-01-01","2021-01-01");
$reservation2 = new Reservation($mickaM,$chambre4,"2021-03-11","2021-03-11");
$reservation3 = new Reservation($virgileG,$chambre19,"2021-04-01","2021-04-01");




echo $hilton->InfoHotel();

echo $hilton->afficherReservations();