<?php 
   // 8th ACTIVITY
   // Form Validation
   require_once('includes/functions.php');  

   $origin = $flight_to = $flight_class = $services = $name = $age = '';
   
   $city_options = array (
      'manizales',
      'neiva',
      'pereira',
      'pasto'
   ); 
?>

<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
   
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

   <title>Flights</title>
</head>

<body>
   <div class="container">
      <div class="contentActivity">
         <h2>8th Activity</h2>

         <p>La empresa de transporte aéreo “Aerolíneas Manizales” ha establecido la siguiente tabla de tarifas para los destinos.</p>
         <ul>
               <li>Manizales – Neiva y viceversa $ 347.000</li>
               <li>Manizales – Pereira y viceversa $ 360.000</li>
               <li>Manizales – Pasto y viceversa $ 382.000</li>
               <li>Neiva – Pereira y viceversa $ 375.000</li>
               <li>Neiva – Pasto y viceversa $ 392.000</li>
               <li>Pereira – Pasto y viceversa $ 408.000</li>
         </ul>
         <p class="fw-bold">Nota. Estas tarifas aplican para clase turista.</p>
         <p class="fw-bold">En primera clase, se le debe incrementar el 20% a la tarifa.</p>
         <p class="fw-bold">En clase ejecutiva, se le debe incrementar el 50% a la tarifa.</p>
         <p>Si la edad del pasajero es mayor a 30 años tendrá un 10% de descuento.</p>
         <p>En caso contrario tendrá un 15% de descuento.</p>
         <p>Adicional a esto, la aerolínea ofrece los siguientes servicios a módicos precios.</p>
         <ul>
               <li>Alimentación. $25000</li>
               <li>Internet. $ 5000</li>
               <li>Maletero. $ 4000</li>
         </ul>
         <p>Se debe crear la siguiente interfaz, y en las listas de las ciudades se mostraran las siguientes tanto en origen como destino.</p>
      </div>

      <form method="post" action="flightsForm.php" class="needs-validation" novalidate>
         <div class="mb-3">
            <label>Your origin</label>
            <select name="origin">
               <?php
               foreach($city_options as $unit) {
                  $opt = optionize($unit);

                  echo "<option value=\"{$opt}\"";
                  if ($origin == $opt) {
                     echo " selected";
                  }
                  echo ">{$unit}</option>";
               }
               ?>
            </select>
         </div>
         
         <div class="mb-3">
            <label>Your Destination</label>
            <select name="flight_to">
               <?php
               foreach($city_options as $unit) {
                  $opt = optionize($unit);

                  echo "<option value=\"{$opt}\"";
                  if ($flight_to == $opt) {
                     echo " selected";
                  }
                  echo ">{$unit}</option>";
               }
               ?>
            </select>
         </div>

         <div class="mb-3" id="flightClass"> 
            <label>Class
               <div class="form-check">
                  <input class="form-check-input" type="radio" name="flight_class" <?php if(isset($flight_class) && $flight_class=="tourist") echo "checked";?> value="tourist" required>Tourist
               </div>

               <div class="form-check">
                  <input class="form-check-input" type="radio" name="flight_class" <?php if(isset($flight_class) && $flight_class=="first_class") echo "checked";?> value="first_class" required>First Class
               </div>

               <div class="form-check">
                  <input class="form-check-input" type="radio" name="flight_class" <?php if(isset($flight_class) && $flight_class=="executive") echo "checked";?> value="executive" required>Executive
               </div>
               
               <div class="valid-feedback">Valid</div>
               <div class="invalid-feedback">Check a radio button to continue</div>
            </label>
         </div>

         <div class="mb-3" id="services">
            <div class="form-check">
               <input class="form-check-input" type="checkbox" name="services[feeding]" value="25000">Feeding
            </div>

            <div class="form-check">
               <input class="form-check-input" type="checkbox" name="services[internet]" value="5000">Internet
            </div>

            <div class="form-check">
               <input class="form-check-input" type="checkbox" name="services[luggage_rack]" value="4000">Luggage Rack
            </div>
         </div>
         
         <div class="form-group">
            <label for="email">Name</label>
            <input type="text" class="form-control" placeholder="Your Name" name="name" required>
            <div class="valid-feedback">Valid</div>
            <div class="invalid-feedback">Please fill out this field</div>
         </div>

         <div class="form-group">
            <label for="email">Age</label>
            <input type="number" class="form-control" placeholder="Age" name="age" required>
            <div class="valid-feedback" >Valid</div>
            <div class="invalid-feedback">Please fill out this field</div>
         </div>
         
         <!--<span class="error">* <?php echo $age_error; ?></span>-->
         <br>

         <button type="submit" class="btn btn-success">Submit</button>
      </form>
      <br>
   </div>

   <script>
      // Disable form submissions if there are invalid fields
      (function() {
      'use strict';
      window.addEventListener('load', function() {
         // Get the forms we want to add validation styles to
         var forms = document.getElementsByClassName('needs-validation');
         // Loop over them and prevent submission
         var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
               event.preventDefault();
               event.stopPropagation();
            }
            form.classList.add('was-validated');
            }, false);
         });
      }, false);
      })();
   </script>
   
</body>
</html>