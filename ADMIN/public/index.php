<?php
require_once 'db.php';

if (isset($_POST['calc'])) {
    $name = mysqli_real_escape_string($conn, htmlspecialchars($_POST['name']));
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $number_modules = intval($_POST['number_modules']);
    $notes = $_POST['note_of_modules'] ?? [];

    $total = 0;
    $average = 0;

    if (!empty($notes) && count($notes) == $number_modules) {
        foreach ($notes as $note) {
            $total += floatval($note);
        }
        $average = $total / $number_modules;
    }

    echo "<div class='output'>";
    echo "<h2>Hello, $name!</h2>";
    echo "<p>Total Notes: $total</p>";
    echo "<p>Average: " . number_format($average, 2) . "</p>";
    echo $average >= 10 ? "<p class='success'>Succeeded.</p>" : "<p class='fail'>Failed.</p>";
    echo "</div>";

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO etudents (etudent, password, moyen) VALUES ('$name', '$password', $average)";

    try {
        mysqli_query($conn, $sql);
        echo "<p class='success'>Successfully added.</p>";
    } catch (mysqli_sql_exception $e) {
        echo "<p class='fail'>Failed to add.</p>";
        echo "<p class='fail'>Failed to add.</p>";
    }

    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROGRES-lite</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Calculate Notes</h1>
        <form id="usernote" action="" method="post">
            <div class="form-group">
                <label for="name">Your Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required minlength="8">
            </div>
            <div class="form-group">
                <label for="number_of_modules">Number of Modules:</label>
                <input type="number" id="number_of_modules" name="number_modules" required min="1" max="9">
            </div>
            <div id="modulesContainer"></div>
            <button type="submit" name="calc">Calculate</button>
        </form>
        <div class="output" id="outputSection" style="display: none;"></div>
    </div>
    <script src="script.js"></script> 
</body>
</html>
