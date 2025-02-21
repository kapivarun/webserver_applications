<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputString = trim($_POST["inputString"]); 

    // Check if the string contains "PHP"
    $containsPHP = (strpos($inputString, "PHP") !== false) ? "The string contains 'PHP'." : "The string does not contain 'PHP'.";

    // Replace spaces with underscores
    $modifiedString = str_replace(" ", "_", $inputString);

    // Convert to uppercase
    $modifiedString = strtoupper($modifiedString);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>String Manipulation</title>
</head>
<body>
    <form method="POST">
        <label>Enter a string:</label>
        <input type="text" name="inputString" required>
        <button type="submit">Submit</button>
    </form>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST") : ?>
        <p><?php echo $containsPHP; ?></p>
        <p>Modified String: <?php echo $modifiedString; ?></p>
    <?php endif; ?>
</body>
</html>
