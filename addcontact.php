<?php
include_once('admin/config.php');
if(isset($_POST['submit']))
{
  

$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];


$sql="INSERT into contact(name,email,subject,message) values('$name','$email','$subject','$message')";
$result=mysqli_query($conn,$sql);
if($result)
{
    //echo"Data inserted";
    header("Location: contact.php");
}
else{
    echo"Data not inserted".mysqli_error($conn);
}

}
