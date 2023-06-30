<?php
include_once("./config/common.php");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./customFormstyle.css">
    <title>Add a Record</title>

</head>

<body>
    <h1>Add a Record</h1>
    <form method="post" action="./config/add.php">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">

        <label for="gender">Gender:</label>
        <select name="gender" id="gender">
        <option value="male">Male</option>
        <option value="female">Female</option>
        </select>
        

        <label for="email">Email:</label>
        <input type="email" id="email" name="email">

        <label for="city">City:</label>
        <input type="text" id="city" name="city">

        <input type="submit" value="Add Data">
    </form>

    
</body>

</html>