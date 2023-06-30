<?php
if (isset($_REQUEST["submit"])) {

    $username = $_REQUEST["username"];
    $password = $_REQUEST["password"];
    if ($username == "admin" && $password == "admin") {
        session_start();
        $_SESSION['username'] = $username;
        header("Location: ./index.php");
    } else {
        echo "<h1>invalid credentials</h1>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./loginstyle.css">
</head>

<body>
    <h1>Login</h1>
    <form method="post" action="<?= $_SERVER["PHP_SELF"] ?>">
        <label for="username">Username:</label>
        <input type="text" name="username">
        <label for="username">password:</label>
         <input type="password" name="password" />
        <input type="submit" name="submit" value="submit">

    </form>
</body>

</html>