<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$error = $_FILES['my_file']['error'];
if ($error !== UPLOAD_ERR_OK) {
    echo 'Error uploading file';
    die;
}

$type = $_FILES['my_file']['type'];
if ($type == 'image/png' || $type == 'image/jpeg') {
    $uploadedFileName = $_FILES['my_file']['name'];
    $fileSavePath = './storage'.uniqid().'_'.$uploadedFileName;
    $tempFilePath = $_FILES['my_file']['tmp_name'];
    move_uploaded_file($tempFilePath, $fileSavePath);
    echo 'Uploaded successful!'.'<br>'.'<br>';
    echo 'List of uploaded files:'.'<br>'.'<br>';
    $filesArray = [];
    $filesArray[] = $_FILES['my_file']['name'];
    foreach ($filesArray as $value) {
        echo $value.PHP_EOL;
    }
} else {
    echo 'Uploaded file type error';
};
?>
<br>
<br>
<a href="/">GO BACK</a>
</body>
</html>


