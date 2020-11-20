<?php 
$conn=mysqli_connect("localhost","root","","CPBS");
if($conn){
  //  echo("database connected sucessfully");
}else{
    echo("database not connected sucessfully").mysqli_error($conn);
}
?>