<?php
// Connect to the database
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database";

$a=mysqli_connect("localhost","root","");
$b=mysqli_select_db($a,"users");
$c="SELECT * FROM `data";
$d=mysqli_query($a,$c);
$e=mysqli_fetch_assoc($d);
print_r($e);


$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve the username and password from the form
$username = $_POST['username'];
$password = $_POST['password'];

// Prepare and execute the SQL query
$stmt = $conn->prepare("SELECT * FROM users WHERE username = SELECT * FROM `data`");
$stmt->bind_param("s", $username);
$stmt->execute();

// Check if the username exists in the database
$result = $stmt->get_result();
if ($result->num_rows == 0) {
    echo "Invalid username or password";
} else {
    // Compare the password to the hash in the database
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
        // Login successful, redirect to dashboard
        header("Location: dashboard.php");
    } else {
        echo "Invalid username or password";
    }
}

$stmt->close();
$conn->close();
?>
