<?php

$name = $_POST['name'];
$password = $_POST['password'];
$std = $_POST['std'];

$connection = mysqli_connect('localhost', 'root', '', 'student');
$query = "INSERT INTO `studentdetails` (`name`,`password`,`std`) VALUES ('$name', '$password','$std');";
$row = mysqli_query($connection, $query);

if ($row > 0)
    return header('Location: ./studentindex.php');
else
    echo "failed to insert data ";
