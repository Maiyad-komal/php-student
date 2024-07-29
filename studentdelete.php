<?php
$id = $_GET['id'];
$connection = mysqli_connect('localhost', 'root', '', 'student');
$query = "DELETE from `studentdetails` where `id`= $id";
$row = mysqli_query($connection, $query);

if($row >0)
       return header("Location:./studentindex.php");
else
       echo "failed to delete data";





?>