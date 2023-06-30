<?php  
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  // If the request method is not POST, redirect to an error page or display an error message.
  header('HTTP/1.1 403 Forbidden');
  die("Access denied.");
}
require_once("./connectDB.php");
// Get data from form
$name = $_POST['name'];
if(isset($_POST["gender"]))
    $gender = $_POST['gender'];
$email = $_POST['email'];
$city = $_POST['city'];
//if any data fields is emtpy
if(empty($name) || empty($gender) || empty($email) || empty($city))
{
    die("Fill in all the fields") ;
}

// Check if email already exists in database
$sql = "SELECT * FROM Address WHERE email='$email'";
$result = pg_query($connection, $sql);

if (pg_num_rows($result) > 0) {
  echo "Error: User with this email already exists";
} else {
  // Insert data into database
  $sql = "INSERT INTO Address (name, gender, email, city) VALUES ('$name', '$gender', '$email', '$city')";

  if (pg_query($connection, $sql)) {
    header("Location: ../index.php");
  } else {
    echo "Error: " . $sql . "<br>" . pg_last_error();
  }
}
?>