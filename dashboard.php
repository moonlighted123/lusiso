<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lusiso Inventory System</title>
  <style>
    /* Common styles */
    body {
      margin: 0;
      font-family: Arial, sans-serif;
    }

    /* Sidebar layout */
    .sidebar {
      height: 100%;
      width: 200px;
      position: fixed;
      top: 0;
      left: 0;
      background-color: #333;
      color: #fff;
      overflow-x: hidden;
      padding-top: 60px;
      box-sizing: border-box;
    }

    /* Menu button styles */
    .menu-btn {
      display: none; /* Hide menu button */
    }

    /* Navbar styles */
    .navbar {
      background-color: #C23939;
      color: #fff;
      padding: 10px;
      text-align: right;
    }

    /* Body styles */
    .body-content {
      margin-left: 220px; /* Adjust as needed */
      padding: 20px;
      color: #333;
    }

    /* Button styles */
    .sidebar-btn {
      display: block;
      width: 100%;
      padding: 10px 20px;
      text-align: left;
      background-color: #444;
      border: none;
      color: #fff;
      cursor: pointer;
      margin-bottom: 5px;
      text-decoration: none; /* Remove underline */
    }

    .sidebar-btn:hover {
      background-color: #555;
    }

    /* Logout button styles */
    .logout-btn {
      background-color: #C23939; 
      color: #fff;
      padding: 10px 20px;
      border: none;
      cursor: pointer;
      text-decoration: none;
      transition: background-color 0.3s;
    }

    .logout-btn:hover {
      background-color: #d32f2f; /* Darker red on hover */
    }
  </style>
</head>
<body>
  <!-- Sidebar -->
  <div class="sidebar" id="sidebar">
    <a href="dashboard.php" class="sidebar-btn">Dashboard</a>
    <a href="product.php" class="sidebar-btn">Product</a>
    <a href="sales.php" class="sidebar-btn">Sales</a>
    <a href="report.php" class="sidebar-btn">Report</a>
    <a href="user_management.php" class="sidebar-btn">User Management</a>
  </div>

  <!-- Navbar -->
  <div class="navbar">
    <a href="logout.php" class="logout-btn" onclick="logout()">Log Out</a>
  </div>

  <!-- Body Content -->
  <div class="body-content">
    <h1>LUSISO INVENTORY SYSTEM</h1>
    <p>This is the main content area where you can display inventory-related information.</p>
  </div>

  <!-- JavaScript -->
  <script>
    function logout() {
      // Add logout functionality here
      alert("Logging out...");
    }
  </script>
</body>
</html>
