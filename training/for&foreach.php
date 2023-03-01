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
        $list=['ali',24,'student','onlychild',4];
        $i=0;
        for($i=4;$i>=0;$i--){
            echo $list[$i] ."<br>";
        }
    ?>
    <p>-------------------------------------------------------------------------------------------------------</p>
    <?php
        $list=['ali',24,'student','onlychild',4];
        $i=0;
        for($i=0;$i<=4;$i++){
            echo $list[$i] ."<br>";
        }
    ?>

<p>-------------------------------------------------------------------------------------------------------</p>
 <?php
        $list=['ali',24,'student','onlychild',4];
        
        foreach($list as $item){

            echo $item ."<br>";
        }
    ?>
<p>-------------------------------------------------------------------------------------------------------</p>
<?php
        $list=['ali',24,'student','onlychild',4];
        
        foreach($list as $key=>$item){

            echo $key.' :::> '.$item ."<br>";
        }
    ?>

</body>
</html>