<?php 

    function is_ajax_request() {
        return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest';
    }

    $salesperson = isset($_POST['salesperson']) ? $_POST['salesperson'] : '';
    $quantDevices = isset($_POST['phones']) ? (int) $_POST['phones'] : '';
    $valueSales = isset($_POST['sales']) ? (int) $_POST['sales'] : '';

    $errors = [];
    if($salesperson == '') {$errors[] = 'salesperson'; }
    if($quantDevices == '') {$errors[] = 'phones'; }
    if($valueSales == '') {$errors[] = 'sales'; }

    if(!empty($errors)) {
        // won't work because of single-quotes
        // echo "{ 'errors': " . json_encode($errors) . "}";
        $result_array = array('errors' => $errors);
        echo json_encode($result_array);
        exit;
    }

    $minSalary = 300000;
    $commission = 10000 * $quantDevices;
    $percSales = 0.05 * $valueSales;
    $totalSalary = $minSalary + $commission + $percSales;

    if(is_ajax_request()) {
        echo json_encode(array('salesperson' => $salesperson, 'totalSalary' => $totalSalary));
    } else {
        exit;
    }
?>