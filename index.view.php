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
    <h1>PHP HOTELS</h1>
    <table class="table table-dark table-striped">
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
            <h2>Ricerca</h2>
            <h4>Parcheggio:</h4>
            <form action="index.php" method="get">
                <select class="form-select form-select-lg mb-3" aria-label="Default select example" name="parking">
                    <option selected value="">Indifferente</option>
                    <option value="1" >Si</option>
                    <option value="2" >No</option>
                </select>
                <h4>voto:</h4>
                <select class="form-select form-select-lg mb-3" aria-label="Default select example" name="vote">
                    <option value="" selected>Indiffrente</option>
                    <?php foreach ($hotels as $hotel) { ?>
                        <option value="<?php echo($hotel['vote']) ?>"><?php echo($hotel['vote']) ?></option>
                    <?php } ?>
                </select>
                <button type="submite" class="btn btn-primary mb-3">Submit</button>
            </form>
            <?php foreach ($filtered_hotels as $index => $hotel) : ?>
                <tr>
                    <th scope="row"><?php echo $hotels[$index]['name'] ?></th>
                    <td><?php echo $hotel['description'] ?></td>
                    <td><?php echo ($hotel['parking'] === true) ? 'yes' : 'no' ?></td>
                    <td><?php echo $hotel['vote'] ?></td>
                    <td><?php echo $hotel['distance_to_center'] ?><?php echo 'km' ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>

