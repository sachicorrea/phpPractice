<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3rd Activity - Test Results</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <style>
        #test {
            display: none;
        }

        .error {
            border: 1px solid red;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="thirdActivity">
            <h2>3rd Activity</h2>

            <p>Una persona interesada en un empleo, realiza un test de capacitación.En dicho test la empresa obtuvo la siguiente información. Cantidad total de preguntas que se le realizaron y la cantidad de preguntas que contestó correctamente.</p>
            <p>La empresa le ha solicitado desarrollar un formulario que ingrese el nombre del candidato, la cantidad de preguntas del test y la cantidad de preguntas respondidas correctamente.</p>
            <p>Y realizar un script el cual deberá mostrar el nombre del candidato, el porcentaje de preguntas acertadas y el nivel en el cual ha quedado.</p>
            <p>El porcentaje de preguntas correctas se pude calcular de la siguiente forma.</p>
            <p>% preguntas correctas = (preguntas correctas / total preguntas) * 100</p>
            <p>El nivel se calcula de acuerdo al siguiente rango.</p>

            <table class="table table-stripped table-dark">
                <thead>
                    <tr>
                    <th>Nivel</th>
                    <th>Porcentaje</th>
                    </tr>
                </thead>
                
                <tr>
                    <td>Superior</td>
                    <td>>= 90%</td>
                </tr>
                    
                <tr>
                    <td>Intermediate</td>
                    <td>>= 75% y &lt; 90%</td>
                </tr>

                <tr>
                    <td>Nivel regular</td>
                    <td>>= 50% y &lt; 75%</td>
                </tr>

                <tr>
                    <td>Fuera de Nivel</td>
                    <td>&lt; 50%</td>
                </tr>
            </table>

            <form id="level-form" action="testResultsForm.php" method="POST">
                <div class="form-group">
                    <label for="email">Applicant's Name:</Nav></label>
                    <input type="text" class="form-control" id="applicant" placeholder="Enter applicant's name" name="applicant">
                </div>

                <div class="form-group">
                    <label for="email">Total questions:</label>
                    <input type="number" class="form-control" id="totalQuestions" placeholder="Enter total questions' amount" name="totalQuestions">
                </div>
                
                <div class="form-group">
                    <label for="email">Number of right questions:</label>
                    <input type="number" class="form-control" id="rightQuestions" placeholder="Enter total of right questions" name="rightQuestions">
                </div>
                <br>

                <button id="level-submit" type="button" class="btn btn-dark">Submit</button>
            </form>

            <div id="test">
                <p>Candidate's name: <span id="candidate"></span></p>
                <p>Correct answers percentage: <span id="correct-answers"></span></p>
                <p>Candidate level is: <span id="candidate-level"></span></p>
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

    <!--Script 3rd activity-->
    <script src="script3.js"></script>
</body>
</html>