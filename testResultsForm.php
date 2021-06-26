<?php 

    function is_ajax_salary() {
        return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest';
    }

    $nameApplicant = isset($_POST['applicant']) ? $_POST['applicant'] : '';
    $totalQuest = isset($_POST['totalQuestions']) ? (int) $_POST['totalQuestions'] : '';
    $rightQuest = isset($_POST['rightQuestions']) ? (int) $_POST['rightQuestions'] : '';

    $errors = [];
    if($nameApplicant == '') {$errors[] = 'applicant'; }
    if($totalQuest == '') {$errors[] = 'totalQuestions'; }
    if($rightQuest == '') {$errors[] = 'rightQuestions'; }

    if(!empty($errors)) {
        // won't work because of single-quotes
        // echo "{ 'errors': " . json_encode($errors) . "}";
        $result_array = array('errors' => $errors);
        echo json_encode($result_array);
        exit;
    }

    $results = ($rightQuest/$totalQuest) * 100;

    if($results >= 90) {
        $level = 'Superior';
    }

    elseif($results >= 75) {
        $level = 'Intermediate';
    }

    elseif($results >= 50) {
        $level = 'Average';
    }

    else {
        $level = 'Out of level';
    }

    if(is_ajax_salary()) {
        echo json_encode(array('name' => $nameApplicant, 'rightQuestions' => $results, 'level' => $level));
    } else {
        exit;
    }
?>