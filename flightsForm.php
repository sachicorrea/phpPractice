<?php
    require_once('includes/functions.php');

    $origin = $_POST['origin'];
    $flight_to = $_POST['flight_to'];
    $flight_class = $_POST['flight_class'];
    $services = $_POST['services'];
    $name = $_POST['name'];
    $age = $_POST['age'];

    $flightValue = flightCost($origin, $flight_to);
    $increasingCost = increasing($flightValue, $flight_class);
    $discounts = discounts($flightValue, $age);
    $servicesValue = servicesCost($services);
    $totalFlight = $flightValue + $increasingCost - $discounts + $servicesValue;
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Flight Quotation</title>
  </head>

  <body>
    <div class="container">
        <h4>Mr. or Mrs. <span><?php echo $name; ?></span> the cost of your flight is described as it follows:</h4>
        <h5>Flight cost: <span><?php echo $flightValue; ?></span> </h5>
        <h5>Increasing: <span><?php echo $increasingCost; ?></span></h5>
        <h5>Services cost: <span><?php echo $servicesValue; ?></span></h5>
        <h5>Discounts: <span><?php echo $discounts; ?></span></h5>
        <h5>Total: <span><?php echo $totalFlight; ?></span></h5>

        <a href="flights.php">Return to principal</a>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>

