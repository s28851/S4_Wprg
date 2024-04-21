<?php
/* 1. Stwórz tablicę zawierającą nazwy kilku owoców (np. "jabłko", "banan", "pomarańcza"). Napisz pętlę, która wyświetli każdy owoc w osobnej linii, pisany od tyłu (nie używaj żadnej funkcji wbudowanej) oraz informację, czy dany owoc zaczyna się literą "p". */

$tablica[0] ="jablko"; 
$tablica[1] ="gruszka"; 
$tablica[2] ="ananas"; 
$tablica[3] ="banan"; 
$tablica[4] ="truskawka"; 
$tablica[5] ="porzeczka"; 
$tablica[6] ="mandarynka"; 
$tablica[7] ="pomarancza"; 
$tablica[8] ="ananas";
$tablica[9] ="papaya";

echo "Tablica w normalnej postaci: \n";
echo "---------------------------- \n";
for ($i =0; $i < count($tablica);$i++){
    echo $tablica[$i] . "\n";
}

echo "\nTablica w wyrazami od tyłu:";
echo "\n--------------------------:";
for ($i =0; $i < count($tablica);$i++) {
    echo strrev($tablica[$i]);

    if (strtolower($tablica[$i][0]) === 'p') {
        echo " - zaczyna się na literę P. \n";
    }
    else {echo " \n";};
}
?>