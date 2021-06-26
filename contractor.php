<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contractor's Salary</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <style>
        #contractor-result {
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
            <h2>1st Activity</h2>

            <p>Un contratista firma un contrato de prestación de servicios para una empresa, el cual tiene un salario mensual.</p>
            <p>Al contratista se le descuenta el 10% del valor del salario mensual por concepto de retención en la fuente.</p>
            <p>Adicional a eso, el contratista debe realizar sus aportes a salud y pensión, sobre una base de cotización.</p>
            <p>La base de cotización corresponde al 40% del salario mensual.</p>
            <p>Los aportes a salud corresponden al 12.5% sobre la base de cotización y los aportes a pensiones corresponden a un 16% sobre la base de cotización.</p>
            <p>Realizar formulario que solicite el salario mensual un script que muestre el valor descontado por retención en la fuente, la base de cotización, el valor pagado a salud y el valor pagado a pensiones.</p>
            
            <form id="contractor-form" action="contractorForm.php" method="POST">
                <div class="form-group">
                    <label for="contractor">Contractor's salary</label>
                    <input type="number" class="form-control" id="contractorSalary" placeholder="Enter contractor's salary" name="contractorSalary">
                </div>

                <button id="contractor-submit" type="button" class="btn btn-primary">Submit</button>
            </form>

            <div id="contractor-result">
                <p>Retention fee: <span id="retention-fee"></span></p>
                <p>Basic salary for social payments: <span id="base-salary"></span></p>
                <p>Health payment: <span id="health"></span></p>
                <p>Pension payment: <span id="pension"></span></p>
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

    <!--Script 1st activity-->
    <script src="script1.js"></script>
</body>
</html>