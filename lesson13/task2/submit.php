<?php
$fileItems = file_get_contents('new.json');
$fileList = json_decode($fileItems, true);

$error = $_FILES['my_file']['error'];
if ($error !== UPLOAD_ERR_OK) {
    echo 'Error uploading file';
    die;
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {
            width: 50%;
        }
        tr, th, td {
            text-align: center;
        }
    </style>
</head>
<body>
<br>

<h3>List of uploaded files:</h3>
    <?php
    $type = $_FILES['my_file']['type'];
    if ($type == 'image/png' || $type == 'image/jpeg') {
        $uploadedFileName = $_FILES['my_file']['name'];
        $fileSavePath = './storage'.uniqid().'_'.$uploadedFileName;
        $tempFilePath = $_FILES['my_file']['tmp_name'];
        move_uploaded_file($tempFilePath, $fileSavePath);
        echo 'Uploaded successful!'.'<br>'.'<br>';
        $file = new SplFileInfo($_GET['my_file']); ///kazkur cia klaida !!!!
        $fileList[] = [
            'file_name' => $_FILES['my_file']['name'],
            'file_size' => $_FILES['my_file']['size'],
            'uploaded_date' => date('Y-m-d H:i:s', $file->getMTime()),
        ];
        foreach ($fileList as $key=>$item): ?>
            <table>
                <tr>
                    <th>File name</th>
                    <th>File size</th>
                    <th>Uploaded date</th>
                </tr>
                <tr>
                    <td><?= $item['file_name'] ?></td>
                    <td><?= $item['file_size'] ?></td>
                    <td><?= $item['uploaded_date'] ?></td>
                </tr>
            </table>
        <?php endforeach ?>
    <?php
    } else {
        echo 'Uploaded file type error';
    };
    ?>
<br>
<a href="/">GO BACK</a>
</body>
</html>

<?php
$serializedFileList = json_encode($fileList, JSON_PRETTY_PRINT);
$newFileList = file_put_contents('new.json', $serializedFileList);
?>


