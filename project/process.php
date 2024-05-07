<?php
$csvFile = __DIR__ . "/data.csv";

if (($handle = fopen($csvFile, "r")) !== false) {
    $data = fgetcsv($handle); // Skip the header row

    if ($data !== false) {
        list($firstName, $lastName, $phone) = $data;
    }

    fclose($handle);
} else {
    die("Error opening CSV file");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Auto-Fill Form</title>
</head>
<body>
    <h1>Auto-Fill Form</h1>
    <form action="process.php" method="post">
        <label for="firstName">First Name:</label>
        <input type="text" name="firstName" value="<?= $firstName ?>">
        <br>
        <label for="lastName">Last Name:</label>
        <input type="text" name="lastName" value="<?= $lastName ?>">
        <br>
        <label for="phone">Phone:</label>
        <input type="text" name="phone" value="<?= $phone ?>">
        <br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
