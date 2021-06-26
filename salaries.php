<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <style>
        #result-salary {
            display: none;
        }

        .error {
            border: 1px solid red;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="secondActivity">
            <h2>2nd Activity</h2>

            <p>Una compañía de venta de celulares paga a su personal de ventas un salario básico de $300000 mensuales más una comisión de $10000 por cada celular vendido, más el 5% del valor de la venta. Cada mes el contador de la empresa ingresa el nombre del vendedor, el número de celulares vendidos y el valor total de las ventas de celulares en el mes. Realice un formulario que dados los datos ingresados por el contador calcule y muestre en un script el nombre del empleado y el salario total del empleado en el mes</p>
            
            <form id="salary-form" action="salariesForm.php" method="POST">
                <div class="form-group">
                    <label for="salesperson">Salesman / Saleswoman:</label>
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

                <!--<button type="submit" class="btn btn-primary">Submit</button>-->
                <button id="ajax-submit" type="button" class="btn btn-primary">Submit</button>
            </form>

            <div id="result-salary">
                <p>Employee's name: <span id="employee-name"></span></p>
                <p>The total salary is: <span id="salary"></span></p>
            </div>
        </div>
    </div>
    <br>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->

    <!--Script 2nd activity-->
    <script src="script2.js"></script>
</body>
</html>