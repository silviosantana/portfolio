<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Freelancer - Start Bootstrap Theme</title>

    <!-- Bootstrap Core CSS -->
    <!--<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">-->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"> 

    <!-- Theme CSS -->
    <link href="css/freelancer.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <!--<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">-->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top">Silvio Santana</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#portfolio">Portfolio</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about">About</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact">Contact</a>
                    </li>
					<!--<li class="page-scroll">
                        <a href="files/resumept.pdf" target="_blank">Resume</a>
                    </li>-->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive" src="img/silvio.png" alt="">
                    <div class="intro-text">
                        <span class="name">Silvio Santana</span>
                        <hr class="star-light">
                        <span class="skills"><i>"Be the change that you wish to see in the world."</i> - <small>Mahatma Gandhi<small></span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Portfolio Grid Section -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Portfolio</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/nazar/nazar.jpg" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-6 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/uwminternational/uwminternational.jpg" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-6 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/myshelf/myshelf.jpg" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-6 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/electronics/electronics.jpg" class="img-responsive" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>About</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2">
					<p>Computer Engineering Student interested on software development, hardware design, web and mobile development, embedded systems, Internet of Things and so on. Lover of technology and the positive impact it can bring to society, improving peoples lives.</p>
                </div>
                <div class="col-lg-4">
                    <p>A dreamer of a better world where people truly love and respect each other. Enjoy books, tv shows, and movies. However, would change all of those to spend some time hanging out with friends. Want to travel the world.</p>
                </div>
                <!--<div class="col-lg-8 col-lg-offset-2 text-center">
                    <a href="#" class="btn btn-lg btn-outline">
                        <i class="fa fa-download"></i> Download Theme
                    </a>
                </div> -->
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Contact Me</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Email Address</label>
                                <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Phone Number</label>
                                <input type="tel" class="form-control" placeholder="Phone Number" id="phone" required data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Message</label>
                                <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Location</h3>
                        <p>Recife - PE
                            <br>Brazil</p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Around the Web</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="https://www.facebook.com/silviosantana28" target="_blank" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="https://plus.google.com/105224774209790309836/posts" target="_blank" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/in/silvio-santana-558a79ab?trk=hp-identity-name" target="_blank" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="http://lattes.cnpq.br/8612936426910669" title="Lattes" target="_blank" class="btn-social btn-outline"><i class="fa fa-fw fa fa-eye"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>About This Page</h3>
                        <p>Web page of personal and professional information about Silvio Santana. For more, reach out by Contact Me area or social media.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; Silvio Santana
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <!-- Portfolio Modals -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Nazar Project</h2>
                            <hr class="star-primary">
                            
							<div id="myCarouselNazar" class="carousel slide">
								<!-- Indicators -->
								<ol class="carousel-indicators">
									<li data-target="#myCarouselNazar" data-slide-to="0" class="active"></li>
									<li data-target="#myCarouselNazar" data-slide-to="1"></li>
								</ol>

								<!-- Wrapper for Slides -->
								<div class="carousel-inner">
									<div class="item active">
										<!-- Set the first background image using inline CSS below. -->
										<div class="fill" style="background-image:url('img/portfolio/nazar/nazar3.jpg');"></div>
										<div class="carousel-caption">
											<h2></h2>
										</div>
									</div>
									<div class="item">
										<!-- Set the second background image using inline CSS below. -->
										<div class="fill" style="background-image:url('img/portfolio/nazar/nazar2.jpg');"></div>
										<div class="carousel-caption">
											<h2>Prototype</h2>
										</div>
									</div>
								</div>

								<!-- Controls -->
								<a class="left carousel-control" href="#myCarouselNazar" data-slide="prev">
									<span class="icon-prev"></span>
								</a>
								<a class="right carousel-control" href="#myCarouselNazar" data-slide="next">
									<span class="icon-next"></span>
								</a>
							</div>
							
                            <p>Surveillance project designed to improve security on bus stops around university campus. The project comprises a Panic Button Module that can be pushed to send an emergency alert to Campus Security Department. The emergency alert goes along with information such as location and imagens from the area.
							</br>This project was developed on the Software Engineering course at the Federal University of Pernambuco (UFPE).
							</br>The Panic Button Module was prototyped on the Arduino UNO platform connected to a WiFi shield. The server side was implemented on PHP and MySQL. The images from the cameras were simulated using video streaming from VLC Player trough HTTP internet protocol.</p>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>UWM International Mobile Guide</h2>
                            <hr class="star-primary">
							
							<div id="myCarouselUwm" class="carousel slide">
								<!-- Indicators -->
								<ol class="carousel-indicators">
									<li data-target="#myCarouselUwm" data-slide-to="0" class="active"></li>
									<li data-target="#myCarouselUwm" data-slide-to="1"></li>
									<li data-target="#myCarouselUwm" data-slide-to="2"></li>
								</ol>

								<!-- Wrapper for Slides -->
								<div class="carousel-inner">
									<div class="item active">
										<!-- Set the first background image using inline CSS below. -->
										<div class="fill" style="background-image:url('img/portfolio/uwminternational/uwminternational2.jpg');"></div>
										<div class="carousel-caption">
											<h2></h2>
										</div>
									</div>
									<div class="item">
										<!-- Set the second background image using inline CSS below. -->
										<div class="fill" style="background-image:url('img/portfolio/uwminternational/uwminternational3.jpg');"></div>
										<div class="carousel-caption">
											<h2></h2>
										</div>
									</div>
									<div class="item">
										<!-- Set the second background image using inline CSS below. -->
										<div class="fill" style="background-image:url('img/portfolio/uwminternational/uwminternational4.jpg');"></div>
										<div class="carousel-caption">
											<h2></h2>
										</div>
									</div>
								</div>

								<!-- Controls -->
								<a class="left carousel-control" href="#myCarouselUwm" data-slide="prev">
									<span class="icon-prev"></span>
								</a>
								<a class="right carousel-control" href="#myCarouselUwm" data-slide="next">
									<span class="icon-next"></span>
								</a>
							</div>
							
                            <p>Mobile application developed to help international students at University of Wisconsin - Milwaukee on their abroad experience in Milwaukee city . The app brings information such as transportation, shopping, and places to visit.
							</br>The project was created during an intership at Students Affairs IT Services - UWM.
							</br>The application was implemented on the Appcelerator Plataform that allows the creation of hybrid (Android and iOS) applications using XML, JavaScript, and TSS (styling script similar to CSS).</p>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>MyShelf</h2>
                            <hr class="star-primary">
                            
							<div id="myCarouselMyshelf" class="carousel slide">
								<!-- Indicators -->
								<ol class="carousel-indicators">
									<li data-target="#myCarouselMyshelf" data-slide-to="0" class="active"></li>
									<li data-target="#myCarouselMyshelf" data-slide-to="1"></li>
									<li data-target="#myCarouselMyshelf" data-slide-to="2"></li>
									<li data-target="#myCarouselMyshelf" data-slide-to="3"></li>
								</ol>

								<!-- Wrapper for Slides -->
								<div class="carousel-inner">
									<div class="item active">
										<!-- Set the first background image using inline CSS below. -->
										<div class="fill" style="background-image:url('img/portfolio/myshelf/myshelf2.jpg');"></div>
										<div class="carousel-caption">
											<h2></h2>
										</div>
									</div>
									<div class="item">
										<!-- Set the second background image using inline CSS below. -->
										<div class="fill" style="background-image:url('img/portfolio/myshelf/myshelf3.jpg');"></div>
										<div class="carousel-caption">
											<h2></h2>
										</div>
									</div>
									<div class="item">
										<!-- Set the second background image using inline CSS below. -->
										<div class="fill" style="background-image:url('img/portfolio/myshelf/myshelf4.jpg');"></div>
										<div class="carousel-caption">
											<h2></h2>
										</div>
									</div>
									<div class="item">
										<!-- Set the second background image using inline CSS below. -->
										<div class="fill" style="background-image:url('img/portfolio/myshelf/myshelf5.jpg');"></div>
										<div class="carousel-caption">
											<h2></h2>
										</div>
									</div>
								</div>

								<!-- Controls -->
								<a class="left carousel-control" href="#myCarouselMyshelf" data-slide="prev">
									<span class="icon-prev"></span>
								</a>
								<a class="right carousel-control" href="#myCarouselMyshelf" data-slide="next">
									<span class="icon-next"></span>
								</a>
							</div>
							
                            <p>MyShelf is a mobile application created to users to track their books. The application brings the options to add, delete, search, borrow, and return books. The user can track all the owned books as well the books that are borrowed, who has it, and when it was borrowed. The project was developed on the Appcelarator Platform as a final project to the Building Native Mobile Application course at University of Wisconsin - Milwaukee.The Appcelerator Plataform allows the creation of hybrid (Android and iOS) applications using XML, JavaScript, and TSS (styling script similar to CSS).</p>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Temperature Control System</h2>
                            <hr class="star-primary">
							
							<div id="myCarouselElectronics" class="carousel slide">
								<!-- Indicators -->
								<ol class="carousel-indicators">
									<li data-target="#myCarouselElectronics" data-slide-to="0" class="active"></li>
								</ol>

								<!-- Wrapper for Slides -->
								<div class="carousel-inner">
									<div class="item active">
										<!-- Set the first background image using inline CSS below. -->
										<div class="fill" style="background-image:url('img/portfolio/electronics/electronics2.jpg');"></div>
										<div class="carousel-caption">
											<h2></h2>
										</div>
									</div>
								</div>

								<!-- Controls -->
								<a class="left carousel-control" href="#myCarouselElectronics" data-slide="prev">
									<span class="icon-prev"></span>
								</a>
								<a class="right carousel-control" href="#myCarouselElectronics" data-slide="next">
									<span class="icon-next"></span>
								</a>
							</div>
							
                            <p>In this project, a prototype of a Temperature Control System was developed. The system has a light sensor, a temperature sensor, a bar graph to indicate the temperature level, a actuator control to light up a lamp when the light sensor detects a low level of luminosity. The system also comprises a alarm module and a motor to simulate a refrigeration subsystem. The motor speed is increased as the temperature increases.
							</br>The system was prototyped using an Arduino UNO platform as its controler. For academic purpose, the temperature sensor was created using a bipolar junction transistor. This project was developed for the Electronics I course at Federal University of Pernambuco (UFPE).</p>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <!--<script src="vendor/jquery/jquery.min.js"></script>-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <!--<script src="vendor/bootstrap/js/bootstrap.min.js"></script>-->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/freelancer.min.js"></script>

</body>

</html>
