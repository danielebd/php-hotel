<?php

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];

$filtered_hotels = $hotels;

//$temp_hotels = [];

// verificare se il parametro non è vuoto
// if (!empty($_GET['parking'])){
//     //Se il parametro è 1 filtra tutti gli hotel che hanno un parcheggio
//     if (($_GET['parking']) === '1') {
        
//         foreach($filtered_hotels as $hotel){
//             if($hotel['parking']){
//                 // aggiungi a temp_hotels gli hotel che corrispondono
//                 $temp_hotels[] = $hotel;
//             }
//         }
        
//     } // se parametro è 2 filtra quelli senza parcheggio 
//     elseif (($_GET['parking']) === '2') {
        
//         foreach($filtered_hotels as $hotel){
//             if($hotel['parking'] == false){
//                 // aggiungi a temp_hotels gli hotel che corrispondono
//                 $temp_hotels[] = $hotel;
//             }
//         }        
//     }
//     // aggiungi a filtered_hotels il contenuto di temp_hotels
//     $filtered_hotels = $temp_hotels;
// }

//svuotare temp_hotels se riutilizzarlo per la condizione successiova

if ((!empty($_GET['parking'])) && ($_GET['parking'] == 1)){
    $filtered_hotels = array_filter($filtered_hotels, fn($hotel) => $hotel['parking']);
} elseif ((!empty($_GET['parking'])) && ($_GET['parking'] == 2)){
    $filtered_hotels = array_filter($filtered_hotels, fn($hotel) => !$hotel['parking']);
};

$temp_hotels = [];

// if (!empty($_GET['vote'])){

//         foreach($filtered_hotels as $hotel){
//             if($hotel['vote'] == $_GET['vote']){
//                 // aggiungi a temp_hotels gli hotel che corrispondono
//                 $temp_hotels[] = $hotel;
//             }
//         }
    
//     // aggiungi a filtered_hotels il contenuto di temp_hotels
//     $filtered_hotels = $temp_hotels;
// }
if (!empty($_GET['vote'])){
    $filtered_hotels = array_filter($filtered_hotels, fn($hotel) => $hotel['vote'] == $_GET['vote']);
}


require "index.view.php";