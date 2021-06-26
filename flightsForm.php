<?php 
    require_once('includes/functions.php');
    
    function is_ajax_request() {
        return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest';
    }

    $origin = isset($_POST['origin']) ? $_POST['origin'] : '';
    $flight_to = isset($_POST['flight_to']) ? $_POST['flight_to'] : '';
    $flight_class = isset($_POST['flight_class']) ? $_POST['flight_class'] : '';
    $services = isset($_POST['services']) ? $_POST['services'] : '';
    $age = isset($_POST['age']) ? (int)$_POST['age'] : '';

    $errors = [];
    //if($origin == '') {$errors[] = 'origin'; }
    //if($flight_to == '') {$errors[] = 'flight_to'; }

    /*if(!empty($errors)) {
        // won't work because of single-quotes
        // echo "{ 'errors': " . json_encode($errors) . "}";
        $result_array = array('errors' => $errors);
        echo json_encode($result_array);
        exit;
    }*/

    $flightValue = flightCost($origin, $flight_to);
    $increasingCost = increasing($flightValue, $flight_class);
    $servicesValue = servicesCost($services);
    $discounts = discounts($flightValue, $age);
    $totalFlight = $flightValue + $increasingCost + $servicesValue - $discounts;

    if(is_ajax_request()) {
        echo json_encode(array('flightValue' => $flightValue,  'increasingCost' =>  $increasingCost, 'servicesValue' => $servicesValue, 'discounts' => $discounts, 'totalFlight' => $totalFlight));
    } else {
        exit;
    }
?>