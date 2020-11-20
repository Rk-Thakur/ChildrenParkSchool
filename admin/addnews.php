<?php
include_once('config.php');
if(isset($_POST['submit']))
{
    $file=$_FILES["file"]["name"];
    $temp_name=$_FILES["file"]["tmp_name"];
    $path="uploads/".$file;

    move_uploaded_file($temp_name,$path);

$heading=$_POST['name'];
$description=$_POST['description'];
$date=$_POST['date'];
$sql="INSERT into news(file,name,description,date) values('$file','$heading','$description','$date')";
$result=mysqli_query($conn,$sql);
if($result)
{
    //echo"Data inserted";
    header("Location: news.php");
}
else{
    echo"Data not inserted".mysqli_error($conn);
}

}
