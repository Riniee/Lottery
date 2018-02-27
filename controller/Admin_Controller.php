<?php

require_once 'Secure_Controller.php';

date_default_timezone_set('Asia/Kolkata');


$data = !empty($_POST) ? $_POST : json_decode(file_get_contents("php://input"), true);

$luck = $data['luckType'];

$obj = new Secure_Controller;


if (isset($_FILES['releaseDate'])) {
    
    $db = [
      'result_name'   =>  $obj->imageUploads($_FILES, 'releaseDate', 'results'),
      'result_date'   =>  $data['txtDate'],
      'created_date'  =>  date('Y-m-d H:i:s')
    ];
    
}

$create = $obj->uploadPDF($luck, $db);

if ($create) {
    
    header("location:../public/admin.php");
    
    die (json_encode(array(
        "status_code" => 200,
        "message"     => 'File Uploaded Successully'
    )));
    
} else {
    
    header("location:../public/admin.php");
    
    die (json_encode(array(
        "status_code" => 400,
        "message"     => 'File Uploading Failed'
    )));
    
}
