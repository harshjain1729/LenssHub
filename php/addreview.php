<?php
$server = "localhost";
$user  = "root";
$pass = "";
$db = "Lensshub";
$conn = mysqli_connect($server,$user,$pass,$db);
if(!$conn){
    die("could't connect to database due to this error-->".mysqli_connect_error($conn));
}
// else{
//     echo "connected successfully";
//     echo "<br>";
// }
session_start();
$cid = $_SESSION['user'];
$specsid = $_GET['glassid'];
$desc = $_POST['rvw'];
$sql3 = "INSERT INTO `reviews` (`sepcs_id`, `User_id`, `review_desc`) VALUES ('$specsid', '$cid', '$desc')";
$result3 = mysqli_query($conn, $sql3);
if($result3){
    header('Location: productindividual.php?glassid='.$specsid);
}
?>