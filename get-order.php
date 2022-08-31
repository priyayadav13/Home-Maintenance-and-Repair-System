<?php

session_start();
if(!isset($_SESSION["username"]))

  header("location:login.php");
?> 
<!doctype html>

<html lang="en-US">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>HOME MANAGEMENT AND REPAIR </title>
        <meta name="description" content="Homis - Responsive One Page HTML5 Template">
        <meta name="keywords" content="HTML5, Bootsrtrap, One Page, Responsive, Template, Portfolio" />
        <meta name="author" content="imransdesign.com">

        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Google Fonts  -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet' type='text/css'> <!-- Body font -->
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'> <!-- Navbar font -->

        <!-- Libs and Plugins CSS -->
        <link rel="stylesheet" href="inc/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="inc/animations/css/animate.min.css">
        <link rel="stylesheet" href="inc/font-awesome/css/font-awesome.min.css"> <!-- Font Icons -->
        <link rel="stylesheet" href="inc/owl-carousel/css/owl.carousel.css">
        <link rel="stylesheet" href="inc/owl-carousel/css/owl.theme.css">

        <!-- Theme CSS -->
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/mobile.css">

        <!-- Skin CSS -->
        <link rel="stylesheet" href="css/skin/cool-gray.css">
     </head>

    <body data-spy="scroll" data-target="#main-navbar">
        <div class="page-loader"></div>  <!-- Display loading image while page loads -->
        <div class="body">
        
            <!--========== BEGIN HEADER ==========-->
            <header id="header" class="header-main">

                <!-- Begin Navbar -->
                <nav id="main-navbar" class="navbar navbar-default navbar-fixed-top" role="navigation"> <!-- Classes: navbar-default, navbar-inverse, navbar-fixed-top, navbar-fixed-bottom, navbar-transparent. Note: If you use non-transparent navbar, set "height: 98px;" to #header -->

                  <div class="container">

                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand page-scroll" href="index.php">HOMIS</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a class="page-scroll" href="index.php">Home</a></li>
                            <li><a class="page-scroll" href="#contact-section">Contact</a></li>

                            <li><a class="page-scroll" href="logout.php" onclick="">Log Out</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                  </div><!-- /.container -->
                </nav>
                <!-- End Navbar -->




            </header>
            <!-- ========= END HEADER =========-->
            
              <?php 
            $con = mysqli_connect("localhost", 'root', '', 'homis');
            if(!$con){
                die("Please check your connection");
            }
              echo "i=userID".(getmyuid());
              ?>  

            <!-- Begin prices section -->
            <section id="prices-section" class="page">

               
               <section id="portfolio-section" class="page bg-style1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="portfolio"> 
                                <!-- Begin page header-->
                <div class="page-header-wrapper">
                    <div class="container">
                        <br><br><br><br>
                        <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                            <h2>Please wait ServiceMan reached to you after 30 min</h2>
                            <br><br><br><br>
                            <h2>SELECT OTHER SERVICE</h2>
                            <div class="devider"></div>
                            <p class="subtitle"></p>
                        </div>
                    </div>
                </div>
                <!-- End page header-->
                                <div class="portfoloi_content_area" >
                                    <div class="portfolio_menu" id="filters">
                                        <ul>
                                            <li class="active_prot_menu"><a href="#porfolio_menu" data-filter="*">all</a></li>
                                            <li><a href="#porfolio_menu" data-filter=".popular">Popular</a></li>
                                            <li><a href="#porfolio_menu" data-filter=".cleaning" >Cleaning</a></li>
                                            <li><a href="#porfolio_menu" data-filter=".assembly">Assembly</a></li>
                                            <li><a href="#porfolio_menu" data-filter=".plumbing">Plumbing</a></li>
                                            <li><a href="#porfolio_menu" data-filter=".electrical">Electrical</a></li>
                                            <li><a href="#porfolio_menu" data-filter=".painting">Painting</a></li>
                                                                            
                                        </ul>
                                    </div>
                                    <div class="portfolio_content">
                                        <div class="row"  id="portfolio">
                                            <div class="col-xs-12 col-sm-4 cleaning popular "  onclick="clickMe()">
                                                <div class="portfolio_single_content" >
                                                    <img src="img//portfolio/p1.jpg" alt="title"/>
                                                    <div>
                                                        <a href="service.php?service=cleaning">Home Cleaning</a>
                                                        <span></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 cleaning popular" id="officeCleaning">
                                                <div class="portfolio_single_content">
                                                    <img src="img//portfolio/p2.jpg" alt="title"/>
                                                    <div>
                                                        <a href="service.php?service=cleaning">Office cleaning</a>
                                                        <span></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 cleaning">
                                                <div class="portfolio_single_content">
                                                    <img src="img//portfolio/p3.jpg" alt="title" onclick="condi.php" />
                                                    <div>
                                                        <a href="service.php?service=cleaning">Vacation rentanal cleaning</a>
                                                        <span></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 cleaning">
                                                <div class="portfolio_single_content">
                                                    <img src="img//portfolio/p8.jpg" alt="title"/>
                                                    <div>
                                                        <a href="service.php?service=cleaning">Bedroom cleaning</a>
                                                        <span></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 assembly popular">
                                                <div class="portfolio_single_content">
                                                    <img src="img//portfolio/p19.jpg" alt="title"/>
                                                    <div>
                                                        <a href="service.php?service=assembly">Furniture assembly</a>
                                                        <span></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 plumbing">
                                                <div class="portfolio_single_content">
                                                    <img src="img//portfolio/p5.jpg" alt="title"/>
                                                    <div>
                                                        <a href="service.php?service=plumbing">plumbing services</a>
                                                        <span></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 GraphicDesign popular">
                                                <div class="portfolio_single_content">
                                                    <img src="img//portfolio/p6.jpg" alt="title"/>
                                                    <div>
                                                        <a href="service.php?service=popular">hanging pictures and shelves</a>
                                                        <span></span>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-xs-12 col-sm-4 GraphicDesign popular">
                                                <div class="portfolio_single_content">
                                                    <img src="img//portfolio/p7.png" alt="title"/>
                                                    <div>
                                                        <a href="service.php?service=popular">TV mounting</a>
                                                        <span></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 assembly">
                                                <div class="portfolio_single_content">
                                                    <img src="img//portfolio/p9.jpg" alt="title"/>
                                                    <div>
                                                        <a href="service.php?service=assembly">Bed assembly</a>
                                                        <span></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 assembly">
                                                <div class="portfolio_single_content">
                                                    <img src="img//portfolio/p10.jpg" alt="title"/>
                                                    <div>
                                                        <a href="service.php?service=assembly">Office furniture assembly</a>
                                                        <span></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 painting popular">
                                                <div class="portfolio_single_content">
                                                    <img src="img//portfolio/p4.jpg" alt="title"/>
                                                    <div>
                                                        <a href="service.php?service=painting">interior painting</a>
                                                        <span></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 painting">
                                                <div class="portfolio_single_content">
                                                    <img src="img//portfolio/p11.jpg" alt="title"/>
                                                    <div>
                                                        <a href="service.php?service=painting">Bedroom painting</a>
                                                        <span></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 painting">
                                                <div class="portfolio_single_content">
                                                    <img src="img//portfolio/p12.jpg" alt="title"/>
                                                    <div>
                                                        <a href="service.php?service=painting">Accent wall painting </a>
                                                        <span></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 electrical">
                                                <div class="portfolio_single_content">
                                                    <img src="img//portfolio/p13.jpg" alt="title"/>
                                                    <div>
                                                        <a href="service.php?service=electrical">Outlet installation</a>
                                                        <span></span>
                                                    </div>
                                                </div>
                                            </div>
                                             <div class="col-xs-12 col-sm-4 electrical">
                                                <div class="portfolio_single_content">
                                                    <img src="img//portfolio/p14.jpg" alt="title"/>
                                                    <div>
                                                        <a href="service.php?service=electrical">Light fixture </a>
                                                        <span></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 electrical">
                                                <div class="portfolio_single_content">
                                                    <img src="img//portfolio/p15.jpg" alt="title"/>
                                                    <div>
                                                        <a href="service.php?service=electrical">Electrical service</a>
                                                        <span></span>
                                                    </div>
                                                </div>
                                            </div><div class="col-xs-12 col-sm-4 plumbing">
                                                <div class="portfolio_single_content">
                                                    <img src="img//portfolio/p16.jpg" alt="title"/>
                                                    <div>
                                                        <a href="service.php?service=electrical">Faucet replacement</a>
                                                        <span></span>
                                                    </div>
                                                </div>
                                            </div><div class="col-xs-12 col-sm-4 plumbing">
                                                <div class="portfolio_single_content">
                                                    <img src="img//portfolio/p18.jpg" alt="title"/>
                                                    <div>
                                                        <a href="service.php?service=electrical">plumbing services</a>
                                                        <span></span>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                            <div class="col-xs-12 col-sm-4 cleaning">
                                                <div class="portfolio_single_content">
                                                    <img src="img//portfolio/p20.jpg" alt="title"/>
                                                    <div>
                                                        <a href="service.php?service=cleaning">Maid service</a>
                                                        <span></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 cleaning">
                                                <div class="portfolio_single_content">
                                                    <img src="img//portfolio/p21.jpg" alt="title"/>
                                                    <div>
                                                        <a href="service.php?service=cleaning">Kitchen cleaning</a>
                                                        <span></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 cleaning">
                                                <div class="portfolio_single_content">
                                                    <img src="img//portfolio/p22.jpg" alt="title"/>
                                                    <div>
                                                        <a href="service.php?service=cleaning">Same day cleaning</a>
                                                        <span></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 cleaning">
                                                <div class="portfolio_single_content">
                                                    <img src="img//portfolio/p23.jpg" alt="title"/>
                                                    <div>
                                                        <a href="service.php?service=cleaning">Deep cleaning service</a>
                                                        <span></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 cleaning">
                                                <div class="portfolio_single_content">
                                                    <img src="img//portfolio/p24.jpg" alt="title"/>
                                                    <div>
                                                        <a href="service.php?service=cleaning">Room cleaning</a>
                                                        <span></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 cleaning">
                                                <div class="portfolio_single_content">
                                                    <img src="img//portfolio/p25.jpg" alt="title"/>
                                                    <div>
                                                        <a href="service.php?service=cleaning">Home sanitization</a>
                                                        <span></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 assembly ">
                                                <div class="portfolio_single_content">
                                                    <img src="img//portfolio/p26.jpg" alt="title"/>
                                                    <div>
                                                        <a href="service.php?service=assembly">Desk Assembly</a>
                                                        <span></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 plumbing ">
                                                <div class="portfolio_single_content">
                                                    <img src="img//portfolio/p27.jpg" alt="title"/>
                                                    <div>
                                                        <a href="service.php?service=plumbing">Toilet repair and installation</a>
                                                        <span></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 painting ">
                                                <div class="portfolio_single_content">
                                                    <img src="img//portfolio/p28.jpg" alt="title"/>
                                                    <div>
                                                        <a href="service.php?service=painting">Home Painting</a>
                                                        <span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </section> 
            <!-- Begin contact section -->
            <section id="contact-section" class="page text-white parallax" data-stellar-background-ratio="0.5" style="background-image: url(img/map-bg.jpg);">
            <div class="cover"></div>
            
                 <!-- Begin page header-->
                <div class="page-header-wrapper">
                    <div class="container">
                        <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                            <h2>Contacts</h2>
                            <div class="devider"></div>
                            <p class="subtitle">All to contact us</p>
                        </div>
                    </div>
                </div>
                <!-- End page header-->
                
                <div class="contact wow bounceInRight" data-wow-delay="0.4s">
                    <div class="container">
                        <div class="row">
                        
                            <div class="col-sm-6">
                                <div class="contact-info">
                                    <h4>Our Address</h4>
                                    <ul class="contact-address">
                                        <li><i class="fa fa-map-marker fa-lg"></i>&nbsp;Government polytechniqe for girls college<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Athwagate , Surat</li>
                                        <li><i class="fa fa-phone"></i>&nbsp; +91 7359325496</li>
                                        <li><i class="fa fa-print"></i>&nbsp; +91 6354753721</li>
                                        <li><i class="fa fa-envelope"></i> abc@gmail.com</li>
                                        <li><i class="fa fa-skype"></i> GPG project</li>
                                    </ul>
                                </div>
                            </div>
                        
                            <div class="col-sm-6">
                                <div class="contact-form">
                                    <h4>Write to us</h4>
                                    <form role="form">
                                        <div class="form-group">
                                            <input type="text" class="form-control input-lg" placeholder="Your Name" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control input-lg" placeholder="E-mail" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control input-lg" placeholder="Subject" required>
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control input-lg" rows="5" placeholder="Message" required></textarea>
                                        </div>
                                        <button type="submit" class="btn wow bounceInRight" data-wow-delay="0.8s">Send</button>
                                    </form>
                                </div>  
                            </div>
                                                                                
                        </div> <!-- /.row -->
                    </div> <!-- /.container -->
                </div>
            </section>
            <!-- End contact section -->
                
                    
        
        
        <!-- Plugins JS -->
        <script src="inc/jquery/jquery-1.11.1.min.js"></script>
        <script src="inc/bootstrap/js/bootstrap.min.js"></script>
        <script src="inc/owl-carousel/js/owl.carousel.min.js"></script>
        <script src="inc/stellar/js/jquery.stellar.min.js"></script>
        <script src="inc/animations/js/wow.min.js"></script>
        <script src="inc/waypoints.min.js"></script>
        <script src="inc/isotope.pkgd.min.js"></script>
        <script src="inc/classie.js"></script>
        <script src="inc/jquery.easing.min.js"></script>
        <script src="inc/jquery.counterup.min.js"></script>
        <script src="inc/smoothscroll.js"></script>

        <!-- Theme JS -->
        <script src="js/theme.js"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>
        $(document).ready(function(){
          $("button").click(function(){
            $.post("servicePro_filter.php",
            {
              service: "$service"
            },
            function(data,status){
                $('#name').html(data);
                $('#con').html(data);
                $('#mail').html(data);
                $('#add').html(data);
                $('#pin').html(data);
              alert(""+status);
            });
          });
        });
        </script>

    </body> 
        
            
</html>
