<?php
if (isset($_POST['file_base64'])){
    var_dump($_POST);
    $file_base64 = $_POST['file_base64'];
    $file_base64 = preg_replace('/data:.*;base64,/i', '', $file_base64);
    $file_base64 = base64_decode($file_base64);
    var_dump($file_base64);
    file_put_contents('./file.save', $file_base64);
} 
?>