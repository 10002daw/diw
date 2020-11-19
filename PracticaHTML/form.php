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
            foreach ( $_POST as $key => $value ) {
                echo $key.": ".$value."<br>";
            }
        }

        if ( $_POST ) {
    ?>
    <table border="1">
        <tr>
            <th colspan="2">Personal information</th>
        </tr>
        <tr>
            <td>Title</td>
            <td><?=$_POST[title]?></td>
        </tr>
        <tr>
            <td>First name</td>
            <td><?=$_POST[first_name]?></td>
        </tr>
        <tr>
            <td>Last name</td>
            <td><?=$_POST[last_name]?></td>
        </tr>
        <tr>
            <td>Birthdate</td>
            <td><?=$_POST[birthdate]?></td>
        </tr>
        <tr>
            <td>City</td>
            <td><?=$_POST[city]?></td>
        </tr>
        <tr>
            <td>Postcode</td>
            <td><?=$_POST[postcode]?></td>
        </tr>
    </table>
    <?php
        }
    ?>
</body>
</html>