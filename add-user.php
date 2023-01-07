<?php
 include 'config.php';
 
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $insertquery = "insert into users(Name,phone,email,password)
            values ('{$name}','{$phone}','{$email}','{$password}');";

            $res = mysqli_query($conn,$insertquery) or die("Query unsuccessful.");

            header("Location: http://localhost/1stop/index.php");

            mysqli_close($con);
   
}
?>