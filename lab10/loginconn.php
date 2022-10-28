<?php
$server ="localhost";
$username = "root";
$pass="";
$dbname="test";
$conn = new mysqli($server,$username,$pass,$dbname);

if($conn->connect_error)
{
    die("Connection Failed :");
}



$Email_ID = $_POST['email'];
$Mobile_Number = $_POST['Password'];


$sql="select *from registation where Email_ID = '$Email_ID' && Mobile_Number ='$Mobile_Number'";
if($conn->query($sql)==true)
{
    echo"Login Successfully..."; 
}
else
{
    echo"Check Your Query .....";
}
$conn->close();
?>