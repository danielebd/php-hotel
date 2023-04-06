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

foreach ($hotels as $index => $hotel) {
    echo '<br>';
    echo '<br>';
    
    
    foreach ($hotel as $key => $detail) {
        echo '<br>';
        echo $key;
        echo ': ';
        echo($detail);
    };
};




var_dump($_GET);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col"><?php echo 'Name' ?></th>
      <th scope="col"><?php echo 'Description' ?></th>
      <th scope="col"><?php echo 'Parking' ?></th>
      <th scope="col"><?php echo 'Vote' ?></th>
      <th scope="col"><?php echo 'DIstance to Center' ?></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?php echo $hotels[0]['name'] ?></th>
      <td><?php echo $hotels[0]['description'] ?></td>
      <td><?php echo ($hotels[0]['parking']===true)?'yes':'no' ?></td>
      <td><?php echo $hotels[0]['vote'] ?></td>
      <td><?php echo $hotels[0]['distance_to_center'] ?><?php echo 'km' ?></td>
    </tr>
    <tr>
      <th scope="row"><?php echo $hotels[1]['name'] ?></th>
      <td><?php echo $hotels[1]['description'] ?></td>
      <td><?php echo ($hotels[1]['parking']===true)?'yes':'no' ?></td>
      <td><?php echo $hotels[1]['vote'] ?></td>
      <td><?php echo $hotels[1]['distance_to_center'] ?><?php echo 'km' ?></td>
    </tr>
    <tr>
      <th scope="row"><?php echo $hotels[2]['name'] ?></th>
      <td><?php echo $hotels[2]['description'] ?></td>
      <td><?php echo ($hotels[2]['parking']===true)?'yes':'no' ?></td>
      <td><?php echo $hotels[2]['vote'] ?></td>
      <td><?php echo $hotels[2]['distance_to_center'] ?><?php echo 'km' ?></td>
    </tr>
    <tr>
      <th scope="row"><?php echo $hotels[3]['name'] ?></th>
      <td><?php echo $hotels[3]['description'] ?></td>
      <td><?php echo ($hotels[3]['parking']===true)?'yes':'no' ?></td>
      <td><?php echo $hotels[3]['vote'] ?></td>
      <td><?php echo $hotels[3]['distance_to_center'] ?><?php echo 'km' ?></td>
    </tr>
    <tr>
      <th scope="row"><?php echo $hotels[4]['name'] ?></th>
      <td><?php echo $hotels[4]['description'] ?></td>
      <td><?php echo ($hotels[4]['parking']===true)?'yes':'no' ?></td>
      <td><?php echo $hotels[4]['vote'] ?></td>
      <td><?php echo $hotels[4]['distance_to_center'] ?><?php echo 'km' ?></td>
    </tr>

  </tbody>
</table>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>