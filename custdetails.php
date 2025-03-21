<?php
   
   $host = 'localhost';
   $dbname = 'db';
   $username = 'root';
   $password = '';

   
   $conn = mysqli_connect($host, $username, $password, $dbname);

   
   if (!$conn) {
       die("Connection failed: " . mysqli_connect_error());
   }

    $query = "SELECT * FROM registration"; // Replace 'your_table' with your actual table name
    $result = mysqli_query($conn,$query);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="custdetails.css">
    <title>Admin Dashboard</title>
</head>
<body>
    <body>
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Contact Messages</title>
            <style>
                table {
                    border-collapse: collapse;
                    width: 100%;
                    margin-top: 20px;
                }
        
                th, td {
                    border: 1px solid #ddd;
                    padding: 8px;
                    text-align: left;
                }
        
                th {
                    background-color: #f2f2f2;
                }
            </style>
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
        <h2>Customer details</h2>
        <p>Here is all details of customers </p>
        <table>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Mobile Number</th>
              <th>Email id</th>
              <th>Address</th>
              <th>Username</th>
              <th>Password</th>
            </tr>
            
        <tr>
            <?php
                    while ($row = mysqli_fetch_assoc($result)) 
                    {
            ?>
        
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['mobile']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['address']; ?></td>
                        <td><?php echo $row['username']; ?></td>
                        <td><?php echo $row['password']; ?></td>
                        <!-- <td><?php echo $row['describe_event']; ?></td> -->

            </tr>      
            <?php
                    }
            ?>
          </table>
    </div>

</body>
</html>
