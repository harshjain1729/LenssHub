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
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
    html,
    body {
        height: 100%;
        width: 100%;
        margin: 0;
        font-family: 'Roboto', sans-serif;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 15px;
        display: flex;
    }

    .left-column {
        width: 60%;
        position: absolute;
    }

    .right-column {
        width: 35%;
        margin-top: 60px;
        margin-left:750px;
    }

    .left-column img {
        width: 100%;
        position: absolute;
        left: 140px;
        top: 0;
        opacity: 0;
        transition: all 0.3s ease;
    }

    .left-column img.active {
        opacity: 1;
    }

    .product-description {
        border-bottom: 1px solid #E1E8EE;
        margin-bottom: 20px;
    }

    .product-description span {
        font-size: 12px;
        color: white;
        letter-spacing: 1px;
        text-transform: uppercase;
        text-decoration: none;
    }

    .product-description h1 {
        font-weight: 300;
        font-size: 52px;
        color: aliceblue;
        letter-spacing: -2px;
    }

    .product-description p {
        font-size: 16px;
        font-weight: 300;
        color: white;
        line-height: 24px;
    }

    .product-color {
        margin-bottom: 30px;
    }

    .color-choose div {
        display: inline-block;
    }

    .color-choose input[type=&amp;
    quot;
    radio&amp;
    quot;

    ] {
        display: none;
    }

    .color-choose input[type=&amp;
    quot;
    radio&amp;
    quot;

    ]+label span {
        display: inline-block;
        width: 40px;
        height: 40px;
        margin: -1px 4px 0 0;
        vertical-align: middle;
        cursor: pointer;
        border-radius: 50%;
    }

    .color-choose input[type=&amp;
    quot;
    radio&amp;
    quot;

    ]+label span {
        border: 2px solid #FFFFFF;
        box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.33);
    }

    .color-choose input[type=&amp;
    quot;
    radio&amp;
    quot;

    ]#red+label span {
        background-color: #C91524;
    }

    .color-choose input[type=&amp;
    quot;
    radio&amp;
    quot;

    ]#blue+label span {
        background-color: #314780;
    }

    .color-choose input[type=&amp;
    quot;
    radio&amp;
    quot;

    ]#black+label span {
        background-color: #323232;
    }

    .color-choose input[type=&amp;
    quot;
    radio&amp;
    quot;

    ]:checked+label span {
        background-image: url(images/check-icn.svg);
        background-repeat: no-repeat;
        background-position: center;
    }

    .cable-choose {
        margin-bottom: 20px;
    }

    .cable-choose button {
        border: 2px solid #E1E8EE;
        border-radius: 6px;
        padding: 13px 20px;
        font-size: 14px;
        color: #5E6977;
        background-color: #fff;
        cursor: pointer;
        transition: all .5s;
    }

    .cable-choose button:hover,
    .cable-choose button:active,
    .cable-choose button:focus {
        border: 2px solid #86939E;
        outline: none;
    }

    .cable-config {
        border-bottom: 1px solid #E1E8EE;
        margin-bottom: 20px;
    }

    .cable-config a {
        color: #358ED7;
        text-decoration: none;
        font-size: 12px;
        position: relative;
        margin: 10px 0;
        display: inline-block;
    }

    .cable-config a:before {
        content: &amp;
        quot;
        ?&amp;
        quot;
        ;
        height: 15px;
        width: 15px;
        border-radius: 50%;
        border: 2px solid rgba(53, 142, 215, 0.5);
        display: inline-block;
        text-align: center;
        line-height: 16px;
        opacity: 0.5;
        margin-right: 5px;
    }

    .product-price {
        display: flex;
        align-items: center;
    }

    .product-price span {
        font-size: 26px;
        font-weight: 300;
        color: white;
        margin-right: 20px;
    }
    .product-review h3{
        font-weight: 300;
        font-size: 35px;
        color: aliceblue;
        letter-spacing: -2px;
    }
    .product-review p{
        font-size: 19px;
        font-weight: 300;
        color: white;
        line-height: 24px;
    }

    .cart-btn {
        display: inline-block;
        background-color: #7DC855;
        border-radius: 6px;
        font-size: 16px;
        color: #FFFFFF;
        text-decoration: none;
        padding: 12px 30px;
        transition: all .5s;
    }

    .cart-btn:hover {
        background-color: #64af3d;
    }

    body {
        margin: 0px;
        padding: 0px;
        font-family: 'Montserrat', sans-serif;
        background-color: black;
        background-image: url('../img/bg.jpg');
        background-size: 100%;
        color: white;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }

    /* COMPLETE CONTAINER-1 */
    .container-1 {
        height: 50px;
        /* border: 2px red solid; */
        margin: 10px 30px;
        position: relative;
        font-family: 'DM Sans', sans-serif;
    }

    /* BOX-1 IN CONTANER-1 */
    .boxes-c1 {
        /* border: blue solid 2px; */
        height: 50px;
        margin: 0px;
    }

    /* ACTUALLY BOX-1(AS BOX-1 WAS REMOVED) */
    #box-2 {
        width: 70%;
        display: block;
        margin: 0px auto;
        text-align: center;

    }

    #box-3 {
        width: 15%;
        display: inline-block;
        position: absolute;
        right: 0px;
        top: 0px;

    }

    .container-2 {
        /* border: 2px green solid; */
        height: 800px;
        margin: 30px;
        position: relative;

    }

    .boxes-c2 {
        margin: 10px;
        /* border: 2px yellow solid; */
        height: 150px;
    }

    #box-4 {
        width: 50%;
        height: 400px;
        display: inline-block;
        position: absolute;
        top: 380px;
        left: 30px;
        font-family: 'Montserrat', sans-serif;
        font-size: 65px;
        font-weight: 800;
    }

    #box-5 {
        width: 80%;
        font-family: 'Montserrat', sans-serif;
        text-align: center;
        font-size: 50px;

        display: inline-block;
        position: absolute;
        right: 140px;
        top: 40px;
        height: 100px;
    }

    /* div>img {
        filter: invert(100%);
        width: 170px;
    } */

    .boxes-c1 {}

    /* div>h1 {
            margin: 4px;
        } */

    div ul li a {
        text-decoration: none;
        padding: 18px;
        font-size: 15px;
        color: white;
        box-sizing: border-box;
    }

    div ul li {
        display: inline-block;
    }

    div ul li a:hover {
        color: grey;
        /* font-size: 25px; */
        /* BETTER TO BE DONE THROUGH TRANSITION */
        box-sizing: border-box;
        text-decoration:none;
    }


    /* div button {
        font-size: 20px;
        border-radius: 10px;
        color: white;
        background-color: grey;
        font-family: 'Montserrat', sans-serif;
        font-weight: 600;
        width: 300px;
        transition: width 0.4s ease-in-out;
    }

    div button:hover {
        background-color: rgb(64, 64, 55);
        width: 50%;
        height: 50px;
    } */

    /* STYLING FOR BOX-5 */
    h1 {
        font-size: 130px;
        font-weight: 700;
        font-family: 'Anton', sans-serif;
        max-width: 40ch;
        /* text-align: center; */
        transform: scale(0.94);
        animation: scale 3s forwards cubic-bezier(0.5, 1, 0.89, 1);
    }

    @keyframes scale {
        100% {
            transform: scale(1);
        }
    }

    span {
        display: inline-block;
        opacity: 0;
        filter: blur(4px);
    }

    span:nth-child(1) {
        animation: fade-in 0.8s 0.1s forwards cubic-bezier(0.11, 0, 0.5, 0);
    }

    span:nth-child(2) {
        animation: fade-in 0.8s 0.2s forwards cubic-bezier(0.11, 0, 0.5, 0);
    }

    span:nth-child(3) {
        animation: fade-in 0.8s 0.3s forwards cubic-bezier(0.11, 0, 0.5, 0);
    }

    span:nth-child(4) {
        animation: fade-in 0.8s 0.4s forwards cubic-bezier(0.11, 0, 0.5, 0);
    }

    span:nth-child(5) {
        animation: fade-in 0.8s 0.5s forwards cubic-bezier(0.11, 0, 0.5, 0);
    }

    span:nth-child(6) {
        animation: fade-in 0.8s 0.6s forwards cubic-bezier(0.11, 0, 0.5, 0);
    }

    span:nth-child(7) {
        animation: fade-in 0.8s 0.7s forwards cubic-bezier(0.11, 0, 0.5, 0);
    }

    span:nth-child(8) {
        animation: fade-in 0.8s 0.8s forwards cubic-bezier(0.11, 0, 0.5, 0);
    }

    @keyframes fade-in {
        100% {
            opacity: 1;
            filter: blur(0);
        }
    }

    div button a {
        color: white;
        text-decoration: none;
    }
    </style>
