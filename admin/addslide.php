<?php
include_once('config.php');
if(isset($_POST['submit']))
{
    $file=$_FILES["file"]["name"];
    $temp_name=$_FILES["file"]["tmp_name"];
    $path="uploads/".$file;

    move_uploaded_file($temp_name,$path);

$quotes=$_POST['quotes'];
$sql="INSERT into slide(file,quotes) values('$file','$quotes')";
$result=mysqli_query($conn,$sql);
if($result)
{
    //echo"Data inserted";
    header("Location: slider.php");
}
else{
    echo"Data not inserted".mysqli_error($conn);
}

}
