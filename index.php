<?php

    include_once("./config/common.php");
    include_once("./config/connectDB.php");//import connection to db
    $query="select * from  address";
    $result=pg_query($connection,$query);
    $username=$_SESSION['username']
  
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Address Book</title>
    <link rel="stylesheet" href="./style.css">
    
    
</head>

<body>
<h1>Username : <?=$username?></h1>
    <div>

  
    
    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Gender</th>
            <th>City</th>
            <th>Email</th>
            <th>Delete</th>
            <th>Edit</th>
        </tr>
        <?php while($row=pg_fetch_assoc($result)  ) {?>
        <tr>
        <td><?= $row['id'] ?></td>
        <td><?= $row['name'] ?></td>
        <td><?= $row['gender'] ?></td>
        <td><?= $row['city'] ?></td>
        <td><?= $row['email'] ?></td>
        <td>
          <form method="post" action="./config/delete.php">
            <input type="hidden" name="id" value="<?= $row['id'] ?>">
            <button id="deleteBtn" type="submit">Delete</button>
          </form>
        </td>

        <td>
          <form method="post" action="./editForm.php">
            <input type="hidden" name="id" value="<?= $row['id'] ?>">
            <button id="editBtn" type="submit">Edit</button>
          </form>
        </td>
      </tr>
      <?php  }?>
        

    </table>
    </div>
    <div>
        
        <a href="./addForm.php"><input id="addBtn" type="button" value="Add Record"></a>
    
      </div>

    <form action="./config/logout.php" method="post">

          <input type="submit" name="logout" value="logout">
    </form>

</body>

</html>