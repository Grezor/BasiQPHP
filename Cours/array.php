<?php 
/**
 * Les tableaux
 * 
 */

// $notes = [10, 20, 9, 8];
// echo $notes[1]; // 20
// echo $notes[3]; // 8

$eleve = ['marc', 'doe', [10, 4, 2]];
// echo $eleve[2][1];

$arrayV2 = [
    'nom' => 'doe',
    'prenom' => 'Marc',
    'notes' => [10, 4, 2]
];
// $arrayV2['prenom'] = 'paul'; // pour changer la valeur
$arrayV2['notes'][3] = 20; // add new note
// echo $arrayV2['prenom'] . ' ' . $arrayV2['nom'];
// print_r($arrayV2['notes']);

$classe = [
    [
        'nom' => 'doe',
        'prenom' => 'Marc',
        'notes' => [10, 4, 2]
    ], 
    [
        'nom' => 'doe',
        'prenom' => 'Jeanne',
        'notes' => [2, 4, 2]
    ]
];

// echo $classe[1]['notes'][1];
