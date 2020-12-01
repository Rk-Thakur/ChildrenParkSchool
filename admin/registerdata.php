<?php
include_once('config.php');
if(isset($_POST['submit']))
{
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];

    $file=$_FILES["file"]["name"];
    $temp_name=$_FILES["file"]["tmp_name"];
    $path="uploads/".$file;

    move_uploaded_file($temp_name,$path);

$sql="INSERT into register(username,email,password,file) values('$username','$email','$password','$file')";
$result=mysqli_query($conn,$sql);
if($result)
{
    //echo"Data inserted";
    header("Location: login.html");
}
else{
    echo"Data not inserted".mysqli_error($conn);
}

}
