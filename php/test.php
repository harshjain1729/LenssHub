<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Anton&family=DM+Sans&family=Lato:wght@700&family=Michroma&family=Montserrat:wght@400;800&family=Nanum+Gothic:wght@700&family=Pinyon+Script&display=swap"
        rel="stylesheet">

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
        filter: invert(100%);
        width: 170px;
    }

    .boxes-c1 {}

    div>h1 {
        margin: 4px;
    }

    div ul li a {
        text-decoration: none;
        padding: 20px;
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


    #mb {
        font-size: 20px;
        border-radius: 10px;
        color: white;
        background-color: grey;
        font-family: 'Montserrat', sans-serif;
        font-weight: 600;
        width: 300px;
        transition: width 0.4s ease-in-out;
    }

    #mb:hover {
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

    div button a:hover {
        color: white;
        text-decoration: none;
    }

    #chat-button {
        background-color: rgb(64, 64, 55);
    }
    </style>
    <!-- chatbot css -->
    <link rel="stylesheet" href="../static/css/chat.css">
    <link rel="stylesheet" href="../static/css/home.css">
</head>

<body>
    <!-- CONTAINER-1(NAVIGATION BAR) -->
    <header class="container-1">
        <!-- BOX-2(ACTUALLY BOX-1, AS BOX-1 WAS REMOVED) -->
        <!-- here we have created navbar using nav and ul or unordered list tag. -->
        <!-- in navbar some pages will be shown after login -->
        <div class="boxes-c1" id="box-2">
            <nav style="margin: 0px ;">
                <ul style="margin:auto;">
                    <li class="tabs" id="tab1"><a href="../php/test.php">HOME</a></li>
                    <li class="tabs" id="tab1"><a href="../php/products.php">PRODUCTS</a></li>
                    <li class="tabs" id="tab1"><a href="../html/about.html">ABOUT</a></li>
                    <li class="tabs" id="tab1"><a href="../html/orders.html">ORDERS</a></li>
                    <li class="tabs" id="tab1"><a href="../html/store.html">STORES</a></li>
                    <?php
                    if($_SESSION['loggedin']){
                        echo '<li class="tabs" id="tab1"><a href="../php/cart.php">CART</a></li>';
                        echo '<li class="tabs" id="tab1"><a href="../php/wishlist.php">WISHLIST</a></li>';
                    }
                    ?>
                    <?php
                    if($_SESSION['loggedin']){
                        echo '<li class="tabs" id="tab1"><a href="../php/logout.php">LOG OUT</a></li>';
                    }
                    ?>
                </ul>
            </nav>
        </div>
    </header>

    <!-- CONATAINER-2(LENSSHUB+ EXP THE CLEARITY+ SIGNUP) -->
    <div class="container-2">
        <!-- BOX-4(ACTUALLY BOX-2, AS BOX-1 AND BOX-3 WAS REMOVED) -->
        <div class="boxes-c2" id="box-4">Experience the clearity in your <br> <span style="color:grey;">वि-SION.</span>
            <p style="font-size: 20px; margin: 0px;">SIGN-UP AND GET 50% INSTANT DISCOUNT ON YOUR FIRST PURCHASE.</p>
            <?php
            if($_SESSION['loggedin']){
                echo '<button id = "mb"><a href="../php/products.php">Browse Products</a></button>';
            }
            else{
                echo '<button id = "mb"><a href="../html/signup.html">SIGN-UP</a>
                </button>';
            }
            ?>

        </div>
        <!-- here we have used span tag so that we could give animation and different color to every letter. -->

        <!-- BOX-2(ACTUALLY BOX-5, AS BOX-1 AND BOX-3 WAS REMOVED) -->
        <div class="boxes-c2" id="box-5">
            <h1>
                <span style="color:rgb(0, 0, 0);">L</span>
                <span style="color:rgb(30, 30, 30);">E</span>
                <span style="color:rgb(80, 80, 80);">N</span>
                <span style="color:rgb(90, 90, 90);">S</span>
                <span style="color:rgb(120, 120, 120);">S</span>
                <span style="color:rgb(180, 180, 180);">H</span>
                <span style="color:rgb(210, 210, 210);">U</span>
                <span style="color:rgb(250,250, 250);">B</span>
            </h1>
        </div>
    </div>
    <hr>
    <footer class="text-center text-lg-start bg-none text-light">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center jlightfy-content-lg-between p-4">
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
                <a href="https://github.com/harshjain1729/Lensshub" class="ml-4 text-reset">
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
        <!-- here we have created our chatbpot front-end and we have gave a collapsing animation to our chabot. -->
        <div class="chat-bar-collapsible">
            <button id="chat-button" type="button" class="collapsible">Let's have a chit chat!
                <i id="chat-icon" style="color: #fff;" class="fa fa-fw fa-comments-o"></i>
            </button>

            <div class="content">
                <div class="full-chat-block">
                    <!-- Message Container -->
                    <div class="outer-container">
                        <div class="chat-container">
                            <!-- Messages -->
                            <div id="chatbox">
                                <h5 id="chat-timestamp" style="color:black;"></h5>
                                <p id="botStarterMessage" class="botText"><span>Loading...</span></p>
                            </div>

                            <!-- User input box -->
                            <div class="chat-bar-input-block">
                                <div id="userInput">
                                    <input id="textInput" class="input-box" type="text" name="msg"
                                        placeholder="Tap 'Enter' to send a message">
                                    <p></p>
                                </div>

                                <div class="chat-bar-icons">
                                    <i id="chat-icon" style="color: crimson;" class="fa fa-fw fa-heart"
                                        onclick="heartButton()"></i>
                                    <i id="chat-icon" style="color: #333;" class="fa fa-fw fa-send"
                                        onclick="sendButton()"></i>
                                </div>
                            </div>

                            <div id="chat-bar-bottom">
                                <p></p>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </div>

        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2023 Copyright:
            <a class="text-reset fw-bold" href="test.php"><i style="color: #007bff;">lensshub.com</i></a>
        </div>
        <!-- Copyright -->
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="../static/scripts/responses.js"></script>
    <script src="../static/scripts/chat.js"></script>
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