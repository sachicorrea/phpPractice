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

    <title>Forms Activities</title>

    <style>.error {color: #FF0000}</style>
  </head>

  <body>
    <div class="container">
      <div class="secondActivity">
        <h2>2nd Activity</h2>

        <p>Una compañía de venta de celulares paga a su personal de ventas un salario básico de $300000 mensuales más una comisión de $10000 por cada celular vendido, más el 5% del valor de la venta. Cada mes el contador de la empresa ingresa el nombre del vendedor, el número de celulares vendidos y el valor total de las ventas de celulares en el mes. Realice un formulario que dados los datos ingresados por el contador calcule y muestre en un script el nombre del empleado y el salario total del empleado en el mes</p>
        
        <form action="salaries.php" method="get">
            <div class="form-group">
                <label for="email">Salesman / Saleswoman:</label>
                <input type="text" class="form-control" id="salesperson" placeholder="Enter salesperson name and last name" name="salesperson">
            </div>

            <div class="form-group">
                <label for="email">Mobile phones sold:</label>
                <input type="number" class="form-control" id="phones" placeholder="Enter number of phones sold" name="phones">
            </div>
            
            <div class="form-group">
                <label for="email">Total Sales:</label>
                <input type="number" class="form-control" id="sales" placeholder="Enter total sales" name="sales">
            </div>
            <br>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
      <br>

      <div class="thirdActivity">
        <h2>3rd Activity</h2>

        <p>Una persona interesada en un empleo, realiza un test de capacitación.En dicho test la empresa obtuvo la siguiente información. Cantidad total de preguntas que se le realizaron y la cantidad de preguntas que contestó correctamente.</p>
        <p>La empresa le ha solicitado desarrollar un formulario que ingrese el nombre del candidato, la cantidad de preguntas del test y la cantidad de preguntas respondidas correctamente.</p>
        <p>Y realizar un script el cual deberá mostrar el nombre del candidato, el porcentaje de preguntas
        acertadas y el nivel en el cual ha quedado.</p>
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

        <form action="testResults.php" method="get">
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

            <button type="submit" class="btn btn-dark">Submit</button>
        </form>
      </div>   
      <br>

      <div class="fourthActivity">
        <h2>4th Activity</h2>

        <p>El índice de masa corporal (IMC) es una medida de asociación entre el peso y la talla de un individuo. Ideado por el estadístico belgaL. A. J. Quetelet, por lo que también se conoce como índice de Quetelet.</p>
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

        <form action="bodyIndex.php" method="get">
          <div class="form-group">
              <label for="email">Weight (kg):</label>
              <input type="text" class="form-control" id="weight" placeholder="Enter weight" name="weight">
          </div>

          <div class="form-group">
              <label for="email">Height (cm):</label>
              <input type="number" class="form-control" id="height" placeholder="Enter height" name="height">
          </div>
          <br>

          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
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
