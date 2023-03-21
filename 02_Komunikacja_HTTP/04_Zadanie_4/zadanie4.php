<?php
$pln = $_GET ['pln'];
$plnToUsd = 4.41; // aktualny kurs dolara 


function exchange($val) { 
    static $counter = 0; // zmienna statyczna, która będzie zliczać liczbę wymian
    $counter++; // zwiększamy licznik o 1 za każdym razem, gdy funkcja jest wywoływana
    $sum = round($val / $GLOBALS['plnToUsd'], 2); // obliczamy ilość dolarów na podstawie kursu
    echo "Wymiana nr $counter: Wymiana $val złotówek po kursie {$GLOBALS['plnToUsd']} da $sum dolarów<br>";
} 

echo exchange($pln);