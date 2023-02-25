<?php
require_once('../helpers/db.php');////import db

if(isset($_FILES["image"])){
    // die(json_encode($_FILES['image'] ,JSON_PRETTY_PRINT));

    if(file_exists($_FILES['image']['tmp_name'])){

        $path='uploads/';
        $path .=$_FILES['image']['name'];

        if(! is_dir('uploads')){
        ////if uploads directiry is not exist create this directory

            mkdir('uploads');
        }
             if(move_uploaded_file($_FILES['image']['tmp_name'] , $path)){
            /////just work at $_POST/////move files to destination address

                echo $path;

                $query = $conn->prepare("INSERT INTO pictures (name, created_at) VALUES (?, ?)");////be ready to execute query

                $query->bind_param("ss", $_FILES['image']['name'] , date("Y/m/d"));////bind sql query

                $result=$query->execute();

                echo $result ? 'success' :'error';

             }else{
                  echo 'upload error';
                }
        
        }else{
            echo 'file not found';
        }

}else{
    echo 'error';
}

?>