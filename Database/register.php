<?php
$errors=[];
//////in this function we want check all the data is set or no (not important post/get)
function request($data){
    return isset($_REQUEST[$data]) && $_REQUEST[$data] ==""  ?  trim($_REQUEST[$data]):null ;
}

function has_error($data){
    global $errors;///we cant use arrow function cuse all the time this val is empty
    return isset($errors[$data]);
}

function get_error($data){
    global $errors;
    return has_error($data) ? $errors[$data]:null;
}


if($_SERVER['REQUEST_METHOD']=='post'){
    $email=request('email');
    $password= $email=request('password');
    var_dump($email);

    if(is_null($email)){
        $errors['email']='Dose not empty';
    }

    if(is_null($password)){
     $errors['password']='Dose not empty';

    }elseif(strlen($password) > 6){/////this is rull about characters

    $errors['password']='Dose not lower than six character';
    }

    if(! is_null($email) && ! is_null($password)&& strlen($password)>=6){
        echo'save user into database';
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
            <span><?php echo 'get_error(email)'; ?></span><br>
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