</head>

<body>
    <header class="container-1">
        <!-- BOX-2(ACTUALLY BOX-1, AS BOX-1 WAS REMOVED) -->
        <div class="boxes-c1" id="box-2" style = "position: fixed; margin-left:170px;">
            <nav style="margin: 0px ;">
                <ul style="margin:auto;">
                    <li class="tabs" id="tab1"><a href="test.php">HOME</a></li>
                    <li class="tabs" id="tab1"><a href="products.php">PRODUCTS</a></li>
                    <?php
                    if($_SESSION['loggedin']){
                        echo '<li class="tabs" id="tab1"><a href="cart.php">CART</a></li>';
                        echo '<li class="tabs" id="tab1"><a href="wishlist.php">WISHLIST</a></li>';
                    }
                    ?>
                    <li class="tabs" id="tab1"><a href="../html/about.html">ABOUT</a></li>
                    <li class="tabs" id="tab1"><a href="../html/orders.html">ORDERS</a></li>
                    <li class="tabs" id="tab1"><a href="../html/store.html">STORES</a></li>
                    <?php
                    if($_SESSION['loggedin']){
                        echo '<li class="tabs" id="tab1"><a href="logout.php">LOG OUT</a></li>';
                    }
                    ?>
                </ul>
            </nav>
        </div>
    </header>
    <?php
        $specsid = $_GET['glassid'];
        $sql = "SELECT * FROM `specs` WHERE `specs_id` = $specsid";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)){
        echo '<main class="container">
        <!-- Left Column / Headphones Image -->
        <div class="left-column">
            <img data-image="red" class="active" src="../img/Glass-'.$row['specs_id'].'.jpg" alt="" style=" width:520px">
        </div>


        <!-- Right Column -->
        <div class="right-column">

            <!-- Product Description -->
            <div class="product-description">
                <span>Specs</span>
                <h1>'.$row['specs_name'].'</h1>
                <p>'.$row['Description'].'</p>
            </div>
            <div class="product-color">
                <span>Color</span>
        
                <div class="color-choose">
                    <div>
                        <input data-image="red" type="radio" id="red" name="color" value="red" checked>
                        <label for="red"><span></span></label>
                    </div>
                    <div>
                        <input data-image="blue" type="radio" id="blue" name="color" value="blue">
                        <label for="blue"><span></span></label>
                    </div>
                    <div>
                        <input data-image="black" type="radio" id="black" name="color" value="black">
                        <label for="black"><span></span></label>
                    </div>
                </div>
            </div>
            <!-- Product Pricing -->
            <div class="product-price">
                <span>₹'.$row['specs_price'].'</span>';
                $cid = $_SESSION['user'];
                $sid = $specsid;
                $sql2 = "SELECT * FROM `Cart` WHERE `Customer_Id` = '$cid'AND `specs_id` = '$sid'";
                $result2 = mysqli_query($conn, $sql2);
                $numrow = mysqli_num_rows($result2);
                // echo $numrow;
                if($_SESSION['loggedin']&&$numrow==0){
                echo '<a href="addcart.php?glassid='.$row['specs_id'].'" class="cart-btn">Add to cart</a>';}
                else if($_SESSION['loggedin']&&$numrow==1){
                    echo '<a href="cart.php" class="cart-btn">Go to cart</a>';}
            echo '</div>
            <hr>
        </div>
    </main>
    <div class = "container" style = "margin-top:150px; ">
        <div class = "product-review">
            <h3>Reviews</h3>';
            if($_SESSION['loggedin']){
                echo '<form method ="post" action = "addreview.php?glassid='.$specsid.'">
                <div class="form-group">
                    <label for="exampleInputEmail1">Write Review:</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="write your review here" name ="rvw">
                </div>
                <button type="submit" class="btn btn-primary" style = "margin-left: 333px;">Submit</button>
                </form>
                <br>
                <br>';
                $desc = $_POST['rvw'];
                // echo $specsid;
                // echo '1';
                $sql4 = "SELECT * FROM `reviews` WHERE `sepcs_id` = '$specsid'";
                // echo '1';
                $result4 = mysqli_query($conn, $sql4);
                // echo '1';
                // echo var_dump($result4);
                $numr = mysqli_num_rows($result4);
                // echo $numr;
                while($row1 = mysqli_fetch_assoc($result4)){
                    // echo '1';
                    echo '<div class="media">
                            <img src="../img/user-3296.png" class="mr-3" alt="..." width = "34px">
                            <div class="media-body">
                                <h5 class="mt-0" style = "margin:0px;">'.$row1['User_id'].'</h5>
                                <p>'.$row1['review_desc'].'</p>
                            </div>
                        </div><hr>';
                }
            }
            else{
                echo '<a href="../html/login.html" style = "font-size: 25px;">Login</a><p> to review this product!!</p>';
                $sql5 = "SELECT * FROM `reviews` WHERE `sepcs_id` = '$specsid'";
                // echo '1';
                $result5 = mysqli_query($conn, $sql5);
                // echo '1';
                // echo var_dump($result4);
                $numr = mysqli_num_rows($result5);
                // echo $numr;
                while($row2 = mysqli_fetch_assoc($result5)){
                    // echo '1';
                    echo '<div class="media">
                            <img src="../img/user-3296.png" class="mr-3" alt="..." width = "34px">
                            <div class="media-body">
                                <h5 class="font-italic" style = "margin:0px; font-style: italic;">'.$row2['User_id'].'</h5>
                                <p>'.$row2['review_desc'].'</p>
                            </div>
                        </div><hr>';
                }
            }
        echo '</div>
    </div>';
        }
    ?>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>