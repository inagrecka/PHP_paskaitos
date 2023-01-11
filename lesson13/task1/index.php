<?php

//phpinfo();
declare(strict_types=1);
?>


<!--Failų valdymo panelė.-->
<!--1. Atvaizduokite formą, kuri leistų upload'inti .png ir .jpeg failus į serverį. Failų dydžio limitas - 1MB.-->
<!--Uploadintas failas turi atsirasti ./data direktorijoje su unikaliu pavadinimu.-->
<!--Failo metaduomenys (failo pavadinimas, dydis, path'as, įkėlimo data) turėtų būti išsaugomi atskirame faile.-->

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
    <form action="submit.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="my_file">
        <button type="submit">Upload</button>
    </form>
</body>
</html>


<!--2. Pridėti puslapį, kuriame būtų atvaizduojami visi pauplodinti failai. Turėtų būti matoma:-->
<!--- failo pavadinimas (kokį buvo priskyręs vartotojas)-->
<!--- failo dydis-->
<!--- įkėlimo data-->
<!--Paspaudus ant tam tikro failo turėtų jį parsiųsti į vartotojo kompiuterį.-->



<!--3. Prie kiekvieno failo pridėti mygtuką, kurį paspaudus, failas bus ištrintas iš ./data direktorijos, taip pat-->
<!--iš failo, kuriame saugomi metaduomenys.-->
