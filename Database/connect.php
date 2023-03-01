<?php
$connect=mysqli_connect('localhost:3306','root','');

if(!$connect){
    echo 'connection is:'. mysqli_connect_error();
    die();
}
echo 'connected';
mysqli_close($connect);
?>