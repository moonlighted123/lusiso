<?php
include_once "include/config.php";

// Initialize variables
$sales_id = null;
$date = "";
$amount = "";

if(isset($_GET['sales_id'])) {
    $sales_id = $_GET['sales_id'];

    $result = mysqli_query($conn, "SELECT * FROM sales WHERE sales_id=$sales_id");

    // Check if query was successful
    if($result === false) {
        echo "Error: " . mysqli_error($conn);
    } else {
        // Check if data was found
        if(mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                $date = $row['date'];
                $amount = $row['amount'];
            }
        } else {
            echo "No data found for the specified ID.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Sale</title>
    <link rel="stylesheet" href="lib/css/style.css">
</head>
<body>
    <div class="container">
        <h2>Edit Sale</h2>
        <form action="update_sale.php" method="post">
            <input type="hidden" name="sales_id" value="<?php echo $sales_id ?>">
            <label>Date:</label>
            <input type="date" name="date" value="<?php echo $date ?>" required><br>
            <label>Amount:</label>
            <input type="text" name="amount" value="<?php echo $amount ?>" required><br>
            <input type="submit" value="Enter">
        </form>
    </div>
</body>
</html>
