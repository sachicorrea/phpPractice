<?php
    function is_ajax_request() {
        return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest';
    }

    $contractorSalary = isset($_POST['contractorSalary']) ? (int) $_POST['contractorSalary'] : '';

    $errors = [];
    if($contractorSalary == '') {$errors[] = 'contractorSalary'; }

    if(!empty($errors)) {
        // won't work because of single-quotes
        // echo "{ 'errors': " . json_encode($errors) . "}";
        $result_array = array('errors' => $errors);
        echo json_encode($result_array);
        exit;
    }

    $retention_fee = $contractorSalary * 0.10;
    $base_salary = $contractorSalary * 0.40;
    $health = $base_salary * 0.125;
    $pension = $base_salary * 0.16;

    if(is_ajax_request()) {
        echo json_encode(array('retention_fee' => $retention_fee, 'base_salary' => $base_salary, 'health' => $health, 'pension' => $pension));
    } else {
        exit;
    }
?>