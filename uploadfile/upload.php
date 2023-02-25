
<?php
require_once('../helpers/db.php');
?>

<html>
<head>
</head>
<body>
    <form action="/uploadfile/index.php" method="post" enctype="multipart/form-data">

    <form action="./index.php" method="post" enctype="multipart/form-data">
        <input type="file" name="image">

        <button type="submit">upload</button>
    </form>
</body>
</html>


