<?php

$conn = mysqli_connect("localhost","root","","finalsampledb");
if(!$conn)
{
    die ("connection failed".mysqli_connect_error());
}


$us = $_POST['fname'];
$pw = $_POST['pass'];
$em = $_POST['eemail'];

$sql = "INSERT INTO register (user,pass,email) VALUES('$us','$pw','$em')";

if(mysqli_query($conn,$sql))
{
    header('location:index.php');
}
else
{
echo ("try again".mysqli_error($conn));
}
mysqli_close($conn);
