<?php

// array di hotel
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

// deve prendere i valori che la persona passa 
$parking = $_GET["parking"];
var_dump($parking);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Bonus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<div class="container my-5">

    <form action="index.php" method="get">
        <label for="">Parcheggio</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="parking" id="parking" value="yes">
            <label class="form-check-label" for="parking">
            Sì
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="parking" id="noParking" value="no">
            <label class="form-check-label" for="noParking">
            No
            </label>
        </div>
        <button type="submit">Ricerca</button>
    </form>

    <!-- tabella con le informazioni -->
    <table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Nome</th>
            <th scope="col">Descrizione</th>
            <th scope="col">Presenza del parcheggio</th>
            <th scope="col">Voti</th>
            <th scope="col">Distanza dal centro</th>
        </tr>
    
    </thead>

    <tbody>
        <!-- per ogni elemento prendi i valori associati alle chiavi -->
        <?php foreach($hotels as $hotel): ?>
        <tr>
        <td><?php echo $hotel['name']?></td>
        <td><?php echo $hotel['description']?></td>

        <!-- se parcheggio è true allora stampa Sì -->
        <?php if($hotel['parking']):?>
            <td>Sì</td>
        
        <!-- se parcheggio è false allora stampa No -->
        <?php else: ?>
            <td>No</td>
        <?php endif; ?>
        
        <td><?php echo $hotel['vote']?></td>
        <td><?php echo $hotel['distance_to_center']?> km</td>
        </tr>
        <?php endforeach; ?>

    </tbody>
    </table>
</div>

    
</body>
</html>