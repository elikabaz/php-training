<?php
function request($field) {
    return isset($_REQUEST[$field]) && $_REQUEST[$field] != "" ? trim($_REQUEST[$field]) : null;
}

function has_error($field) {
    global $errors;

    return isset($errors[$field]);
}

function get_error($field) {
    global $errors;

    return has_error($field) ? $errors[$field] : null;
}

$errors = [];
$succses=false;


if($_SERVER['REQUEST_METHOD']=='post'){
    $email=request('email');
    $password= $email=request('password');

    if(is_null($email)){
        $errors['email']='can not empty';
    }

    if(is_null($password)){
     $errors['password']='can not empty';

    }elseif(strlen($password) < 6){/////this is rull about characters
    $errors['password']='can not lower than six character';

    }

    if(! is_null($email) && ! is_null($password) && strlen($password)>=6){
        $link=mysqli_connect('localhost:3306','root','');

            if(! $link){
                echo 'could not connect: ' . mysqli_connect_error();
                exit;
            }

            mysqli_select_db($link ,'test23');

            $SQL = "INSERT INTO users ('{email}' , '{password}') values ('email@gmail.com' , '1234568')";
           
            if($result= mysqli_query($link,$SQL) ){
                $succses=true;
            }else{
                echo 'error:' . mysqli_error($link);
                exit;
            }
        }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register page</title>
</head>
<body>
    <h3>Register page</h3>
    <br>
    <form action="register.php" method="post">
        <label for="email">email:</label>
        <input type="email" name="email"> <br>
        <?php if(has_error('email')) { ?>
            <span><?php echo get_error('email'); ?></span><br>
        <?php } ?>
       
        <label for="password">pasword:</label>
        <input type="password" name="password">
        <?php if(has_error('password')) { ?>
            <span><?php echo get_error('password'); ?></span><br>
        <?php } ?>
        <br>
        <br>
        <button type="submit">register</button>
    </form>
</body>
</html>