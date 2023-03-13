<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Registration Successful</h2>
	<p>Thank you for registering!</p>

    <table>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Profile Photo</th>
    </tr>

    <?php 
        $file = fopen('users.csv', 'r');

        while(($data = fgetcsv($file))!==false){
            echo "<tr>";
            echo "<td>" . $data[0] . "</td>";
            echo "<td>" . $data[1] . "</td>";
            echo "<td><img src='uploads/" . $data[2] . "' width='100'></td>";
            echo "</tr>";
        }

        fclose($file);
    ?>
    </table>

</body>
</html>