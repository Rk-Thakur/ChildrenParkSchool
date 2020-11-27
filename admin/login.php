<?php
include('config.php');
if(isset($_POST['submit']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];
    if(!empty($email)&& !empty($password)){

    $sql="SELECT * FROM register where email='$email' and password='$password'";
    //$sql="INSERT into login(email,password) Values('$name','$password')";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        $row=mysqli_fetch_assoc($result);
        if($row['email']==$email && $row['password']==$password)
        {
            header("Location: home.php");
        }else{
            echo"Please Enter Correct Email and Password".mysqli_error($conn);
           //header("Location: login.html");
        }
    }
    
}else{
    echo "username and password required";
    //header("Location: login.html");
    
}
}