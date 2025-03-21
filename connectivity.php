<?php
// include(conn.php); 
// $host = 'localhost';
// $username = 'root';
// $password = '';
// $db='db';
// $conn = mysqli_connect($host, $username, $password, $db);
// if(! $conn)
// {
//     die('could not connect: ' . $mysqli_error());
// }

include('conn.php');

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST['username'];
    $password = $_POST['password'];


    $sql = "SELECT * FROM registration WHERE username = '$username' AND password ='$password'";
   $result = $conn->query($sql);
    $row=mysqli_fetch_array($result);
    

    if($result->num_rows>0) {
        if($row["username"]=="gaurav"){
            echo"Admin Login";
            header("Location:dashborad.php");

        }else{
            echo ' Login successful!';
            header("Location:bookingform.html");
        } 
    }
    else{
        echo 'Invalid username or password';
    }

//echo'connected successfully';
 mysqli_close($conn);
}
?>
