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

        <tr>
            <th colspan="2">Subscription information</th>
        </tr>
        <tr>
            <td>Subscription type</td>
            <td><?=$_POST[sub_type]?></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><?=$_POST[password]?></td>
        </tr>

		<tr>
            <th colspan="2">Billing details</th>
        </tr>
        <tr>
            <td>Card type</td>
            <td><?=$_POST[card_type]?></td>
        </tr>
        <tr>
            <td>Card number</td>
            <td><?=$_POST[card_number]?></td>
        </tr>
        <tr>
            <td>Discount</td>
            <td><?=$_POST[discount]?></td>
        </tr>
        <tr>
            <td>Donation</td>
            <td><?=$_POST[donation]?></td>
        </tr>

        <tr>
            <th colspan="2">Feedback</th>
        </tr>
        <tr>
            <td>Feedback</td>
            <td><?=$_POST[feedback]?></td>
        </tr>

    </table>
    <?php
        }
    ?>
</body>
</html>