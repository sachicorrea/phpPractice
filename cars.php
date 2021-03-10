<?php
    require_once('includes/functions.php');

    $model = '';
    $version = '';
    $name= '';
    $accesories = '';
    $gender = '';

    $cars_options = array (
        'twingo',
        'sandero',
        'koleos',
        'logan'
    );
?>

<!doctype html>
<html lang="en">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Car Dealership</title>
    </head>
  
    <body>
        <div class="container">
            <h5>Tu Renault Dealership</h5>
            
            <form method="post" action="carsForm.php">
                <label>Car Model</label>
                
                <div class="mb-3">
                    <select name="model">
                        <?php
                        foreach($cars_options as $unit) {
                            $opt = optionize($unit);

                            echo "<option value=\"{$opt}\"";
                            if ($model == $opt) {
                                echo " selected";
                            }
                            echo ">{$unit}</option>";
                        }
                        ?>
                    </select>
                </div>

                <div class="mb-3"> 
                    <label>Car's Version</label>
                    
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="version" id="flexRadioDefault2" <?php if(isset($version) && $version=="basic") echo "checked";?> value="basic">Basic
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="version" id="flexRadioDefault2" <?php if(isset($version) && $version=="air") echo "checked";?> value="air">Air
                    </div>
                </div>

                <div class="mb-3">
                    <label>Car's Accesories</label>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="accesories[crystals]" value="200000">Crystals
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="accesories[blockage]" value="45000">Blockage
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="accesories[alarm]" value="130000">Alarm
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="accesories[protection_layer]" value="60000">Protection layer
                </div>
                </div>

                <div class="mb-3">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" placeholder="Your Name" name="name">
                    </div>
                </div>

                <div class="mb-3"> 
                    <label>Gender</label>
                    
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" <?php if(isset($gender) && $gender=="man") echo "checked";?> value="man">Man
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" <?php if(isset($gender) && $gender=="woman") echo "checked";?> value="woman">Woman
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form> 
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
