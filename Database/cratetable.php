<?php
$link=mysqli_connect('localhost:3306','root','');

if(!$link){
    echo 'connecion is:'. mysqli_connect_error();
    die();
}
echo 'connected';

mysqli_select_db($link , 'zarindb');

$SQL = "CREATE TABLE users (id INT AUTO_INCREMENT ,
                            email VARCHAR(30) NOT NULL ,
                            password VARCHAR(30) NOT NULL, 
                            PRIMARY KEY(id))";

if($result=mysqli_query($link,$SQL)){

    echo 'success';

}else{

    echo 'connecion is:'. mysqli_error($link);
}
mysqli_close($link);
?>