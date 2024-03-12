<!-- delete_sale.php -->
<?php
include_once "include/config.php";

if(isset($_GET['sales_id'])) {
    $sales_id = $_GET['sales_id'];

    mysqli_query($conn, "DELETE FROM sales WHERE sales_id=$sales_id");

    header("Location:index.php");
}
?>
