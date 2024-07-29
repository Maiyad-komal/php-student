<?php

$id = $_POST['id'];
$name = $_POST['name'];
$password = $_POST['password'];
$std = $_POST['std'];


$connection = mysqli_connect('localhost', 'root', '', 'student');
$query = "UPDATE `studentdetails` set `name` ='$name', `password` = '$password', `std`='$std' where `id`=$id";
$row = mysqli_query($connection, $query);

if($row >0)
       return header("Location:./studentindex.php");
else
       echo "failed to delete data";





?>