<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'classes/Skola.php';
require_once 'classes/Trida.php';
require_once 'classes/Deti.php';

$skola = new Skolka();
$skola->nazev = "Moje skolka";
$skola->adresa = "Karany";
$skola->pocetZaku = 23;







echo $skola->nazev;

?>