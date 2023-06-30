<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  // If the request method is not POST, redirect to an error page or display an error message.
  header('HTTP/1.1 403 Forbidden');
  die("Access denied.");
}
include_once("./connectDB.php");
$id=$_POST['id'];
$name=$_POST['name'];
$email=$_POST['email'];
$city=$_POST['city'];
$gender=$_POST['gender'];
if(!empty($name) && !empty($email) && !empty($city) && !empty($gender))
{

  $query="UPDATE Address SET name=$1,email=$2,gender=$3,city=$4 where id=$5";
  $result=pg_query_params($connection,$query,array($name,$email,$gender,$city,$id));
  if ($result) {
      header("Location: ../index.php");
  
    } else {
      echo "Error updating record: ";
    }
}
else
{
  header("Location: ../index.php");
}
?>