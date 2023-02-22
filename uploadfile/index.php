<?php

if(isset($_FILES["image"])){

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
             }else{
                  echo 'error';
                }
        
        }else{
            echo 'error';
        }

}else{
    echo 'error';
}

?>