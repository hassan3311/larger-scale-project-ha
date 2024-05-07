<?php
$uploadDirectory = "csv-folder/";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_FILES["csvFile"])) {
        $csvFile = $_FILES["csvFile"];
        $fileType = strtolower(pathinfo($csvFile["name"], PATHINFO_EXTENSION));
        if ($fileType === "csv") {
            $uploadPath = $uploadDirectory . basename($csvFile["name"]);
            if (move_uploaded_file($csvFile["tmp_name"], $uploadPath)) {
                $csvData = array_map('str_getcsv', file($uploadPath));
                if (!empty($csvData)) {
                    $firstName = $csvData[0][0];
                    $lastName = $csvData[0][1];
                    $phone = $csvData[0][2];
                }
            } 
        } else {
            echo "Invalid file.";
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h1>upload file</h1>
    <form method="POST" enctype="multipart/form-data">
        <input type="file" name="csvFile" accept=".csv">
        <input type="submit" value="Upload CSV">
    </form>

    <?php if (!empty($firstName) && !empty($lastName) && !empty($phone)): ?>
        <form method="POST" action="result.php">
            <label for="firstName">First Name:</label>
            <input type="text" name="firstName" value="<?php echo $firstName; ?>"><br>
            <label for="lastName">Last Name:</label>
            <input type="text" name="lastName" value="<?php echo $lastName; ?>"><br>
            <label for="phone">Phone:</label>
            <input type="text" name="phone" value="<?php echo $phone; ?>"><br>
            <input type="submit" value="Submit">
        </form>
    <?php endif; ?>
</body>
</html>
