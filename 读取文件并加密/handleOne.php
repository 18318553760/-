<?php
// var_dump($_POST);
var_dump($_FILES);

$data = file_get_contents($_FILES["file"]["tmp_name"]);

var_dump($data);

$data_decode = preg_replace('/data:.*;base64,/i', '',base64_decode($data));
$data_decode = preg_replace('/data:.*;base64,/i', '', base64_decode($data_decode));
var_dump($data_decode);

file_put_contents('./file.txt',$data_decode );
?>

















//<?php
//if (isset($_POST['file_base64'])){
  //  $file_base64 = $_POST['file_base64'];
   // $file_base64 = preg_replace('/data:.*;base64,/i', '', $file_base64);
    //$file_base64 = base64_decode($file_base64);
    //$file_base64 = preg_replace('/data:.*;base64,/i', '', $file_base64);
    //$file_base64 = base64_decode($file_base64);
    //var_dump($file_base64);
    //file_put_contents('./file.save', $file_base64);
//} 
//?>


