<?php
include_once('config.php');
if(isset($_POST['submit']))
{
    

$title=$_POST['title'];

$file=$_FILES["file"]["name"];
    $temp_name=$_FILES["file"]["tmp_name"];
    $path="uploads/".$file;

    move_uploaded_file($temp_name,$path);

$description=$_POST['description'];
$whom=$_POST['whom'];
$sql="INSERT into message(title,file,description,whom) values('$title','$file','$description','$whom')";
$result=mysqli_query($conn,$sql);
if($result)
{
    //echo"Data inserted";
    header("Location: message.html");
}
else{
    echo"Data not inserted".mysqli_error($conn);
}

}
