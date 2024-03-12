<!-- index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sales Management System</title>
    <link rel="stylesheet" href="lib/css/style.css">
</head>
<body>
    <div class="container">
        <h2>Sales List</h2>
        <a href="add_sale.php">Add New Sale</a>
        
        <!-- Search form -->
        <form action="index.php" method="GET">
            <label for="month">Select a month:</label>
            <select name="month" id="month">
                <option value="">All</option>
                <option value="01">January</option>
                <option value="02">February</option>
                <option value="03">March</option>
                <option value="04">April</option>
                <option value="05">May</option>
                <option value="06">June</option>
                <option value="07">July</option>
                <option value="08">August</option>
                <option value="09">September</option>
                <option value="10">October</option>
                <option value="11">November</option>
                <option value="12">December</option>
            </select>
            <button type="submit">Search</button>
        </form>
        
        <table>
            <tr>
                <th>Date</th>
                <th>Amount</th>
                <th>Action</th>
            </tr>
            <?php
            // Include database connection file
            include_once "include/config.php";

            // Fetch sales data based on search query
            $sql = "SELECT * FROM sales";
            if(isset($_GET['month']) && !empty($_GET['month'])) {
                $month = $_GET['month'];
                $sql .= " WHERE MONTH(date) = '$month'";
            }
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['date'] . "</td>";
                    echo "<td>" . $row['amount'] . "</td>";
                    echo "<td>";
                    echo "<a href='edit_sale.php?sales_id=" . $row['sales_id'] . "'><img src='images/edit_icon.png' alt='Edit'></a>";
                    echo " | ";
                    echo "<a href='delete_sale.php?sales_id=" . $row['sales_id'] . "'><img src='images/delete_icon.png' alt='Delete'></a>";
                    echo "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='3'>No sales data found</td></tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>
