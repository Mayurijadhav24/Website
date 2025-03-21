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