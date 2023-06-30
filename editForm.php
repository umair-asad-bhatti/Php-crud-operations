<?php

include_once("./config/common.php");
//getting the user information
require_once("./config/connectDB.php");
$id = $_POST["id"];
$query = "select * from Address where id=$id";
$result = pg_query($connection, $query);
$row = pg_fetch_assoc($result);

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Records</title>
    <link rel="stylesheet" href="./customFormstyle.css">
</head>

<body>
    <h1>Edit Record</h1>
    <form method="post" action="./config/edit.php">
        <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
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
        <input type="submit" value="Edit" id="submit">

    </form>
    
    <!-- using js  to populate the form with the user details -->
    <script>
        let name=document.getElementById("name");
        name.value='<?php echo $row["name"]; ?>';
        let email=document.getElementById("email");
        email.value='<?php echo $row["email"]; ?>';
        let city=document.getElementById("city");
        city.value='<?php echo $row["city"]; ?>';
        let gender=document.getElementById("gender")
        gender.value='<?php echo $row["gender"]; ?>';
        
    </script>
</body>

</html>