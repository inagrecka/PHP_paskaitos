<?php

$error = $_FILES['my_file']['error'];
if ($error !== UPLOAD_ERR_OK) {
    echo 'Error uploading file';
    die;
}
//var_dump($_FILES);
//die;

$type = $_FILES['my_file']['type'];
if ($type == 'image/png' || $type == 'image/jpeg') {
    $uploadedFileName = $_FILES['my_file']['name'];
    $fileSavePath = './storage'.uniqid().'_'.$uploadedFileName;
    $tempFilePath = $_FILES['my_file']['tmp_name'];
    move_uploaded_file($tempFilePath, $fileSavePath);
    echo 'Uploaded successful!';
} else {
    echo 'Uploaded file type error';
}

