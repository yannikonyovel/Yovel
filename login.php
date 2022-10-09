<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="de">
<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Yovel - Unsere Reise</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="Yannik Enslin">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif"/>
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <![endif]-->
</head>
<!-- body -->
<body class="main-layout">
<!-- loader  -->
<div class="loader_bg">
    <div class="loader"><img src="images/loading.gif" alt="#"/></div>
</div>
<!-- end loader -->
<!-- header -->
<header>
    <!-- header inner -->
    <div class="header">
        <div class="header_white_section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="header_information">
                            <ul>
                                <li><img src="images/1.png" alt="#"/> Keine Firmen Adresse</li>
                                <li><img src="images/2.png" alt="#"/> +491627134729</li>
                                <li><img src="images/3.png" alt="#"/> info@yovel.de</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                    <div class="full">
                        <div class="center-desk">
                            <div class="logo"><a href="index.html"><img src="images/logo_transparent.png" alt="#"></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                    <div class="menu-area">
                        <div class="limit-box">
                            <nav class="main-menu">
                                <ul class="menu-area-main">
                                    <li class="active"><a href="#">Home</a></li>
                                    <li><a href="#about">About</a></li>
                                    <li><a href="#travel">Travel</a></li>
                                    <li><a href="#blog">Blog</a></li>
                                    <li><a href="#contact">Contact Us</a></li>
									<li><a href="#">Profil</a>
		  								<ul>
     									   <li><a href="reset-password.php">Passwort ändern</a></li>
										   <li><a href="logout.php">Ausloggen</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Menuleiste für Oben -->
</header>
<!-- ende des header -->
<section>
    <div class="banner-main">
        <img src="images/banner.jpg" alt="#"/>
        <div class="container">
            <div class="text-bg">
                <h1>Yovel<br><strong class="white">Dein Reisebegleiter Weltweit</strong></h1>
                <div class="button_section"><a class="main_bt" href="#">Read More</a></div>
                <div class="container">
                    <form class="main-form">
                        <h3>Find Your Tour</h3>
                        <div class="row">
                            <div class="col-md-9">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                        <label>Keywords</label>
                                        <input class="form-control" placeholder="" type="text" name="">
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                        <label>Category</label>
                                        <select class="form-control" name="Any">
                                            <option>Beliebig</option>
                                            <option>Natur</option>
                                            <option>Lost-Place</option>
                                            <option>Reisen</option>
                                        </select>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                        <label>Date</label>
                                        <input class="form-control" placeholder="Any" type="date" name="Any">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                                <a href="#">search</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- uberuns -->
<div id="about" class="about">
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="titlepage">
                    <h2>Über das Team</h2>
                    <span> Bier platzhalter </span>
                </div>
            </div>
        </div>
    </div>
    <div class="bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="about-box">
                        <p><span> Hier schreiben wir über uns</span>
                        </p>
                        <div class="palne-img-area">
                            <img src="images/flugzeug.png" alt="images">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="#">Read More</a>
    </div>
</div>
<!-- ende uberuns -->
<!-- Reiseobjekte -->
<div id="travel" class="traveling">
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="titlepage">
                    <h2>Unsere Angebote beim Reisen</h2>
                    <span> --------- </span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="traveling-box">
                    <i><img src="icon/weltkugel-icon.png" alt="icon"/></i>
                    <h3> Verschiedene Länder </h3>
                    <p> Wr bereisen unterschiedliche Länder </p>
                    <div class="read-more">
                        <a href="#">Mehr Lesen</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="traveling-box">
                    <i><img src="icon/berge.png" alt="icon"/></i>
                    <h3>Wanderungen</h3>
                    <p> Große Wanderungen sind bei uns mit dabei </p>
                    <div class="read-more">
                        <a href="#">Mehr Lesen</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="traveling-box">
                    <i><img src="icon/busicon.png" alt="icon"/></i>
                    <h3>Bus Tours</h3>
                    <p> going to use a passage of Lorem Ipsum, you need to be </p>
                    <div class="read-more">
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="traveling-box">
                    <i><img src="icon/urlaubsicon.png" alt="icon"/></i>
                    <h3>Summer Rest</h3>
                    <p> going to use a passage of Lorem Ipsum, you need to be </p>
                    <div class="read-more">
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end traveling -->
<!--Tours -->
<div class="Tours">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Die Bestbewertesten Touren</h2>
                    <span> NONE </span>
                </div>
            </div>
        </div>
        <section id="demos">
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <img class="img-responsive" src="images/#" alt="#"/>
                            <h3>Platz 1</h3>
                            <p>Text</p>
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="images/#" alt="#"/>
                            <h3>Platz 2</h3>
                            <p>Text</p>
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="images/#" alt="#"/>
                            <h3>Platz 3</h3>
                            <p>Text</p>
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="images/#" alt="#"/>
                            <h3>Platz 4</h3>
                            <p>Text</p>
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="images/#" alt="#"/>
                            <h3>Platz 5</h3>
                            <p>Text</p>
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="images/#" alt="#"/>
                            <h3>Platz 6</h3>
                            <p>Text</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<!-- end Tours -->
