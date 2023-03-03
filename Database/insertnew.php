<?php
////////create a table in one page and fetch data from database
    $link = mysqli_connect('localhost:3306' , 'root' , '');
    if(! $link) {
        echo 'could not connect : ' . mysqli_connect_error();
        exit;
    }

    mysqli_select_db($link , 'zarindb');

    $SQL = "select * from users ORDER by id DESC ";

    if( $result = mysqli_query($link , $SQL) ) {
    } else {
        echo 'error : ' . mysqli_error($link);
        exit;
    }


?>

<html>
    <head>
        <title>لیست یوزرها</title>
    </head>
    <body>
        <h3>لیست یوزرها </h3>
        <table>
            <thead>
                <tr>
                    <th>userid</th>
                    <th>email</th></th>
                    <th>password</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($user = mysqli_fetch_assoc($result) ) { ?>
                    <tr>
                        <td><?= $user['id'] ?></td>
                        <td><?= $user['email'] ?></td>
                        <td><?= $user['password'] ?></td>
                    </tr>
                <?php } ?>

            </tbody>
        </table>
    </body>
</html>

