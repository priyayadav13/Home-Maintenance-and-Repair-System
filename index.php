<!doctype html>
<html lang="en-US">
	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>HOME MANAGEMENT AND REPAIR </title>
		<meta name="description" content="Unika - Responsive One Page HTML5 Template">
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
        <!-- <link rel="stylesheet" href="css/skin/ice-blue.css"> -->
        <!-- <link rel="stylesheet" href="css/skin/summer-orange.css"> -->
        <!-- <link rel="stylesheet" href="css/skin/fresh-lime.css"> -->
        <!-- <link rel="stylesheet" href="css/skin/night-purple.css"> -->

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
        

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
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand page-scroll" href="index.html">HOMIS</a>
                    </div>
                     
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a class="page-scroll" href="#portfolio-section">Services</a></li>
                            <li><a class="page-scroll" href="#contact-section">Contact</a></li>
                            <li><a class="page-scroll" href="#" onclick="openForm()">Log in</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                  </div><!-- /.container -->
                </nav>
                <!-- End Navbar -->
                <div class="form-popup" id="myForm">
                  <form class="form-container" action="login.php">
                    <h1>Login As</h1>
                     <button type="submit" class="user">User</button>
                     <button type="submit" class="sp">Service provider</button>
                    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
                  </form>
                </div>
            </header>
            <!-- ========= END HEADER =========-->
            
            
            
            
        	<!-- Begin text carousel intro section -->
			<section id="text-carousel-intro-section" class="parallax" data-stellar-background-ratio="0.5" style="background-image: url(img/slider-bg.jpg);">
				
				<div class="container">
					<div class="caption text-center text-white" data-stellar-ratio="0.7">

						<div id="owl-intro-text" class="owl-carousel">
							<div class="item">
								<h1>I'm Homis</h1>
								<p>One Page Responsive Services</p>
                                <div class="extra-space-l"></div>
								<a class="btn btn-blank" href="https://creativemarket.com/Themetorium" target="_blank" role="button">View More!</a>
							</div>
							<div class="item">
								<h1>Join with us</h1>
								<p>To the greatest Journey</p>
								<div class="extra-space-l"></div>
								<a class="btn btn-blank" href="https://creativemarket.com/Themetorium" target="_blank" role="button">View More!</a>
							</div>
							<div class="item">
								<h1>CUSTOMER REVIEWS</h1>
								<p>Nothing to complain. A good guy with good service. Hope to have him sent the next service order.</p>
								<div class="extra-space-l"></div>
								<a class="btn btn-blank" href="https://creativemarket.com/Themetorium" target="_blank" role="button">View More!</a>
							</div>
						</div>

					</div> <!-- /.caption -->
				</div> <!-- /.container -->

			</section>
			<!-- End text carousel intro section -->
                
                
                
                
            <!-- Begin Portfolio -->
            <section id="portfolio-section" class="page bg-style1">
            	<div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="portfolio">
                                <!-- Begin page header-->
                                <div class="page-header-wrapper">
                                    <div class="container">
                                        <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                                            <h2>SERVICES</h2>
                                            <div class="devider"></div>
                                            <p class="subtitle">What can our home improvement professionals do for you?</p>
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
            <!-- End portfolio -->
                 
            <!-- Begin social section -->
			<section id="social-section">
            
                 <!-- Begin page header-->
                <div class="page-header-wrapper">
                    <div class="container">
                        <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                            <h2>Join Us</h2>
                            <div class="devider"></div>
                            <p class="subtitle">Follow us on social networks</p>
                        </div>
                    </div>
                </div>
                <!-- End page header-->
                
                <div class="container">
                	<ul class="social-list">
                		<li> <a href="#" class="rotate-box-1 square-icon text-center wow zoomIn" data-wow-delay="0.3s"><span class="rotate-box-icon"><i class="fa fa-facebook"></i></span></a></li>
                		<li> <a href="#" class="rotate-box-1 square-icon text-center wow zoomIn" data-wow-delay="0.4s"><span class="rotate-box-icon"><i class="fa fa-twitter"></i></span></a></li>
                		<li> <a href="#" class="rotate-box-1 square-icon text-center wow zoomIn" data-wow-delay="0.5s"><span class="rotate-box-icon"><i class="fa fa-google-plus"></i></span></a></li>
                		<li> <a href="#" class="rotate-box-1 square-icon text-center wow zoomIn" data-wow-delay="0.6s"><span class="rotate-box-icon"><i class="fa fa-pinterest-p"></i></span></a></li>
                		<li> <a href="#" class="rotate-box-1 square-icon text-center wow zoomIn" data-wow-delay="0.7s"><span class="rotate-box-icon"><i class="fa fa-tumblr"></i></span></a></li>
                		<li> <a href="#" class="rotate-box-1 square-icon text-center wow zoomIn" data-wow-delay="0.8s"><span class="rotate-box-icon"><i class="fa fa-dribbble"></i></span></a></li>                      
                    </ul>
                </div>
                
            </section>
            <!-- End social section -->
                
                
                
                
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
			                            <li><i class="fa fa-map-marker fa-lg"></i>&nbsp;Government polytechniqe for girls college<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Athwagate , surat</li>
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
                
                

                
            <!-- Begin footer -->
            <footer class="text-off-white">
            
                <div class="footer-top">
                	<div class="container">
                    	<div class="row wow bounceInLeft" data-wow-delay="0.4s">

                            <div class="col-sm-6 col-md-4">
                            	<h4>Useful Links</h4>
                                <ul class="imp-links">
                                	<li><a href="">About</a></li>
                                	<li><a href="">Services</a></li>
                                	<li><a href="">Press</a></li>
                                	<li><a href="">Copyright</a></li>
                                	<li><a href="">Advertise</a></li>
                                	<li><a href="">Legal</a></li>
                                </ul>
                            </div>
                        
                        	<div class="col-sm-6 col-md-4">
                                <h4>Subscribe</h4>
                            	<div id="footer_signup">
                                    <div id="email">
                                        <form id="subscribe" method="POST">
                                            <input type="text" placeholder="Enter email address" name="email" id="address" data-validate="validate(required, email)"/>
                                            <button type="submit">Submit</button>
                                            <span id="result" class="section-description"></span>
                                        </form> 
                                    </div>
                                </div> 
                                <p></p> 
                            </div>

                            <div class="col-sm-12 col-md-4">
                                <h4>Recent Tweets</h4>
                                <div class="single-tweet">
                                    <div class="tweet-content"><span>@Unika</span> Excepteur sint occaecat cupidatat non proident</div>
                                    <div class="tweet-date">1 Hour ago</div>
                                </div>
                                <div class="single-tweet">
                                    <div class="tweet-content"><span>@Unika</span> Excepteur sint occaecat cupidatat non proident uku shumaru</div>
                                    <div class="tweet-date">1 Hour ago</div>
                                </div>
                            </div>
                            
                        </div> <!-- /.row -->
                    </div> <!-- /.container -->
                </div>
                
                <div class="footer">
                    <div class="container text-center wow fadeIn" data-wow-delay="0.4s">
                        <p class="copyright">Copyright &copy; 2015 - Designed By <a href="https://www.behance.net/poljakova" class="theme-author">Veronika Poljakova</a> &amp; Developed by <a href="http://www.imransdesign.com/" class="theme-author">Imransdesign</a></p>
                    </div>
                </div>

            </footer>
            <!-- End footer -->

            <a href="#" class="scrolltotop"><i class="fa fa-arrow-up"></i></a> <!-- Scroll to top button -->
                                              
        </div><!-- body ends -->
        
        
        
        
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
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>
        $(document).ready(function(){
          $("button").click(function(){
            $.post("servicePro_filter.php",
            {
              name: "Donald Duck",
              city: "Duckburg"
            },
            function(data,status){
                $('#').html(data);
              alert("Data: " + data + "\nStatus: " + status);
            });
          });
        });
        </script> -->

        <script>
            function openForm() {
              document.getElementById("myForm").style.display = "block";
            }

            function closeForm() {
              document.getElementById("myForm").style.display = "none";
            }
        
        </script>

    </body> 
        
            
</html>