<!-- Amazing -->
<div class="amazing">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="amazing-box">
                    <h2>Die Gründer Live</h2>
                    <span></span>
                    <a href="https://twitch.tv/freetimeyannik">FreeTimeYannik</a><a href="https://twitch.tv/Fostex91">Fostex</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end Amazing -->
<!-- our blog -->
<div id="blog" class="blog">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Unser Letzer Blog</h2>
                    <span>Das sind unsere Letzen Abendteuer</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="blog-box">
                    <figure><img src="images/#" alt="#"/>
                        <span>4 Feb 2019</span>
                    </figure>
                    <div class="travel">
                        <span>Post  By :  Travel  Agency</span>
                        <p><strong class="Comment"> 0 </strong> Comment</p>
                        <p><strong class="like">0 </strong>Like</p>
                    </div>
                    <h3>Keine Angaben</h3>
                    <p>Zurzeit keine Blogs vorhanden
                    <p>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="blog-box">
                    <figure><img src="images/blog-image.jpg" alt="#"/>
                        <span>10 Feb 2019</span>
                    </figure>
                    <div class="travel">
                        <span>Post  By :  Travel  Agency</span>
                        <p><strong class="Comment"> 06 </strong> Comment</p>
                        <p><strong class="like">05 </strong>Like</p>
                    </div>
                    <h3>Keine Angaben</h3>
                    <p>Zurzeit keine Blogs vorhanden
                    <p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end our blog -->
<!-- footer -->
<footer>
    <div id="contact" class="footer">
        <div class="container">
            <div class="row pdn-top-30">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <ul class="location_icon">
                        <li><a href="#"><img src="icon/facebook.png"></a></li>
                        <li><a href="#"><img src="icon/Twitter.png"></a></li>
                        <li><a href="#"><img src="icon/linkedin.png"></a></li>
                        <li><a href="#"><img src="icon/instagram.png"></a></li>
                    </ul>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="Follow">
                        <h3>Kontakt</h3>
                        <span>Yannik Enslin <br>

                      <br>
                        +49 162 7134729</span>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="Follow">
                        <h3>Wichtige Links</h3>
                        <ul class="link">
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Nutzungsbedinungen</a></li>
                            <li><a href="#"> Privacy policy</a></li>
                            <li><a href="#">News</a></li>
                            <li><a href="#"> Kontaktformular</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="Follow">
                        <h3> Contact</h3>
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <input class="Newsletter" placeholder="Name" type="text">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <input class="Newsletter" placeholder="Email" type="text">
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                <textarea class="textarea" placeholder="comment" type="text">Comment</textarea>
                            </div>
                        </div>
                        <button class="Subscribe">Submit</button>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <p>Copyright 2022 All Right Reserved By <a href="https://yovler.de/">Yovler Community</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- end footer -->
<!-- Javascript files-->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery-3.0.0.min.js"></script>
<script src="js/plugin.js"></script>
<!-- sidebar -->
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/custom.js"></script>
<!-- javascript -->
<script src="js/owl.carousel.js"></script>


</body>
</html>
