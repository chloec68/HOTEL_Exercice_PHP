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

echo $hilton->showInfoHotel();

echo $hilton->showReservations();

echo $regent->showReservations();

