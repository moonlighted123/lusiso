<!-- add_sale.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add New Sale</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h2>Add New Sale</h2>
        <form action="process_sale.php" method="post">
            <label>Date:</label>
            <input type="date" name="date" required><br>
            <label>Amount:</label>
            <input type="text" name="amount" required><br>
            <input type="submit" value="Add Sale">
        </form>
    </div>
</body>
</html>
