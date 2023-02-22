<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
<<<<<<< HEAD
// ==
=======
// dd
>>>>>>> 0b4080685494257159aba76299100a8dc8a2699a
$list=[1,2,3,4];

$sum= function() use($list){

    foreach($list as $item){
        echo $item*2;
        $item++;
    }   
};
echo $sum() ;

?>
</body>
</html>
