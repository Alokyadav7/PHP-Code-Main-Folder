<?php
// Start the session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: login1.php");
}

// Display the dashboard
echo "Welcome, " . $_SESSION['username'] . "!";

?>
