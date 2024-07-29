<?php

$id = $_GET['id'];
$connection = mysqli_connect('localhost','root','', 'student');
$query = "select * from `studentdetails` where `id` =$id";
$result = mysqli_query($connection, $query);

$user = mysqli_fetch_assoc($result);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
</head>
<body>
<form action="./studentupdatedetails.php" method="post">
         <input type="hidden" name="id" value="<?= $user['id'] ?>">
        <input type="text" name="name"  value="<?= $user['name'] ?>" placeholder="name" /></br>
        <input type="text" name="password" value="<?= $user['password'] ?>" placeholder="password" /></br>
        <input type="text" name="std" value="<?= $user['std'] ?>" placeholder="std" /></br>
        <input type="submit" value="submit" />
    </form>
</body>
</html>