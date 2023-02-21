<?php

if(isset($_FILES["image"])){

    if(file_exists($_FILES['image']['tmp_name'])){

        $path='uploads/';
        $path .=$_FILES['image']['name'];

        if(! is_dir('uploads')){
            mkdir('uploads');
        }
       

             if(move_uploaded_file($_FILES['image']['tmp_name'] , $path)){
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