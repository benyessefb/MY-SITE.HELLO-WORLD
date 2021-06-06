<?php
session_start();

if (isset($_POST['submit'])) {


    $host      =      'localhost';
    $dbname    =      'email_lists';
    $dbuser    =      'root';
    $dbpass    =      '';
    $tbname    =      'email_lists';


    $conn = mysqli_connect($host, $dbuser, $dbpass, $dbname);
    $email = mysqli_real_escape_string($conn, $_POST['email']);

    //Email
    $query_email = "SELECT * FROM `$tbname` WHERE email ='$email' ";

    $result_email = $conn->query($query_email);

    $client_email = $result_email;

    if ($client_email) {
        $msg = '<div class="msg-mailsb msg-mail-red">Your email ' . $email . ' already exists. Please check email</div> ';
    } else {
        $sql = "INSERT INTO `email_list` (`id`,`email`) VALUES (NULL,'$email')";

        $conn->query($sql);

        $msg = '<div class="msg-mailsb msg-mail-green">
						Thanks for Share Your Email ' . $email . ' .<br>
						Please wait we send a special offer for you.<br>
						<span class="mailsub-goback-btn"><a href="javascript:window.history.go(-1);">Click here</a></span>  return to the recent page you were browsing.
					</div> ';
    }
}



?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Mazagan </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/main.css?v=<?php echo time(); ?>">
    <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
    <link rel="icon" href="images/logof.webp" type="">
</head>

