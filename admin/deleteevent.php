<?php
include("config.php");
$id=$_REQUEST['id'];
$query = "DELETE FROM event WHERE id=$id";
$result=mysqli_query($conn,$query);
header ("Location: event.php");   

?>