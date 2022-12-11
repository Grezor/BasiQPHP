<?php
$note = (int)readline('entrez la note : ');
// $note = 9;

if($note > 10){
    echo 'Bravo vous avez la moyenne';
} elseif ($note == 10) {
    echo 'vous avez juste la moyenne';
} else {
    echo 'Dommage vous n\'avez pas la moyenne';
}

// Autre synthax

$action = (int)readline('entrez votre action : (1: attaque, 2: defendre, 3: passer) ');

switch($action){
    case 1: 
        echo 'attaque';
        break;
    case 2: 
        echo 'defendre';
        break;
    case 3: 
        echo 'Passer';
        break; 
    default: 
        echo 'commande inconnue';
}

// heure d'ouverture 

$heure = (int)readline('entrez une heure : ');
if ((9 > $heure || $heure > 12) && (14 > $heure || $heure > 17)) {
    echo 'magasin ouvert';
} else {
    echo 'magasin fermé';
}
