<?php
$server = "localhost";
$user  = "root";
$pass = "";
$db = "Lensshub";
$conn = mysqli_connect($server,$user,$pass,$db);
if(!$conn){
    die("could't connect to database due to this error-->".mysqli_connect_error($conn));
}
else{
    echo "connected successfully";
    echo "<br>";
}
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$phone = $_POST['phone'];
$mail = $_POST['mail'];
$sql = "INSERT INTO `User` (`fname`, `lname`, `phone`, `mail`) VALUES ('$fname', '$lname', '$phone', '$mail')";
$result = mysqli_query($conn,$sql);
if($result){
    echo "Data Inserted Successfully";
    header('Location: ../html/login.html');
}
else{
    header('Location: test.html');
}
?>