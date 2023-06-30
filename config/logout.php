<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    // If the request method is not POST, redirect to an error page or display an error message.
    header('HTTP/1.1 403 Forbidden');
    die("Access denied.");
  }
    if(isset($_REQUEST["logout"])){
        session_start();
        session_destroy();
        header("Location: ../login.php",true,301);
    }

?>
