<?php 
session_start(
[
    'save_path' => __DIR__. '/../sessions' ,
    'name' =>'eli_khabaz'
]
);
$_SESSION['stb']=true;

var_dump($_SESSION['stb']);
?>