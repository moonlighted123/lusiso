<!-- process_sale.php -->
<?php
include_once "include/config.php";

if(isset($_POST['date']) && isset($_POST['amount'])) {
    $date = $_POST['date'];
    $amount = $_POST['amount'];

    mysqli_query($conn, "INSERT INTO sales(date, amount) VALUES('$date','$amount')");

    header("Location:index.php");
}
?>
