<?php
include("config.php");
$id=$_REQUEST['id'];
$query = "DELETE FROM slide WHERE id=$id";
$result=mysqli_query($conn,$query);
header ("Location: slider.php");   

?>