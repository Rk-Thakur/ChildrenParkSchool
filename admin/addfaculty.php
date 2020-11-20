<?php
include_once('config.php');
if(isset($_POST['submit']))
{
    $file=$_FILES["file"]["name"];
    $temp_name=$_FILES["file"]["tmp_name"];
    $path="uploads/".$file;

    move_uploaded_file($temp_name,$path);

$name=$_POST['name'];
$position=$_POST['position'];

$sql="INSERT into faculty(file,name,position) values('$file','$name','$position')";
$result=mysqli_query($conn,$sql);
if($result)
{
    //echo"Data inserted";
    header("Location: faculty.php");
}
else{
    echo"Data not inserted".mysqli_error($conn);
}

}
