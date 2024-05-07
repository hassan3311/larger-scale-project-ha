<?php
$csvFile = __DIR__ . "/data.csv";
$csvData = [];

if (($handle = fopen($csvFile, "r")) !== false) {
    while (($data = fgetcsv($handle)) !== false) {
        $csvData[] = $data;
    }
    fclose($handle);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSV Data Form</title>
</head>
<body>
    <h1>CSV Data Form</h1>
    <form action="process.php" method="post">
        <?php foreach ($csvData as $row) : ?>
            <label>First Name:</label>
            <input type="text" name="firstName[]"><br>

            <label>Last Name:</label>
            <input type="text" name="lastName[]"><br>

            <label>Phone:</label>
            <input type="text" name="phone[]"><br>
        <?php endforeach; ?>

    

        <input type="submit" value="Submit">
    </form>
</body>
</html>
