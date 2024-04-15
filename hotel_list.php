
<!-- PHP -->
<?php

   // array degli hotel
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
      ]
   ];

?>




<!-- HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- BOOTSTRAP -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
   integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

   <title>Hotel</title>
</head>
<body>

   <div class="container  mt-5">
      <h1 class="text-center  mb-4">Lista degli Hotel</h1>

      <div class="d-flex  justify-content-center  flex-wrap">

         <?php foreach($hotels as $hotel): ?>

         <div class="card  col-3  p-3  m-3">

            <p class="fw-semibold  fs-4  text-center"> <?php echo $hotel['name'] ?> </p>

            <p> <?php echo $hotel['description'] ?> </p>

            <!-- parcheggio -->
            <?php if($hotel['parking'] === true): ?>
            <p> Parcheggio Presente </p>
            
            <?php else: ?>
            <p> Parcheggio NON Presente </p>
            <?php endif ?>


            <p> <?php echo $hotel['vote'] ?> </p>

            <p> <?php echo $hotel['distance_to_center'] ?> </p>

         </div>

         <?php endforeach ?>

      </div>
   </div>
   
</body>
</html>