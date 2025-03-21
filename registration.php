 <?php
   
    $host = 'localhost';
    $dbname = 'db';
    $username = 'root';
    $password = '';

    
    $conn = mysqli_connect($host, $username, $password, $dbname);

    
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    
    $name = mysqli_real_escape_string($conn, $name);
    $contact = mysqli_real_escape_string($conn, $contact);
    $address = mysqli_real_escape_string($conn, $address);
    $email = mysqli_real_escape_string($conn, $email);
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    
    $sql = "INSERT INTO registration (name, mobile, address, email, username, password) VALUES ('$name', '$contact', '$address','$email','$username', '$password')";

    if (mysqli_query($conn, $sql)) {
        echo "Data inserted successfully!";
        // header("Location: login.html");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    
    mysqli_close($conn);

 ?>


