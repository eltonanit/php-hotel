 <?php 
      // Questo è un array di array 
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


 
 ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
     <meta name="description" content="PHP Hotel Listing Example">
    <title>PHP HOTEL </title>
</head>
<body>
   
 
<div class="container">
    <div class="row gy-3">
        <div class="col-12">
            <h2 class="text-center"> ESERCIZIO HOTEL </h2>
        </div>
        <table class="table">
            <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">HOTEL</th>
      <th scope="col">Descrizione</th>
      <th scope="col">Parcheggio</th>
      <th scope="col">Voto</th>
      <th scope="col">Distanza dal centro</th>
    </tr>
  </thead>
 
  <tbody> 
 <?php foreach($hotels as $index => $hotel){ ?>
    <tr>
      <th scope="row"><?php echo $index + 1 ?></th>
      <td><h4><?php echo $hotel['name'] ?> </h4></td>
       <td><?php echo $hotel['description']; ?></td>
       <td><?php echo $hotel['parking'] ? "Parcheggio " : "Non ha il parcheggio"; ?></td>
       <td><?php echo $hotel['vote']; ?></td>
       <td><?php echo $hotel['distance_to_center']; ?></td>    
    </tr>     
    <?php } ?> 
  </tbody>
</table>
</div>
</div>

</body>
</html>
