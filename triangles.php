<?php 
    require_once('includes/functions.php');
?>

<!doctype html>
<html lang="en">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Rectangular Triangle</title>
    </head>

    <body>
        <div class="container">
        <div class="fifthActivity">
            <h2>5th Activity</h2>

            <p>Crear un formulario que solicite la base y la altura de un triángulo rectángulo, y de acuerdo al radio button seleccionado, calcular y mostrar en un script el área, la hipotenusa o el perímetro del triángulo</p>

            <form method="post" action="trianglesForm.php">

            <div class="form-group">
                <label for="base">Triangle Base (cm):</label>
                <input type="number" class="form-control" id="base" placeholder="0.0" step="0.01" name="base" value="<?php echo $base;  ?>">
            </div>

            <div class="form-group">
                <label for="height">Triangle Height (cm):</label>
                <input type="number" class="form-control" id="height" placeholder="0.0" step="0.01" name="height" value="<?php echo $height; ?>">
            </div>
            <br>

            <!-- Radio buttons form -->

            <div class="form-check">
                <input class="form-check-input" type="radio" name="calculation" id="area" <?php if(isset($calculation) && $calculation=="area") echo "checked" ?> value="area">
                <label class="form-check-label" for="area">Area</label>
            </div>
            
            <div class="form-check">
                <input class="form-check-input" type="radio" name="calculation" id="perimeter" <?php if(isset($calculation) && $calculation=="perimeter") echo "checked"; ?> value="perimeter">
                <label class="form-check-label" for="perimeter">Perimeter</label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="calculation" id="hypotenuse" <?php if(isset($calculation) && $calculation=="hypotenuse") echo "checked"; ?> value="hypotenuse">
                <label class="form-check-label" for="hypotenuse">Hypotenuse</label>
            </div>
            <br>

            <button type="submit" name="submit" class="btn btn-success">Submit</button>
            </form>
            <br>

        </div>
        <br>
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
