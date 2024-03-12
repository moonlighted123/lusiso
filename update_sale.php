<?php
include_once "include/config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate input
    if(isset($_POST['sales_id']) && isset($_POST['date']) && isset($_POST['amount'])) {
        $sales_id = $_POST['sales_id'];
        $date = $_POST['date'];
        $amount = $_POST['amount'];

        // Sanitize inputs to prevent SQL injection
        $sales_id = mysqli_real_escape_string($conn, $sales_id);
        $date = mysqli_real_escape_string($conn, $date);
        $amount = mysqli_real_escape_string($conn, $amount);

        // Debugging output
        echo "Sales ID: " . $sales_id . "<br>";
        echo "Date: " . $date . "<br>";
        echo "Amount: " . $amount . "<br>";

        // Update sale in database
        $sql = "UPDATE sales SET date='$date', amount='$amount' WHERE sales_id='$sales_id'";

        // Debugging output
        echo "SQL Query: " . $sql . "<br>";

        if ($conn->query($sql) === TRUE) {
            // Redirect back to sales list page
            header("Location: index.php");
            exit();
        } else {
            echo "Error updating record: " . $conn->error;
        }
    } else {
        echo "Invalid input data.";
    }
} else {
    // Redirect user if accessed directly without POST request
    header("Location: index.php");
    exit();
}
?>
