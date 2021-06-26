<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4th Activity - Body Mass Index</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <style>
        #body-index {
            display: none;
        }

        .error {
            border: 1px solid red;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="fourthActivity">
            <h2>4th Activity</h2>

            <p>El índice de masa corporal (IMC) es una medida de asociación entre el peso y la talla de un individuo. Ideado por el estadístico belga L.A.J. Quetelet, por lo que también se conoce como índice de Quetelet.</p>
            <p>Se calcula según la expresión matemática:</p>
            <p>Desarrollar un formulario que solicite el peso en kilogramos y la longitud en metros de unapersona y calcule y muestre en un script el índice de masa corporal y la categoría en la cual se encuentra el individuo en base a la siguiente tabla.</p>

            <table class="table table-bordered border-primary">
                <thead>
                    <tr>
                    <th>Body Mass Index</th>
                    <th>Category</th>
                    </tr>
                </thead>
                
                <tr>
                    <td>Under 18.5</td>
                    <td>Underweight</td>
                </tr>
                    
                <tr>
                    <td>>= 18.5 y < 25</td>
                    <td>Normal</td>
                </tr>

                <tr>
                    <td>>= 25 y < 30</td>
                    <td>Overweight</td>
                </tr>

                <tr>
                    <td>>= 30.0 y < 40</td>
                    <td>Obese</td>
                </tr>

                <tr>
                    <td>Above 40</td>
                    <td>Morbid Obesity</td>
                </tr>
            </table>

            <form id="bodyMass-form" action="bodyIndexForm.php" method="POST">
                <div class="form-group">
                    <label for="email">Weight (kg):</label>
                    <input type="text" class="form-control" id="weight" placeholder="Enter weight" name="weight">
                </div>

                <div class="form-group">
                    <label for="height">Height (m):</label>
                    <input type="number" class="form-control" id="height" placeholder="Enter height" name="height">
                </div>
                <br>

                <button id="body-submit" type="button" class="btn btn-primary">Submit</button>
            </form>

            <div id="body-index">
                <p>Body Mass Index: <span id="bodyMassIndex"></span></p>
                <p>Index category: <span id="category"></span></p>
            </div>
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

    <!--Script 4th activity-->
    <script src="script4.js"></script>
</body>
</html>