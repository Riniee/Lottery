<?php

session_save_path('C:\xampp\htdocs\lotteryMizoram\tmp');
session_start();

require_once '../model/Home_Model.php';

date_default_timezone_set('Asia/Kolkata');

$todayDate =  date('Y-m-d');

$todayTime = date('H:i:s');

$resultsTime = [
    "rose"   => DateTime::createFromFormat('H:i:s', '13:30:00')->format('H:i:s'),       // rose
    "lilly"  => DateTime::createFromFormat('H:i:s', '14:30:00')->format('H:i:s'),       // lilly 
    "lotus"  => DateTime::createFromFormat('H:i:s', '15:30:00')->format('H:i:s'),       // lotus
 "jasmine"   => DateTime::createFromFormat('H:i:s', '16:30:00')->format('H:i:s'),       // jasmine
  "kurinji"  => DateTime::createFromFormat('H:i:s', '17:30:00')->format('H:i:s'),       // rose
"marigold"   => DateTime::createFromFormat('H:i:s', '18:30:00')->format('H:i:s')       // rose
    
];

$obj = new Home_Model;


// Rose ========= Results

$fileRose = $obj->getDocName('rose', $todayDate);

if ((is_array($fileRose)) && ($todayTime > $resultsTime['rose'])) {
    
    $file['rose'] = $fileRose['result_name'];
    
} else {
    
    $file['rose'] = 'results_awaiting.pdf';
    
}


// Lilly ========= Results

$fileLilly = $obj->getDocName('lilly', $todayDate);

if ((is_array($fileRose)) && ($todayTime < $resultsTime['lilly'])) {
    
    $file['lilly'] = $fileLilly['result_name'];
    
} else{
    
    $file['lilly'] = 'results_awaiting.pdf';
    
}


// Lotus ========= Results

$fileLotus = $obj->getDocName('lotus', $todayDate);

if ((is_array($fileRose)) && ($todayTime < $resultsTime['lotus'])) {
    
    $file['lotus'] = $fileLotus['result_name'];
    
} else {
    
    $file['lotus'] = 'results_awaiting.pdf';
    
}

// Jasmine ========= Results

$fileLotus = $obj->getDocName('jasmine', $todayDate);

if ((is_array($fileRose)) && ($todayTime < $resultsTime['jasmine'])) {
    
    $file['jasmine'] = $fileLotus['result_name'];
    
} else {
    
    $file['jasmine'] = 'results_awaiting.pdf';
    
}

// Kurinji ========= Results

$fileLotus = $obj->getDocName('kurinji', $todayDate);

if ((is_array($fileRose)) && ($todayTime < $resultsTime['kurinji'])) {
    
    $file['kurinji'] = $fileLotus['result_name'];
    
} else {
    
    $file['kurinji'] = 'results_awaiting.pdf';
    
}

// Marigold ========= Results

$fileLotus = $obj->getDocName('marigold', $todayDate);

if ((is_array($fileRose)) && ($todayTime < $resultsTime['lotus'])) {
    
    $file['marigold'] = $fileLotus['result_name'];
    
} else {
    
    $file['marigold'] = 'results_awaiting.pdf';
    
}