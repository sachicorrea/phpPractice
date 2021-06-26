<?php 

    function is_ajax_bodyMass() {
        return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest';
    }

    $weightPerson = isset($_POST['weight']) ? (float) $_POST['weight'] : '';
    $heightPerson = isset($_POST['height']) ? (float) $_POST['height'] : '';

    $errors = [];
    if($weightPerson == '') {$errors[] = 'weight'; }
    if($heightPerson == '') {$errors[] = 'height'; }

    if(!empty($errors)) {
        // won't work because of single-quotes
        // echo "{ 'errors': " . json_encode($errors) . "}";
        $result_array = array('errors' => $errors);
        echo json_encode($result_array);
        exit;
    }

    $massIndex = $weightPerson/(pow($heightPerson,2));

    if($massIndex < 18.5) {
        $categoryIndex = "Underweight";
    }

    elseif($massIndex >= 18.5) {
        $categoryIndex = "Normal";
    }

    elseif($massIndex >= 25) {
        $categoryIndex = "Overweight";
    }

    elseif($massIndex >= 30 AND $massIndex < 40) {
        $categoryIndex = "Obese";
    }

    else {
        $categoryIndex = "Morbid Obesity";
    }

    if(is_ajax_bodyMass()) {
        echo json_encode(array('massIndex' => $massIndex ,'categoryIndex' => $categoryIndex));
    } else {
        exit;
    }
?>