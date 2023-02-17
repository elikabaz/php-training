<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$text='Lorem ipsum dolor, sit amet consectetur adipisicing elit';
var_dump(strlen($text));

?>
<hr>
<?php

$text='Lorem ipsum dolor, sit amet consectetur adipisicing elit';
echo str_word_count($text);

?>
<hr>
<?php

$text='Lorem ipsum dolor, sit amet consectetur adipisicing elit';
echo strpos($text , 'dolor');

?>
<hr>
<?php

$text='Lorem ipsum dolor, sit amet consectetur adipisicing elit';
echo str_replace('amet' , 'apple' , $text);

?>
</body>
</html>