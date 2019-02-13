<?php
class Auto{

    public $merk;
    public $kenteken;
    public $km;
    public $prijs;
    public $garantie;

}

$auto1 = new Auto();
$auto1->merk = 'BMW';
$auto1->kenteken = 'E5-E3S-7';
$auto1->km = 0;
$auto1->prijs = 24.999;
$auto1->garantie = '3 jaar';


class Klant{

    public $voornaam;
    public $achternaam;
    public $email;
    public $telefoonnummer;
    public $leeftijd;

}
$klant1 = new Klant();
$klant1->voornaam = 'Julian';
$klant1->achternaam = 'Vink';
$klant1->email = 'julian-_-vink@hotmail.com';
$klant1->telefoonnummer = '99999999';
$klant1->leeftijd = 19;

//var_dump($auto1, $klant1);
foreach ($auto1 as $auto) {
    echo $auto . "<br>";
}

foreach ($klant1 as $klant){
    echo $klant . "<br>";
}
