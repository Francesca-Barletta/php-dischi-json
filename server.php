<?php
$data_string = file_get_contents('dischi.json');
$discs = json_decode($data_string, true);
// $discs = [
//     [
//         'title'=> 'New Jersey',
//         'author'=> 'Bon Jovi',
//         'year'=> 1988,
//         'poster'=> 'https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg',
//         'genre'=> 'Rock'
//     ],
//     [
//         'title'=> 'Live at Wembley 86',
//         'author'=> 'Queen',
//         'year'=> 1992,
//         'poster'=> 'https://images-na.ssl-images-amazon.com/images/I/71g40mlbinL._SX355_.jpg',
//         'genre'=> 'Pop'
//     ],
// ];

header('Content-type: application/json');

echo json_encode($discs);

// $data = [
//     'results' => $discs,
//     'success' => true
//   ];

// echo json_econde($data);