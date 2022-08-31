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
                      <a class="navbar-brand page-scroll" href="index1.html">HOMIS</a>
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
            
                

            <!-- Begin prices section -->
            <section id="prices-section" class="page">

                <!-- Begin page header-->
                <div class="page-header-wrapper">
                    <div class="container">
                        <br><br><br><br>
                        <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                            <h2 id="txt">BEST SERVICE PROVIDERS</h2>
                            <div class="devider"></div>
                            <p class="subtitle"></p>
                        </div>
                    </div>
                </div>
                <!-- End page header-->

                <div class="extra-space-l"></div>

                <?php
                    require("config.php");
                    if (isset($_GET['service'])) {
                        $service=$_GET["service"];
                        $json=array();

                        $sql = "SELECT *FROM service_provider WHERE service='$service'";
                        $result=mysqli_query($conn,$sql);

                        if(mysqli_num_rows($result)>0)
                        {
                            while($row=mysqli_fetch_assoc($result)){
                                
                        ?>
    <section id="prices-section" class="page">
                <!-- Begin list -->
                <div class="prices">
                    <div class="container">
                        <div class="row">
                            
                            <div class="price-box col-sm-6 col-md-3 wow flipInY" data-wow-delay="0.3s">
                                <div class="panel panel-default">
                                    <div class="panel-heading text-center">
                                        <i class="fa fa-user fa-7x"></i>
                                        
                                    </div>
                                    <div class="panel-body text-center">
                                        <h1 id="name"><strong><?php echo $row["name"]; ?></strong></h1>
                                    </div>
                                    <ul class="list-group text-center">
                                        <li class="list-group-item" id="con"><?php echo $row["contact_no"]; ?></li>
                                        <li class="list-group-item" id="mail"><?php echo $row["email_id"]; ?></li>
                                        <li class="list-group-item" id="add"><?php echo $row["address"]; ?></li>
                                        <li class="list-group-item" id="city"><?php echo $row["city"]; ?></li>
                                        <li class="list-group-item" id="pin"><?php echo $row["pin_code"]; ?></li>
                                    </ul>

                                    <div class="panel-footer text-center">
                                        <a class="btn btn-default" href="get-order.php" onclick="showUser(this.value)">Book</a>
                                    </div>
                              </div>                                      
                            </div>

                        </div> <!-- /.row -->
                    </div> <!-- /.container -->
                </div>
                <div class="extra-space-l"></div>
            </section>
                <?php
                                  array_push($json,$row);
                        }
                                            }else {
                        echo "0 result";
                    }
                }
                ?>
                
            </section>
            <!-- End prices section -->
            

             
                
            <!-- Begin about section -->
			<section id="about-section" class="page bg-style1">
                <!-- Begin page header-->
                <div class="page-header-wrapper">
                    <div class="container">
                        <div class="page-header text-center wow fadeInUp" data-wow-delay="0.3s">
                            <h2>How Homis Works</h2>
                            <div class="devider"></div>
                            <p class="subtitle">little information</p>
                        </div>
                    </div>
                </div>
                <!-- End page header-->

                <!-- Begin rotate box-1 -->
                <div class="rotate-box-1-wrapper" style="width: 1450px;">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 col-sm-6 " style="width:32%;">
                                <a href="#" class="rotate-box-1 square-icon wow zoomIn" data-wow-delay="0">
                                    <span class="rotate-box-icon"><i class="fa fa-clock-o"></i></span>
                                    <div class="rotate-box-info">
                                        <h4>Pick a Time</h4>
                                        <p>Select the day and time for your service and get instant, affordable pricing.</p>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-3 col-sm-6" style="width:32%;">
                                <a href="#" class="rotate-box-1 square-icon wow zoomIn" data-wow-delay="0.2s">
                                    <span class="rotate-box-icon"><i class="fa fa-mobile" style="" ></i></span>
                                    <div class="rotate-box-info">
                                        <h4>Book instantly</h4>
                                        <p>We'll confirm your appointment and take care of payment electronically and securely.</p>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-3 col-sm-6" style="width:32%;">
                                <a href="#" class="rotate-box-1 square-icon wow zoomIn" data-wow-delay="0.4s">
                                    <span class="rotate-box-icon"><i class="fa fa-users"></i></span>
                                    <div class="rotate-box-info">
                                        <h4>Your pro arrives</h4>
                                        <p>An experienced, fully-equipped professional will show up on time at your doorstep.</p>
                                    </div>
                                </a>
                            </div>
                            
                                            
                        </div> <!-- /.row -->
                    </div> <!-- /.container -->
                </div>
                <!-- End rotate box-1 -->
                
                <div class="extra-space-l"></div>
                
               
                        
              <!-- Begin cta -->
          <section id="cta-section">
            <div class="cta">
                <div class="container">
                    <div class="row">
                    
                        <div class="col-md-9">
                            <h1>Repair, Replacement or New Installation - Call +91-962-436-6669</h1>
                            <p></p>
                        </div>
                        
                        <div class="col-md-3">
                            <div class="cta-btn wow bounceInRight" data-wow-delay="0.4s">
                        <a class="btn btn-default btn-lg" href="http://www.imransdesign.com/" target="_blank" role="button">Book now</a>
                            </div>
                        </div>
                        
                    </div> <!-- /.row -->
                </div> <!-- /.container -->
            </div>
          </section>
          <!-- End cta -->

              
            <!-- Begin Services -->
            <section id="services-section" class="page text-center">
                <!-- Begin page header-->
                <div class="page-header-wrapper">
                    <div class="container">
                        <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                            <h2>The Trusted Name in Homis Service</h2>
                            <div class="devider"></div>
                            <p class="subtitle">what we really know how</p>
                        </div>
                    </div>
                </div>
                <!-- End page header-->
            
                <!-- Begin roatet box-2 -->
                <div class="rotate-box-2-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <a href="#" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0">
                                    <span class="rotate-box-icon"><i class="fa fa-certificate"></i></span>
                                    <div class="rotate-box-info">
                                        <h4>Experienced</h4>
                                        <p>When you book a Homis through the Handy platform, they'll arrive with a wealth of experience and expertise. From home repair tasks to odd jobs and general labor, a professional Homis will have the know-how and the can-do to get your place looking brand new. In addition to bringing their experience, your Homis will bring all the tools required to get the job done. All you need to do is tell us your address and a few details about the job into the booking request form, and we’ll connect you with an experienced Homis who’s done plenty of jobs like yours.</p>
                                    </div>
                                </a>
                            </div>
            
                            <div class="col-md-3 col-sm-6">
                                <a href="#" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.2s">
                                    <span class="rotate-box-icon"><i class="fa fa-wrench"></i></span>
                                    <div class="rotate-box-info">
                                        <h4>Skilled and Capable</h4>
                                        <p>When you book Homis service through Handy, you want to know that they are experienced and capable enough to deal with the job at hand. That’s why we ensure every professional on the Handy platform is rated and reviewed by their past customers. The requirements of different home repair jobs are never quite the same, and so we ensure that we connect you with the best Homis professionals that are able to handle your particular job.</p>
                                    </div>
                                </a>
                            </div>
            
                            <div class="col-md-3 col-sm-6">
                                <a href="#" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.4s">
                                    <span class="rotate-box-icon"><i class="fa fa-check-square-o"></i></span>
                                    <div class="rotate-box-info">
                                        <h4>Reliable</h4>
                                        <p>When you hire Homis services, you need to be sure that the team is going to turn up on time. Nothing is more frustrating than being given an 8 hour arrival window, forcing you to take a day off of work to sit around and wait. And nothing is more frustrating than a last minute cancellation.  When you book Homis services through Handy, you can be sure that they'll arrive at the time you request. We’ll connect you with the right people for the job so you can worry about the things that really need your attention—not fixing that light fixture.</p>
                                    </div>
                                </a>
                            </div>
                            
                            <div class="col-md-3 col-sm-6">
                                <a href="#" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.6s">
                                    <span class="rotate-box-icon"><i class="fa fa-crosshairs"></i></span>
                                    <div class="rotate-box-info">
                                        <h4>Flexible</h4>
                                        <p>When you purchase Homis services through the Handy platform, it’s hard to know every detail and requirement up front. That’s why it always helps to have a Homis service professional who is able to react and respond to your job’s needs, whatever they might be. It turns out, when you’ve done as many Homis tasks and home repair jobs as the Homis professionals on the Handy platform, you get pretty adaptable. We’re confident that we’ll be able to connect you with a Homis whose skills suit both your needs and your budget.</p>
                                    </div>
                                </a>
                            </div>
                            
                        </div> <!-- /.row -->
                    </div> <!-- /.container -->
                    
                    <div class="container">
                        <!-- Cta Button -->
                        <div class="extra-space-l"></div>
                        <div class="text-center">
                    		<a class="btn btn-default btn-lg-xl" href="http://www.imransdesign.com/" target="_blank" role="button">Get started</a>
                        </div>
                    </div> <!-- /.container -->                       
                </div>
                <!-- End rotate-box-2 -->
            </section>
            <!-- End Services -->
              
              
            <!-- Begin testimonials -->
            <section id="testimonial-section">
                <div id="testimonial-trigger" class="testimonial text-white parallax" data-stellar-background-ratio="0.5" style="background-image: url(img/testimonial-bg.jpg);">
                    <div class="cover"></div>
                    <!-- Begin page header-->
                    <div class="page-header-wrapper">
                        <div class="container">
                            <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                                <h2>The Best Homis Service</h2>
                                <div class="devider"></div>
                            </div>
                        </div>
                    </div>
                    <!-- End page header-->
                    <div class="container">
                        <div class="testimonial-inner center-block text-center">
                            <div id="owl-testimonial" class="owl-carousel">
                                <div class="item">
                                    <blockquote>
                                        <header><cite title="Source Title">Save Time and Money with a Top-Rated Homis</cite></header>
                                        <br><br><br><p style="line-height: 1.5;">"Professionals offering Homis services through Handy come with a wealth of skill and experience. This means that you can book a versatile Homis who can take care of a variety of jobs at the time that's best for you. Rather than spending your Saturday morning trying to find studs in your walls or questioning whether you can trust the guy at the hardware store to give you good advice, why not use the Handy platform to hire a Homis who can deal with everything? Whether you need urgent help for home repairs, or just a few odd jobs taken care of, using Handy to book a general contractor or Homis can help you save both time and money."</p>
                            
                                    </blockquote>
                                </div>
                                <div class="item">
                                    <blockquote>
                                        <header><cite title="Source Title">No Need for Tools</cite></header>
                                        <br><br><br>
                                        <p>"Many an amateur DIY enthusiast has spotted a job that needs doing and gone out to buy the appropriate tools, only to find that they're way out of their league. Book a Homis using the Handy app or website and you can be sure that they'll arrive with everything they’ll need to get the job done. In addition to your run-of-the-mill screwdrivers and hammers, your Homis specialist will read your job description before they arrive to ensure they come prepared for anything that your specific job may require. Don't worry about whether you’ve got the right tools for the job. Book a Homis through Handy and leave it to the professionals."</p>
                                        
                                    </blockquote>
                                </div>
                                <div class="item">
                                    <blockquote>
                                        <header><cite title="Source Title">Your Time is Precious</cite></header>
                                        <br><br><br>
                                        <p style="line-height: 1.5;">"Whether you’re a busy professional or a stay-at-home parent, Handy knows that your time is precious. When you book Homis services through Handy, you can be sure that they’ll show up on time and ready to take care of your Homis tasks as quickly and efficiently as possible. You’ll find them fully equipped and with all the necessary skills to get things done. In the meantime, you can use that time to get some extra work done or take the kids down to the park. Using Handy means that your odd jobs and home repairs get done, while you focus on the important things in life."</p>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End testimonials -->
                    
                
            <!-- Begin team-->
            <section id="team-section" class="page">
                <!-- Begin page header-->
                <div class="page-header-wrapper">
                    <div class="container">
                        <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                            <h2>Our Team</h2>
                            <div class="devider"></div>
                            <p class="subtitle">Meat our experts</p>
                        </div>
                    </div>
                </div>
                <!-- End page header-->
                <div class="container">
                    <div class="row">
                        <div class="team-items">
                            <div class="col-md-2">
                                <div class="team-container wow bounceIn" data-wow-delay="0.2s">
                                    <div class="team-item">
                                        <div class="team-triangle">
                                            <div class="content">
                                                <img src="img/team/1.png" alt="title"/>
                                                <div class="team-hover text-center">
                                                    <i class="fa fa-male"></i>
                                                    <p>Vibhuti</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="team-container wow bounceIn" data-wow-delay="0.3s">
                                    <div class="team-item">
                                        <div class="team-triangle">
                                            <div class="content">
                                                <img src="img/team/1.png" alt="title"/>
                                                <div class="team-hover text-center">
                                                    <i class="fa fa-female"></i>
                                                    <p>Rina</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="team-container wow bounceIn" data-wow-delay="0.4s">
                                    <div class="team-item">
                                        <div class="team-triangle">
                                            <div class="content">
                                                <img src="img/team/1.png" alt="title"/>
                                                <div class="team-hover text-center">
                                                    <i class="fa fa-male"></i>
                                                    <p>Dhara Kosada </p>
                                                </div>
                                            </div>  
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                            <div class="col-md-2">
                                <div class="team-container wow bounceIn" data-wow-delay="0.5s">
                                    <div class="team-item">
                                        <div class="team-triangle">
                                            <div class="content">
                                                <img src="img/team/1.png" alt="title"/>
                                                <div class="team-hover text-center">
                                                    <i class="fa fa-male"></i>
                                                    <p>Padmini Kamble</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="clearfix"></div>
                        </div>  
                    </div>
                </div>

            </section>
            <!-- End team-->
            
                
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
