<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FGIC Bank</title>
    <!--Bootstrap4 CDN-->
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@400;500;600&display=swap" rel="stylesheet"> 
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <!--Css file-->
    <link rel="stylesheet" href="style.css" type="text/css" media="all">
</head>

<body>
    <!--Navigation Bar-->
    <nav class="navbar navbar-expand-md bg-dark navbar-dark py-0">
        <!-- Brand -->
        <a class="navbar-brand" href="index.php"><img src="assests\logo.gif" id="logo"></a>

        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#aboutus">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contactus">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Login</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Carousel -->

    <div class="carousel-container">
        <div id="carouselCaptions" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselCaptions" data-slide-to="1"></li>
                <li data-target="#carouselCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assests\pexels-energepiccom-2988232.jpg" class="" alt="Visa Card">
                    <div class="carousel-caption">
                        <h5>Visa Cards</h5>
                        <p>Our Atms are located all over the World</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assests\pexels-maitree-rimthong-1602726.jpg" class="" alt="Safe Deposits">
                    <div class="carousel-caption">
                        <h5>Safe Deposits</h5>
                        <p>Leave your money with us & feel safe</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assests\pexels-negative-space-34577.jpg" class="" alt="Online Banking">
                    <div class="carousel-caption">
                        <h5>Online Banking</h5>
                        <p>Hassle free Banking with our online services</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    
    <!-- About US -->
    <div class="container" id="aboutus">
        <div class="col-lg-12 text-center introduction">
            <h1 class="mb-5">About US</h1>
            <p>FGIC is a New York stock insurance corporation licensed under Article 69 of the New York Insurance Law.   FGIC emerged from its rehabilitation proceeding on August 19, 2013, and is required to conduct its business in accordance with the First Amended Plan of Rehabilitation for FGIC dated June 4, 2013.</p>
            <p>Financial Guaranty Insurance Company (“FGIC”) may from time to time post documents related to selected legal proceedings in which it is a plaintiff.   FGIC is not undertaking an obligation to post all documents for the proceedings listed or an obligation to revise or update them to reflect changes in events or expectations.   FGIC makes no representation that the listed proceedings include all material proceedings in which it is a plaintiff.   The complete official court docket can be publicly accessed by contacting the clerk’s office of the respective court(s) where each litigation is pending. </p>
        </div>
    </div>

    <!--contact us-->
    
    <div class="jumbotron jumbotron-fluid">
            <div class="container" id="contactus">
                <div class="row"><!--Online shoppping-->
                    <div class="col-lg-3">
                        <ul class="contact-list">
                        <li class="list-head"><a href="#">ONLINE FACILITIES</a></li><br>
                        <li class="list-item"><a href="#">Correspondent Banks</a></li>
                        <li class="list-item"><a href="#">Email Statements</a></li>
                        <li class="list-item"><a href="#">Generate Pin</a></li>
                        <li class="list-item"><a href="#">Sms Facility</a></li>
                        <li class="list-item"><a href="#">Phone Banking</a></li>
                        <li class="list-item"><a href="#">Gift Cards</a></li>    
                        <li class="list-item"><a href="#">Mobile Banking<span class="badge badge-danger badge-pill ml-2">New</span></a></li>    
                        </ul>
                    </div><!--Second List Online Shopping-->
                    <div class="col-lg-2">
                        <ul class="contact-list">
                        <li class="list-head"><a href="#">Useful Links</a></li><br>
                        <li class="list-item"><a href="#">Contact Us</a></li>
                        <li class="list-item"><a href="#">Discounts & Offers</a></li>
                        <li class="list-item"><a href="#">Holidays</a></li>
                        <li class="list-item"><a href="#">Terms of Use</a></li>
                        <li class="list-item"><a href="#">Key Financials</a></li>
                        <li class="list-item"><a href="#">Rbi Advisory</a></li>    
                        <li class="list-item"><a href="#">Cancellation</a></li>
                        <li class="list-item"><a href="#">Returns</a></li>
                        <li class="list-item"><a href="#">Press Room</a></li>
                        <li class="list-item"><a href="#">Blog</a></li>
                        <li class="list-item"><a href="#">Careers</a></li>    
                        </ul>
                    </div><!--App links & images -->
                    <div class="col-lg-4">
                        <ul class="contact-list"><!--Heading of App Links-->
                            <li class="list-head"><a href="#">EXPERIENCE FGIC APP ON MOBILE</a></li>
                        </ul><!--APP LINKS-->
                        <ul class="app-link mt-n3"><br>
                        <li><a href="#"><img src="socialmedia/googleplay.jpg" alt="PLAY LINK"/></a></li>
                        <li><a href="#"><img src="socialmedia/appstore.jpg" alt="APP STORE"/></a></li>    
                        </ul><!--Social Media-->
                        <ul class="contact-list mt-4"> 
                        <li class="list-head"><a href="#">KEEP IN TOUCH</a></li>
                        </ul><!--LINKS-->
                        <ul class="app-link mt-n1">
                        <span class="fa fa-facebook-official"></span>
                        <span class="fab fa-twitter"></span>
                        <span class="fab fa-youtube"></span>
                        <span class="fab fa-instagram"></span>    
                        </ul>
                    </div><!--30 days policy -->
                    <div class="col-lg-3">
                        <ul class="policy mt-4" style="list-style: none;word-spacing: 1px;letter-spacing: 0.5px;">
                            <li><img src="socialmedia/original.jpg" alt="original"/><b> 100% ORIGINAL</b> gurantee<br> for all products at myntra.com</li>
                            <li class="mt-4"><img src="socialmedia/return.jpg" alt="30 days return"/><b> Return within 30days</b> of<br> receiving your order</li>
                            <li class="mt-4"><img src="socialmedia/freedelivery.jpg" alt="free delivery"/><b> Get free delivery</b> for every<br> order above Rs. 1199</li>
                        </ul>
                    </div>
                </div>    
            </div>
        </div>
    <!--Script files-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
</body>

</html>