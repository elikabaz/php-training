<?php
$link=mysqli_connect('localhost:3306','root','');

if(!$link){
    echo 'connecion is:'. mysqli_connect_error();
    die();
}
echo 'connected';

// $SQL= 'CREATE DATABASE test23';

$SQL = 'CREATE TABLE users (id INT AUTO_INCREMENT ,email VARCHAR PRIMARY KEY

$result=mysqli_query($link,$SQL);
if($result){
    echo 'successfulll';
}else{
    echo 'connecion is:'. mysqli_error($link);
}


mysqli_close($link);
?>