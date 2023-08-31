<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Anton&family=DM+Sans&family=Lato:wght@700&family=Michroma&family=Montserrat:wght@400;800&family=Nanum+Gothic:wght@700&family=Pinyon+Script&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    /* CSS Reset */
    body {
        margin: 0px;
        padding: 0px;
        font-family: 'Montserrat', sans-serif;
        color: white;
        /* background-color: black; */
        background-image: url('../img/bg.jpg');
        background-size: 100%;
        /* color: white; */
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

    div>img {
        /* filter: invert(100%); */
        width: 170px;
    }

    .boxes-c1 {}

    div>h1 {
        margin: 4px;
    }

    div ul li a {
        text-decoration: none;
        padding: 39px;
        font-size: 16px;
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
        text-decoration: none;
    }


    div button {
        font-size: 20px;
        border-radius: 10px;
        color: white;
        background-color: grey;
        font-family: 'Montserrat', sans-serif;
        font-weight: 600;
        transition: width 0.4s ease-in-out;
    }

    /* STYLING FOR BOX-5 */
    h1 {
        font-size: 130px;
        font-weight: 700;
        font-family: 'Anton', sans-serif;
        max-width: 40ch;
        text-align: center;
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

    .card-body {
        background-color: black;
    }
    </style>
</head>

<body>
    <!-- CONTAINER-1(NAVIGATION BAR) -->
    <header class="container-1">
        <!-- BOX-2(ACTUALLY BOX-1, AS BOX-1 WAS REMOVED) -->
        <div class="boxes-c1" id="box-2">
            <nav style="margin: 0px ;">
                <ul style="margin:auto;">
                    <li class="tabs" id="tab1"><a href="test.php">HOME</a></li>
                    <li class="tabs" id="tab1"><a href="../html/orders.html">ORDERS</a></li>
                    <li class="tabs" id="tab1"><a href="../html/store.html">STORES</a></li>
                    <?php
                    if($_SESSION['loggedin']){
                        echo '<li class="tabs" id="tab1"><a href="cart.php">CART</a></li>';
                        echo '<li class="tabs" id="tab1"><a href="wishlist.php">WISHLIST</a></li>';
                        echo '<li class="tabs" id="tab1"><a href="logout.php">LOG OUT</a></li>';
                    }
                    ?>
                </ul>
            </nav>
        </div>
    </header>
    <section>
        <div class="text-center container py-5">
            <!-- <h4 class="mt-4 mb-5"><strong>Bestsellers</strong></h4> -->

            <div class="row">
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
        $sql1 = "SELECT * FROM `specs`";
        $result1 = mysqli_query($conn, $sql1);
        while($row=mysqli_fetch_assoc($result1)){
            echo '<div class="col-lg-4 col-md-5 mb-4">
            <div class="card" style = "background-color: none">
              <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
                data-mdb-ripple-color="light">
                <img src="../img/Glass-'.$row['specs_id'].'.jpg"
                  class="w-100" />
                <a href="#!">
                  <div class="mask">
                    <div class="d-flex justify-content-start align-items-end h-100">
                    </div>
                  </div>
                  <div class="hover-overlay">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </div>
                </a>
              </div>
              <div class="card-body">
                <a href="productindividual.php?glassid='.$row['specs_id'].'" class="text-reset">
                  <h5 class="card-title mb-3">'.$row['specs_name'].'</h5>
                </a>
                <h6 class="mb-3">₹'.$row['specs_price'].'</h6>';
                $nme = $row['specs_name'];
                $id = $row['specs_id'];
                $cid = $_SESSION['user'];
                $sql2 = "SELECT * FROM `Cart` WHERE `Customer_Id` = '$cid'AND `specs_id` = '$id'";
                $result2 = mysqli_query($conn, $sql2);
                $numrow = mysqli_num_rows($result2);
                $sql3 = "SELECT * FROM `wishlist` WHERE `customer_id` = '$cid'AND `specs_id` = '$id'";
                $result3 = mysqli_query($conn, $sql3);
                $numrow1 = mysqli_num_rows($result3);
                // echo var_dump($numrow1);
                if($numrow==1 && $_SESSION['loggedin']){
                    echo '<a href="cart.php" class="btn btn-primary" style="background-color:black; border-color: #717171;">Go To Cart</a>
                    ';
                    if($numrow1 == 1){
                        echo '<a href="wishlist.php" class="btn btn-primary" style="background-color:black; border-color: #717171;">Go To Wishlist</a>';
                    }
                    else{
                        echo '<a href="addwishlist.php?glassid='.$row['specs_id'].'" class="btn btn-primary" style="background-color:black; border-color: #717171;">Add To Wishlist</a>';
                    }
                }
                if($numrow==0 && $_SESSION['loggedin']){
                    echo '<a href="addcart.php?glassid='.$row['specs_id'].'" class="btn btn-primary" style="background-color:black; border-color: #717171;">Add To Cart</a>
                    ';
                    if($numrow1 == 1){
                        echo '<a href="wishlist.php" class="btn btn-primary" style="background-color:black; border-color: #717171;">Go To Wishlist</a>';
                    }
                    else{
                        echo '<a href="addwishlist.php?glassid='.$row['specs_id'].'" class="btn btn-primary" style="background-color:black; border-color: #717171;">Add To Wishlist</a>';
                    }
                }
              echo '</div>
            </div>
          </div>';
        }
        ?>
            </div>
    </section>
    <footer class="text-center text-lg-start bg-none text-light">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center jlightfy-content-lg-between p-4 ">
            <!-- Left -->
            <div class="me-5 d-none d-lg-block">
                <span>Get connected with us on social networks:</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div>
                <a href="https://www.instagram.com/lensshub/" class="ml-4 text-reset">
                    <i class="fa fa-instagram"></i>
                </a>
                <a href="https://www.linkedin.com/posts/harsh-jain-b1aaba269_frontenddevelopment-fullstackdeveloper-backenddeveloper-activity-7054060451113906177-s1aL?utm_source=share&utm_medium=member_desktop"
                    class="ml-4 text-reset">
                    <i class="fa fa-linkedin"></i>
                </a>
                <a href="https://github.com/itxjharsh/Lensshub" class="ml-4 text-reset">
                    <i class="fa fa-github"></i>
                </a>
            </div>
            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                        <p><i class="fa fa-home me-3"></i>+91 8797676733</p>
                        <p>
                            <i class="fa fa-envelope me-3"></i>
                            <a href="mailto:lensshub@gmail.com">lensshub@gmail.com</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Products
                        </h6>
                        <p>
                            <a href="products.php" class="text-reset">COSSANDRA</a>
                        </p>
                        <p>
                            <a href="products.php" class="text-reset">PLATAR</a>
                        </p>
                        <p>
                            <a href="products.php" class="text-reset">TRANSPARENTA</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Useful links
                        </h6>
                        <p>
                            <a href="test.php" class="text-reset">Home</a>
                        </p>
                        <p>
                            <a href="../html/store.html" class="text-reset">Stores</a>
                        </p>
                        <p>
                            <a href="products.php" class="text-reset">Products</a>
                        </p>
                        <p>
                            <a href="mailto:lensshub@gmail.com" class="text-reset">Contact Us</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            <i class="fa fa-gem mr-3"></i>Social Media Handles:
                        </h6>



                        <!-- Instagram -->
                        <a class="btn btn-link btn-floating btn-lg text-light m-1"
                            href="https://www.instagram.com/lensshub/" role="button" data-mdb-ripple-color="light"><i
                                class="fa fa-instagram"></i></a>

                        <!-- Linkedin -->
                        <a class="btn btn-link btn-floating btn-lg text-light m-1"
                            href="https://www.linkedin.com/posts/harsh-jain-b1aaba269_frontenddevelopment-fullstackdeveloper-backenddeveloper-activity-7054060451113906177-s1aL?utm_source=share&utm_medium=member_desktop"
                            role="button" data-mdb-ripple-color="light"><i class="fa fa-linkedin"></i></a>
                        <!-- Github -->
                        <a class="btn btn-link btn-floating btn-lg text-light m-1"
                            href="https://github.com/harshjain1729/Lensshub" role="button"
                            lightata-mdb-ripple-color="light"><i class="fa fa-github"></i></a>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2023 Copyright:
            <a class="text-reset fw-bold" href="test.php">LenssHub.com</a>
        </div>
        <!-- Copyright -->
    </footer>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>

</html>