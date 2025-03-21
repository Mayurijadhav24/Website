<?php
   
   $host = 'localhost';
   $dbname = 'db';
   $username = 'root';
   $password = '';

   
   $conn = mysqli_connect($host, $username, $password, $dbname);

   
   if (!$conn) {
       die("Connection failed: " . mysqli_connect_error());
   }

    $sqlCount = "SELECT COUNT(*) as total FROM registration";
    $resultCount = $conn->query($sqlCount);
    $rowCount = $resultCount->fetch_assoc();
    $total_entries = $rowCount['total'];

    $sqlbook = "SELECT COUNT(*) as book FROM registration WHERE event_name IS NOT NULL AND event_name != ''";
    $resultbook = $conn->query($sqlbook);
    $rowbook = $resultbook->fetch_assoc();
    $total_book = $rowbook['book'];


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./dashborad.css">
    <title>Admin Dashboard</title>
</head>
<body>

    <div id="dashboard">
        <h1>Admin Dashboard</h1>
    </div>

    <div id="navbar">
        <ul>
            <a href="./dashborad.php">Admin Dashboard</a>
            <a href="./adminbooking.php">Event Bookings</a>
            <a href="./custdetails.php">Customers Details </a>
            <a href="./custreview.html">Customer Review</a>
        </ul>
    </div>

    <div id="content">
        <!-- Your content goes here -->
        <h2>Admin Dashboard</h2>
        <p>Here is your Overview of Event Management</p>
        <div class="dashboard-box">
            <h3>Total Number of Bookings</h3>
            <?php
                    echo $total_book;
            ?>
        </div>
        <div class="dashboard-box">
            <h3>Total Number of Customers</h3>
            <?php
                    echo $total_entries;
            ?>
        </div>
    </div>
</body>
</html>
