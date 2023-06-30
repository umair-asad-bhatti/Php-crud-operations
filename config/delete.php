<?php 
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    // If the request method is not POST, redirect to an error page or display an error message.
    header('HTTP/1.1 403 Forbidden');
    die("Access denied.");
  }
include_once("./connectDB.php");//including the database connection
$id = $_POST['id'];

// Execute DELETE statement
$result = pg_query($connection, "DELETE FROM Address WHERE id = $id");

// Check for errors
if (!$result) {
    die("Error in SQL query: " . pg_last_error());
}

// Redirect to previous page
header("Location: ../index.php");
?>