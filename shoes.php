    <?php
    require_once('includes/functions.php');

    $quantityPairs = '';

    $pair_shoes = array(
        1,
        2, 
        3
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

    <title>Shoes Shop</title>
</head>

<body>
    <div class="container">
        <form method="post" action="shoesForm.php">
            <label>Select the pair of shoes to buy</label>
            <div class="mb-3">
                <select name="quantityPairs">
                    <?php
                    foreach($pair_shoes as $unit) {
                        $opt = optionize($unit);

                        echo "<option value=\"{$opt}\"";
                        if ($quantityPairs == $opt) {
                            echo " selected";
                        }
                        echo ">{$unit}</option>";
                    }
                    ?>
                </select>
            </div>

            <div class="mb-3">
                <div class="form-group">
                    <label for="pair1">Cost 1st pair of shoes</label>
                    <input type="number" class="form-control" placeholder="Enter value of a pair" name="pair1">
                </div>
            </div>

            <div class="mb-3">
                <div class="form-group">
                    <label for="pair2">Cost 2nd pair of shoes</label>
                    <input type="number" class="form-control" placeholder="Enter value of a pair" name="pair2">
                </div>
            </div>

            <div class="mb-3">
                <div class="form-group">
                    <label for="pair3">Cost 3rd pair of shoes</label>
                    <input type="number" class="form-control" placeholder="Enter value of a pair" name="pair3">
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
