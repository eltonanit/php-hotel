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
    <title>PHP HOTEL </title>
</head>
<body>
     <div class="container">
        <div class="row gy-3">
            <div class="col-12">
            <h2 class="text-center"> HOTEL <a href="./index.php" class="btn btn-sm btn-primary"> Vedi tutti </a></h2>
            </div>
            </div>
            <div class="row mt-3">
                <div class="col-12">
                    <form action="index.php" method="GET">
                        <div class="row">
                            <div class="col-4">
                                <input type="text" name="name" placeholder="Nome" class="form-control form-control-sm" 
                                value="<?php echo$_GET['name'] ?? ''; ?>" > <!-- echo sta per scrivi la ricerca e nel input box lascia la parola o filtro cercato -->
                                
                            </div>
                            <div class="col-4">
                                <input type="text" name="famiglia" placeholder="Famiglia" class="form-control form-control-sm"
                                 value="<?php echo$_GET['famiglia'] ?? ''; ?>">
                            </div>
                             <div class="col-3">
                                <select  name="commestibili" id="commestibili" class="form-control form-control-sm"> 
                                    <option value="">Selezione comestibilita</option>
                                    <option value="0  <?php echo$_GET['Non commestibili'] ?? ''; ?>">Non commestibili</option><!-- echo sta per scrivi la ricerca e nel input box lascia la parola o filtro cercato -->
                                    <option value="1   <?php echo$_GET['commestibili'] ?? ''; ?>"> Commestibili</option> <!-- echo sta per scrivi la ricerca e nel input box lascia la parola o filtro cercato -->
                                </select>
                            </div>
                            <div class="col-4">
                                <button class="btn btn-sm btn-primary">Cerca</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row g-4 mt-3">

            <!-- Sistema di -Filtraggio -->


            <?php foreach($filteredArry as $plant){ ?>
                <div class="col-12">
                    <div class="card <?php echo $plant['colore']; ?>">
                        <div class="card-title p-2">
                            <h2><?php echo $plant['name']; ?></h2>
                        </div>
                        <div class="card-body">
                            <p><?php echo $plant['famiglia']; ?></p>
                            <p><?php echo $plant['commestibili'] ? "Commestibile" : "NON MANGIARLA"; ?></p>
                            <p><?php echo $plant['colore']; ?></p>
                        </div>
                    </div>
                </div>

            <?php } ?>
            </div>
            </div>

        </div>
    </div>

</body>
</html>