<body>
    <!-- header -->
    <header class="header" id="header">
        <div class="head-top">
            <div class="site-name">
                <span>Hello World</span>
            </div>
            <div class="site-nav">
                <span id="nav-btn">MENU <i class="fas fa-bars"></i></span>
            </div>
        </div>

        <div class="head-bottom flex">
            <h2>Get Close To Your Planet</h2>

        </div>
    </header>
    <!-- end of header -->

    <!-- side navbar -->
    <div class="sidenav" id="sidenav">
        <span class="cancel-btn" id="cancel-btn">
            <i class="fas fa-times"></i>
        </span>

        <ul class="navbar1">
            <li><a href="#header">home</a></li>
            <li><a href="#services">facts about the world</a></li>
            <li><a href="#roomO">ABOUT THE EARTH</a></li>
            <li><a href="#customers">EARTH'S NEAREST NEIGHBOURS</a></li>
            <li><a href="#EARTH">TOP 3 EARTH FACTS</a></li>

        </ul>
    </div>
    <!-- end of side navbar -->

    <!-- fullscreen modal -->
    <div id="modal"></div>
    <!-- end of fullscreen modal -->

    <!-- body content  -->
    <section class="services sec-width" id="services">
        <div class="title">
            <h2>A few facts about the world we live in</h2>
        </div>
        <div class="services-container">
            <!-- single service -->
            <article class="service">
                <div class="service-icon">
                    <!-- <span>
                            <i class = "fas fa-utensils" style="color: #2D5DAF;"></i>
                        </span> -->
                </div>
                <div class="service-content">
                    <h2>----------------------------------</h2>
                    <p>Earth is the third planet from the Sun and is the largest of the terrestrial planets. Unlike the other planets in the solar system that are named after classic deities the Earth’s name comes from the Anglo-Saxon word erda which means ground or soil. The Earth was formed approximately 4.54 billion years ago and is the only known planet to support life.</p>
                    <!-- <button type = "button" class = "btn">Know More</button> -->
                </div>
            </article>
            <!-- end of single service -->
            <!-- single service -->
            <article class="service">

            </article>
            <!-- end of single service -->
            <!-- single service -->
            <article class="service">

            </article>
            <!-- end of single service -->
            <!-- single service -->
            <article class="service">

            </article>
            <!-- end of single service -->
        </div>
    </section>
    <section class="rooms sec-width" id="roomO">
        <div class="title">
            <h2>ABOUT THE EARTH</h2>
        </div>
        <div class="rooms-container">
            <article class="room">
                <div class="room-image">
                    <img src="images/earth2.jpg" style="width: 558px; height: 500;" alt="room image">
                </div>
                <div class="room-text">
                    <h3>--------------------------------</h3>
                    <ul>
                        <li>
                            <i class="fas fa-arrow-alt-circle-right"></i>
                            Mass: 5,972,190,000,000,000 billion kg.
                        </li>
                        <li>
                            <i class="fas fa-arrow-alt-circle-right"></i>
                            Diameter at equator: 12,756 km.
                        </li>
                        <li>
                            <i class="fas fa-arrow-alt-circle-right"></i>
                            Satellites : The Moon.
                        </li>
                        <li>
                            <i class="fas fa-arrow-alt-circle-right"></i>
                            Mass: 5,972,190,000,000,000 billion kg.
                        </li>
                        <li>
                            <i class="fas fa-arrow-alt-circle-right"></i>
                            Mass: 5,972,190,000,000,000 billion kg.
                        </li>
                    </ul>


                </div>
            </article>
            <!-- end of single room -->
            <!-- single room -->
            <article class="room">

            </article>
            <!-- end of single room -->
            <!-- single room -->
            <article class="room">

            </article>
            <!-- end of single room -->
            <!-- single room -->
            <article class="room">
                <!--  -->
            </article>
        </div>
    </section>
    <!-- end of single room -->


    <section class="customers" id="customers">
        <div class="sec-width">
            <div class="title">
                <h2>EARTH'S NEAREST NEIGHBOURS</h2>
            </div>
            <div class="customers-container">
                <!-- single customer -->
                <div class="customer">

                    <h3>Mars</h3>
                    <p>"Gravity: 3.721 m/s²
                        Orbital period: 687 days
                        Distance from Sun: 227.9 million km
                        Surface area: 144.8 million km²"</p>
                    <img src="images/Mars.jpeg" alt="customer image">
                    <!-- <span>Hosea14 | United Kingdom</span> -->
                </div>
                <div class="customer">

                    <h3>Venus</h3>
                    <p>"
                        Orbital period: 225 days
                        Surface area: 460.2 million km²
                        Radius: 6,051.8 km
                        Gravity: 8.87 m/s²
                        Mass: 4.867 × 10^24 kg (0.815 M⊕)."</p>
                    <img src="images/Venus.jpeg" alt="customer image">
                    <!-- <span>Hosea14 | United Kingdom</span> -->
                </div>
                <div class="customer">
                    <h3>Mercury</h3>
                    <p>"Distance from Sun: 57.91 million km
                        Orbital period: 88 days
                        Surface area: 74.8 million km²
                        Radius: 2,439.7 km
                        Average orbital speed: 47.36 km/s."</p>
                    <img src="images/Mercury.jpeg" alt="customer image">
                    <!-- <span>Hosea14 | United Kingdom</span> -->
                </div>

            </div>
        </div>

    </section>
    <section class="services sec-width" id="EARTH">
        <div class="title">
            <h2>TOP 3 EARTH FACTS</h2>
        </div>
        <div class="services-container">
            <!-- single service -->
            <article class="service">
                <div class="service-icon">
                    <!-- <span>
                            <i class = "fas fa-utensils" style="color: #2D5DAF;"></i>
                        </span> -->
                </div>
                <div class="service-content">
                    <h2>----------------------------------</h2>
                    <p style="font-weight: bold;">=> The Earth’s rotation is gradually slowing.</p>
                    <p style="font-weight: bold;">=> A year isn't exactly 365 days, and the earth doesn't take 24 hours to rotate.</p>
                    <p style="font-weight: bold;">=> 70% of the earth's surface is water, and only one third of its fresh water is unfrozen.</p>



                    <!-- <button type = "button" class = "btn">Know More</button> -->
                </div>
            </article>
            <!-- end of single service -->
            <!-- single service -->
            <article class="service">

            </article>
            <!-- end of single service -->
            <!-- single service -->
            <article class="service">

            </article>
            <!-- end of single service -->
            <!-- single service -->
            <article class="service">

            </article>
            <!-- end of single service -->
        </div>
    </section>


    <!-- footer -->
    <footer class="footer">
        <div class="footer-container">
            <div>
                <h2>About Us </h2>
                <p>Grab the helm and go on an adventure in Earth With Us.</p>
                <ul class="social-icons">
                    <li class="flex">
                        <i class="fa fa-twitter fa-2x"></i>
                    </li>
                    <li class="flex">
                        <i class="fa fa-facebook fa-2x"></i>
                    </li>
                    <li class="flex">
                        <i class="fa fa-instagram fa-2x"></i>
                    </li>
                </ul>
            </div>



            <div>
                <h2>Privacy</h2>
                <a href="#room0">ABOUT THE EARTH</a>
                <a href="#customers">EARTH'S NEAREST NEIGHBOURS</a>
                <a href="#EARTH">TOP 3 EARTH FACTS</a>
            </div>

            <div>

                <div class="container1">
                    
                    <form action="" method="POST" accept-charset="utf-8">
                        <h1>Join Our Newsletter</h1>
                        <div class="email-box">
                            <i class="fas fa-envelope"></i>
                            <input class="tbox" type="email" name="email" value="" placeholder="Enter your email" required>
                            <!-- <button class="btn1s" type="button" name="button">Subscribe</button> -->
                            <input type="submit" name="submit" value="submit" class="btn1s">
                        </div>
                    </form>
                </div>
    </footer>
    <!-- end of footer -->

    <script src="js/script.js"></script>
</body>

</html>