<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dayNumber = $_POST["day"];

    switch ($dayNumber) {
        case 1: echo "Monday"; break;
        case 2: echo "Tuesday"; break;
        case 3: echo "Wednesday"; break;
        case 4: echo "Thursday"; break;
        case 5: echo "Friday"; break;
        case 6: echo "Saturday"; break;
        case 7: echo "Sunday"; break;
        default: echo "Invalid input! Please enter a number between 1 and 7.";
    }
}
?>
<form method="post">
    Enter a number (1-7): <input type="number" name="day" required>
    <input type="submit">
</form>
