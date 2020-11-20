<?php
include("config.php");
$id=$_REQUEST['id'];
$query = "DELETE FROM news WHERE id=$id";
$result=mysqli_query($conn,$query);
header ("Location: news.php");   

?>