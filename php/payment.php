<?php
    session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
    /* CSS Reset */
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

    div>img {
        /* filter: invert(100%); */
        width: 50px;
    }

    .boxes-c1 {}

    div>h1 {
        margin: 4px;
    }

    div ul li a {
        text-decoration: none;
        padding: 18px;
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
        text-decoration:none;
    }


    div button {
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
        padding: 0px;
        background-color: black;
    }
    </style>
</head>

<body>
    <header class="container-1">
        <!-- BOX-2(ACTUALLY BOX-1, AS BOX-1 WAS REMOVED) -->
        <div class="boxes-c1" id="box-2">
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
    <section>
        <div class="container py-5">
            <div class="card">
                <div class="card-body">
                    <div class="row d-flex justify-content-center pb-5">
                        <div class="col-md-7 col-xl-5 mb-4 mb-md-0">
                            <div class="py-4 d-flex flex-row">
                                <img src="../img/Paypal.png" alt="" width = "30px">
                            </div>
                            <!-- <h4 class="text-success">₹999.00</h4>
                            <h4>COSSANDRA</h4>
                            <p>
                            Full Rim Rectangle Eyeglasses
                            </p><p>
                            Size: Wide
                            </p><p>
                            Color: Violet(R: 170, G: 150, B: 232)
                            </p>
                            <hr /> -->
                            <div class="pt-2">
                                <div class="d-flex pb-2">
                                    <div class="ms-auto">
                                        <p class="text-primary">
                                            <i class="fa fa-plus-circle text-primary pe-1"></i>Add payment card
                                        </p>
                                    </div>
                                </div>
                                <p>
                                    This is an estimate for the frame you have selected.
                                </p>
                                <form class="pb-3">
                                    <div class="d-flex flex-row pb-3">
                                        <div class="d-flex align-items-center pe-2">
                                            <input class="form-check-input" type="radio" name="radioNoLabel"
                                                id="radioNoLabel1" value="" aria-label="..." checked />
                                        </div>
                                        <div class="rounded border d-flex w-100 p-3 align-items-center">
                                            <p class="mb-0">
                                                <i class="fa fa-cc-visa fa-lg text-primary pe-2"></i>Visa Debit
                                                Card
                                            </p>
                                            <div class="ms-auto">************3456</div>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row">
                                        <div class="d-flex align-items-center pe-2">
                                            <input class="form-check-input" type="radio" name="radioNoLabel"
                                                id="radioNoLabel2" value="" aria-label="..." />
                                        </div>
                                        <div class="rounded border d-flex w-100 p-3 align-items-center">
                                            <p class="mb-0">
                                                <i class="fa fa-cc-mastercard fa-lg text-dark pe-2"></i>Mastercard
                                                Office
                                            </p>
                                            <div class="ms-auto">************1038</div>
                                        </div>
                                    </div>
                                </form>
                                <input type="button" value="Proceed to payment"
                                    class="btn btn-primary btn-block btn-lg" />
                            </div>
                        </div>

                        <div class="col-md-5 col-xl-4 offset-xl-1">
                            <div class="py-4 d-flex justify-content-end">
                                <h6><a href="test.php">Cancel and return to Home</a></h6>
                            </div>
                            <div class="rounded d-flex flex-column p-2" style="background-color: #303030">
                                <div class="p-2 me-3">
                                    <h4>Order Recap</h4>
                                </div>
                                <div class="p-2 d-flex">
                                    <div class="col-8">Frame</div>
                                    <div class="ms-auto">₹<?php
                                                            session_start();
                                                            echo $_SESSION['total'];
                                                        ?>.00</div>
                                </div>
                                <div class="p-2 d-flex">
                                    <div class="col-8">Discount</div>
                                    <div class="ms-auto">-₹400.00</div>
                                </div>
                                <div class="border-top px-2 mx-2"></div>
                                <div class="p-2 d-flex pt-3">
                                    <div class="col-8">Total</div>
                                    <div class="ms-auto">₹<?php
                                                            session_start();
                                                            echo $_SESSION['total']-400;
                                                        ?>.00</div>
                                </div>
                                <div class="p-2 d-flex">
                                    <div class="col-8">
                                        Delivery Charges <span class="fa fa-question-circle text-dark"></span>
                                    </div>
                                    <div class="ms-auto"><b>₹40.76</b></div>
                                </div>
                                <div class="border-top px-2 mx-2"></div>
                                <div class="p-2 d-flex pt-3">
                                    <div class="col-8"><b>Total</b></div>
                                    <div class="ms-auto"><b class="text-success">₹<?php
                                                            session_start();
                                                            echo $_SESSION['total']-359.24;
                                                        ?></b></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="text-center text-lg-start bg-none text-light">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center jlightfy-content-lg-between p-4 border-bottom">
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
                <a href="https://www.linkedin.com/posts/harsh-jain-b1aaba269_frontenddevelopment-fullstackdeveloper-backenddeveloper-activity-7054060451113906177-s1aL?utm_source=share&utm_medium=member_desktop" class="ml-4 text-reset">
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
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2023 Copyright:
            <a class="text-reset fw-bold" href="test.php">LenssHub.com</a>
        </div>
        <!-- Copyright -->
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>