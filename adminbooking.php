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
    <link rel="stylesheet" href="./adminbooking.css">
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
        <h2>Event booking details</h2>
        <p>Here is all details of Event Bookings.. </p>
        <a href="./delete.html"><button class="delete" >Delete</button></a>
        
        <table>
            <tr>
                <th>ID</th>
                <th>Customer Name</th>
                <th>Mobile Number</th>
                <th>Event Name</th>
                <th>Event Date</th>
                <th>Event Time</th>
                <th>Event Location</th> 
                <th>Event Description</th> 
            </tr>
            
            <tr>
            <?php
                    while ($row = mysqli_fetch_assoc($result)) 
                    {
            ?>
        
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['mobile']; ?></td>
                        <td><?php echo $row['event_name']; ?></td>
                        <td><?php echo $row['event_date']; ?></td>
                        <td><?php echo $row['event_time']; ?></td>
                        <td><?php echo $row['event_location']; ?></td>
                        <td><?php echo $row['describe_event']; ?></td>

            </tr>      
            <?php
                    }
            ?>
        
    </table>
    </div>
</body>
</html>



<!-- $sql = "SELECT  `name`, `mobile`, `event_name`, `event_date`, `event_time`, `event_location`, `describe_event` FROM `registration` WHERE 1;";
$result = $mysqli->query($sql);
 -->