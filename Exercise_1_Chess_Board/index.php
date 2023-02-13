<!-- Form to capture user input for number of columns and rows -->
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <!-- Label for the input field -->
    <label for="dim">Number of Columns and Rows:</label>
    <!-- Input field to capture number of columns and rows -->
    <input type="text" id="dim" name="dim">

    <!-- Submit button -->
    <input type="submit" value="Submit">
</form>

<?php
// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Store the value of number of columns and rows
    $dim = $_POST["dim"];

    // Create the table
    echo "<table>";
    for ($i = 0; $i < $dim; $i++) {
        echo "<tr>";
        for ($j = 0; $j < $dim; $j++) {
            // Alternate between black and white background colors
            if (($i + $j) % 2 == 0) {
                echo "<td bgcolor='black' width='50' height='50'></td>";
            } else {
                echo "<td bgcolor='white' width='50' height='50'></td>";
            }
        }
        echo "</tr>";
    }
    echo "</table>";
}
?>