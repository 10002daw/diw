<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <?php
        if ( $_POST ) {
    ?>
    <table border="1">
        <tr>
            <td>Username</td>
            <td><?=$_POST[username]?></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><?=$_POST[pw]?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?=$_POST[email]?></td>
        </tr>
        <tr>
            <td>Mobile number</td>
            <td><?=$_POST[mobile_number]?></td>
        </tr>
        <tr>
            <td>Number of ukuleles</td>
            <td><?=$_POST[number]?></td>
        </tr>
        <tr>
            <td>Favourite ukulele</td>
            <td><?=$_POST[favourite_uke]?></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td><?=$_POST[gender]?></td>
        </tr>
        <tr>
            <td>Favourite color</td>
            <td><?=$_POST[color]?></td>
        </tr>
    </table>
    <?php
        }
    ?>
</body>
</html>