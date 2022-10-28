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

$Student_ID = $_POST['Stu_ID'];
$First_Name = $_POST['fn'];
$Middle_Name = $_POST['mn'];
$Last_Name = $_POST['ln'];
$DOB = $_POST['DOB'];
$Gender = $_POST['Gender'];
$Course = $_POST['Co'];
$Year_sem = $_POST['Year'];
$Department = $_POST['Dep'];
$Mobile_Number = $_POST['mobile'];
$Email_ID = $_POST['email'];
$Address = $_POST['address'];


$sql="INSERT INTO `registation` (`Student_ID`, `First_Name`, `Middle_Name`, `Last_Name`, `DOB`, `Gender`, `Course_Name`, `Sem_Year`, `Department_Name`, `Mobile_Number`, `Email_ID`, `Address`) 
VALUES ('$Student_ID', '$First_Name', '$Middle_Name', '$Last_Name', '$DOB', '$Gender', '$Course', '$Year_sem', '$Department', '$Mobile_Number', '$Email_ID', '$Address')";
if($conn->query($sql)==true)
{
    echo"Registation Successfully..."; 
}
else
{
    echo"Check Your Query .....";
}
$conn->close();
?>
