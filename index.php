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
<?php for ($i = 0; $i <= 10; $i++): //uztenka <?php nurodyti pradzioje
    if ($i % 2 === 0):
       echo  '<strong>'.$i.'</strong>'.'<br>';
    else:
        echo $i.'<br>';
    endif;
endfor; ?> <!-- ir gale php uzdaryti su ?> -->

<form method="POST" action="submit.php">
    <input type="text" name="name"/>
    <input type="text" name="surname"/>
    <input type="submit">
</form>
</body>
</html>

