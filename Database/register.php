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


if(isset($_REQUEST['submit'])){
    $email=request('email');
    $password=request('password');
    // die($email . $password);


    if(empty($email)){
        $errors['email']='can not empty';
    }

    if(empty($password)){
     $errors['password']='can not empty';

    }elseif(strlen($password) < 6){/////this is rull about characters
    $errors['password']='can not lower than six character';

    }

    if(!empty($email) && ! empty($password) && strlen($password)>=6){
        $link=mysqli_connect('localhost:3306','root','');

            if(! $link){
                echo 'could not connect: ' . mysqli_connect_error();
                exit;
            }

            mysqli_select_db($link ,'zarindb');

            $SQL = $link->prepare("INSERT INTO users (email , password) values (? , ?)");
            $SQL ->bind_param("ss", $email,$password);////bind sql query

            $result=$SQL->execute();
           
            if(!$result){
                echo 'error:' . mysqli_error($link);
                exit;
            }
            echo 'success';
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
        <button name="submit" type="submit">register</button>
    </form>
</body>
</html>