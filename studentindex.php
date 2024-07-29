<?php

$connection = mysqli_connect('localhost', 'root', '', 'student');
$query = "SELECT * FROM `studentdetails`";
$result = mysqli_query($connection, $query);
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);
// print_r($users);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student</title>
</head>

<body>
    <form action="./studentinfo.php" method="POST">
        <input type="text" name="name" placeholder="enter your name" /></br>
        <input type="text" name="password" placeholder="enter your password" /></br>
        <input type="text" name="std" placeholder="enter your std" /></br>
        <input type="submit" value="submit" />
    </form>

    <table border="1">
        <thead>
            <th>name</th>
            <th>password</th>
            <th>std</th>

        </thead>
        <tbody>
            <?php foreach ($users as $user) { ?>
                <tr>
                    <td><?php echo $user['name'] ?></td>
                    <td><?php echo $user['password'] ?></td>
                    <td><?php echo $user['std'] ?></td>
                    <td><a href="./studentdelete.php?id=<?= $user['id'] ?>">delete</a></td>
                    <td><a href="./studentupdate.php?id=<?= $user['id'] ?>">update</a></td>
                </tr>
            <?php } ?>

        </tbody>
    </table>

</body>

</html>