<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<hr>
    <?php
    function sum(){
        static $a=0;
        $a++;
        echo $a;
    }
    sum();
    sum();
    sum();
    ?>

    <hr>

    <?php
    $a=10;
    function num(){
        global $a;
        $a++;
        echo $a;
    }
    num();
    ?>
    <hr>

    <?php
    function jum($a , $b){
       return $a +=$b;
    }
   $term=jum(10,20);
   echo $term;
    ?>
    <hr>

    <?php
    
    function mum(...$tiny){
        $m=0;
        foreach($tiny as $thin){
            $m+=$thin;
        }
        return $m;
    }

    echo mum(1,2,3,4,5,6,7,7,8,9,8,9,6,5,6,5,6,5,454,2,54,452,86,8);

    ?>
    <hr>
    
    <?php
    
    function apple($a,$b,$c){
      return $a+$b+$c;
    }

    $list=[80,90,100];
    echo apple(...$list);
    ?>
    <hr>
</body>
</html>