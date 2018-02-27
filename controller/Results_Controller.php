<?php

require_once '../model/Home_Model.php';

date_default_timezone_set('Asia/Kolkata');

$date1 = DateTime::createFromFormat("Y-m-d", $_POST['searchDate']);         // Incoming Date

$date2 = DateTime::createFromFormat("Y-m-d", date('Y-m-d'));                // Current Date


$interval = date_diff(new DateTime($_POST['searchDate']), new DateTime(date('Y-m-d')));

if ($interval->invert) {
    
    $_SESSION['ack']['error'] = 'Not allowed to View Future Dates';
    
    header("location: ../public/old_results.php");
    
}

else if ($interval->m > 3) {
    
    $_SESSION['ack']['error'] = 'Cannot View Older Results';
    
    header("location: ../public/old_results.php");
    
} else {
    
    $obj = new Home_Model;

    $fileRose = $obj->getDocName($_POST['luckType'], $_POST['searchDate']);

    if (is_array($fileRose)) {

        header("location: ../uploads/results/".$fileRose['result_name']);

    } else {

        header("location: ../uploads/results/results_awaiting.pdf");

    }
    
}
