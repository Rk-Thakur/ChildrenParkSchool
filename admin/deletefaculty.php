<?php
include("config.php");
$id=$_REQUEST['id'];
$query = "DELETE FROM faculty WHERE id=$id";
$result=mysqli_query($conn,$query);
header ("Location: faculty.php");   

?>