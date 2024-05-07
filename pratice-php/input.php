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
     
        }
        td{
            width:32%;
        }
    </style>
</head>

<body>
    <form action="upload.php" method="get">
        Name: <input type="text" name="name" id="name">
        <br>
        Email: <input type="email" name="email" id="email">
        <br>
        Password: <input type="password" name="pass" id="pass">
        <br>
        <input type="submit" value="Submit">
    </form>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "work";
    $connect = new mysqli($servername, $username, $password, $dbname);
    if ($connect->connect_error) {
        die($connect->connect_error);
    } 

    $query = "SELECT * FROM user where Name = 'Waqar Hussain'";
    $result = $connect->query($query);
    if ($result == True) {
        if ($result->num_rows > 0) {
            echo"<h2>DATA FROM DATABASE</h2>";
            while ($rows = $result->fetch_assoc()) {
                $id = $rows['ID'];
                $name = $rows['Name'];
                $email = $rows['Email'];
                $password = $rows['Password'];
                echo "
                <table>
                    </tr>
                    <tr>
                     <td>
                      $id
                     </td>
                     <td>
                      $name
                     </td>
                     <td>
                      $email
                     </td>
                     <td>
                      $password
                     </td>
                    </tr>
                      </table>";
            }

        }
    }
    ?>
</body>

</html>