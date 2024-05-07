<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            width: 32%;
        }
    </style>
</head>

<body>
    <form action="upload.php" method="get">
        Name: <input type="text" name="name" id="name">
        <br>
        Email: <input type="text" name="phone" id="phone">
        <br>
        <input type="submit" value="Submit">
    </form>

    <?php
    include("dbconnect.php");

    $query = "SELECT * FROM users";
    $result = $con->query($query);

    if ($result->num_rows > 0) {
        echo "<h2>DATA FROM DATABASE</h2>";
        while ($rows = $result->fetch_assoc()) {
            $id = $rows['id'];
            $name = $rows['name'];
            $phone = $rows['phone'];

            echo "
            <form action='delet.php' method='post'>
                <table>
                    <tr>
                        <td>$id</td>
                        <td>$name</td>
                        <td>$phone</td>
                        <td>
                            <input type='hidden' name='delete_id' value='$id'>
                            <input type='submit' value='Delete'>
                        </td>
                        
                    </tr>
                </table>
            </form>";

            echo "
            <form action='update.php' method='post'>
                <table>
                    <tr> 
                         <input type='hidden' name='update' value='$id'>
                         <input type='submit' value='Update'>
                        </td>
                    </tr>
                </table>
            </form>";
        }
    }
    ?>
</body>

</html>
