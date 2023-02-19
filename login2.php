<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>getData</title>
</head>
<body>
    
<!--that just a form-->
<form action="/login2.php" method="post">

  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" ><br>

  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" ><br>

  <label for="lname">password:</label><br>
  <input type="text" id="password" name="password" ><br><br>

  <input type="submit" value="Submit">

        </form> 

</body>
</html>

<?php
///get data with superglobal var ($_post)

if(isset($_GET['fname']) && isset($_GET['lname']) && isset($_GET['submit'])){

    $fname=$_GET['fname'];
    $fname=$_GET['lname'];
    $submit=$_GET['submit'];

}else{
    
    echo 'error';
}

?>
