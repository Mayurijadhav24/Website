<?php
   
   $host = 'localhost';
   $dbname = 'db';
   $username = 'root';
   $password = '';

   
   $conn = mysqli_connect($host, $username, $password, $dbname);

   
   if (!$conn) {
       die("Connection failed: " . mysqli_connect_error());
   }

   
   $username = $_POST['username'];
   $event_name = $_POST['event_name'];
   $event_date = $_POST['event_date'];
   $event_location = $_POST['event_location'];
   $event_time = $_POST['event_time'];
   $describe_event = $_POST['describe_event'];


   $username = mysqli_real_escape_string($conn, $username);
   $event_name = mysqli_real_escape_string($conn, $event_name);
   $event_date = mysqli_real_escape_string($conn, $event_date);
   $event_location = mysqli_real_escape_string($conn, $event_location);
   $event_time = mysqli_real_escape_string($conn, $event_time);
   $describe_event = mysqli_real_escape_string($conn, $describe_event);

   $sql = "SELECT * FROM registration WHERE username = '$username'";
   $result = $conn->query($sql);

    if($result->num_rows>0) {
   $sql = "UPDATE registration SET event_name = '$event_name', event_date='$event_date', event_time='$event_time', event_location ='$event_location', describe_event='$describe_event' WHERE username = '$username'";

   if (mysqli_query($conn, $sql)) {
       echo "Event Booked..";
    //    header("Location: login.html");
   } else {
       echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   }
    } else {
        echo "Enter Valid Username!!";
    }
   
   mysqli_close($conn);

?>


