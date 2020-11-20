<?php
include_once('config.php');
if(isset($_POST['submit']))
{
    $file=$_FILES["file"]["name"];
    $temp_name=$_FILES["file"]["tmp_name"];
    $path="uploads/".$file;

    move_uploaded_file($temp_name,$path);

$name=$_POST['name'];
$date=$_POST['date'];
$location=$_POST['location'];
$sql="INSERT into event(file,name,date,location) values('$file','$name','$date','$location')";
$result=mysqli_query($conn,$sql);
if($result)
{
    //echo"Data inserted";
    header("Location: event.php");
}
else{
    echo"Data not inserted".mysqli_error($conn);
}

}
