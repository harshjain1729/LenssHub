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
    $sql2 = "INSERT INTO `wishlist` (`wishlist_id`, `specs_id`, `specs_name`, `specs_price`, `customer_id`) VALUES (NULL, '$sid', '$sname', '$sprice', '$mail')";
    $result2 = mysqli_query($conn, $sql2);
    if($result2){
        header('Location: products.php');
    }
}
?>