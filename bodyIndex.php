<?php 
    $weightPerson = $_GET["weight"];
    $heightPerson = $_GET["height"]/100;
    $imc = $weightPerson/(pow($heightPerson,2));

    function bodyIndexMsg() {
        $GLOBALS['imc'] = $GLOBALS['weightPerson']/(pow($GLOBALS['heightPerson'],2));

        if($GLOBALS['imc'] < 18.5) {
            echo "Underweight";
        }
    
        elseif($GLOBALS['imc'] >= 18.5 AND $GLOBALS['imc'] < 25) {
            echo "Normal";
        }
    
        elseif($GLOBALS['imc'] >= 25 AND $GLOBALS['imc'] < 30) {
            echo "Overweight";
        }

        elseif($GLOBALS['imc'] >= 30 AND $GLOBALS['imc'] < 40) {
            echo "Obese";
        }
    
        else {
            echo "Morbid Obesity";
        }
    }

    if($heightPerson > 0) { 
?>
        <!doctype html>
        <html lang="en">
            <head>
                <!-- Required meta tags -->
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">

                <!-- Bootstrap CSS -->
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

                <title>Body Mass Index Results</title>
            </head>

            <body>
                <div class="container">
                    <h2>Body Mass Index Results</h2> 

                    <table class="table table-bordered border-primary">
                        <thead>
                            <tr>
                                <th>BMI</th>
                                <th>Category</th>
                            </tr>
                        </thead>
                    
                        <tbody>
                            <tr>
                                <td><?php echo $imc; ?></td>
                                <td><?php echo bodyIndexMsg(); ?></td>  <!-- Call the function-->
                            </tr>
                        </tbody>
                    </table>
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
<?php } 
    
    elseif($heightPerson = 0){
        echo '<script type="text/JavaScript">
        alert("Height must be different or greater than zero"); 
        </script>'
    ;
    }

    else{
        echo '<script type="text/JavaScript">
        alert("Height must be different or greater than zero"); 
        </script>'
    ;
    }
?>