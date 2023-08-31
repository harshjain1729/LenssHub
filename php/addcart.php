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
session_start();
$sid = $_GET['glassid'];
$sql1 = "SELECT * FROM `specs` WHERE `specs_id` = $sid";
$result1 = mysqli_query($conn, $sql1);
while($row = mysqli_fetch_assoc($result1)){
    $sname = $row['specs_name'];
    $sprice = $row['specs_price'];
    $mail = $_SESSION['user'];
    $sql2 = "INSERT INTO `Cart` (`Customer_Id`, `specs_id`, `specs_price`, `cart_order_id`, `specs_name`,`quan`) VALUES ('$mail', '$sid', '$sprice', NULL, '$sname',1)";
    $result2 = mysqli_query($conn, $sql2);
    if($result2){
        header('Location: products.php');
    }
}
?>