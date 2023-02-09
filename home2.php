<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ساختار های کنترلی</title>
</head>
<body>
    <?php
    $tik1='blue';

    if($tik1=='red'){

        echo 'this is False';

    }

    elseif($tik1=='blue'){

        echo'this is True';

    }
    ?>
    <br>
    <?php
    //////////////////////ternery///////////////////////////
    $tik2='red';
    ($tik2=='red') ? var_dump('this is True') : var_dump('this is True');
   ?>
</body>
</html>