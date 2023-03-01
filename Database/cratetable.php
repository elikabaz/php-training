<?php
$link=mysqli_connect('localhost:3306','root','');

if(!$link){
    echo 'connecion is:'. mysqli_connect_error();
    die();
}
echo 'connected';


mysqli_select_db($link , 'zaribdb');

$SQL = "create table users (id INT AUTO_INCREMENT ,
                            email VARCHAR(100) NOT NULL ,
                            password VARCHAR(100) NOT NULL, 
                            Primery key)";

if($result=mysqli_query($link,$SQL)){

    echo 'success';

}else{

    echo 'connecion is:'. mysqli_error($link);
}
mysqli_close($link);
?>