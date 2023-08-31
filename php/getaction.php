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
$phone = $_POST['phone'];
$mail = $_POST['mail'];
$sql = "SELECT * FROM `User` WHERE `phone` = '$phone' AND `mail` = '$mail'";
$result = mysqli_query($conn, $sql);
$numrow = mysqli_num_rows($result);
if(mysqli_num_rows($result)==1){
    session_start();
    $_SESSION['loggedin'] = true;
    // echo var_dump($_SESSION['loggedin']);
    $_SESSION['user'] = $mail;
    header('Location: test.php');
}
?>