<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MC Design Port</title>
  <!-- TAGS -->
  <!-- Search Engine -->
  <meta name="description" content="Macarena Castillo's Portafolio. Contains illustrations, renders and other forms of design.">
  <meta name="image" content="http://mcdesignport.cl/img/profile.png">
  <!-- Schema.org for Google -->
  <meta itemprop="name" content="MC Design Port">
  <meta itemprop="description" content="Macarena Castillo's Portafolio. Contains illustrations, renders and other forms of design.">
  <meta itemprop="image" content="http://mcdesignport.cl/img/profile.png">
  <!-- Twitter -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:title" content="MC Design Port">
  <meta name="twitter:description" content="Macarena Castillo's Portafolio. Contains illustrations, renders and other forms of design.">
  <meta name="twitter:image:src" content="http://mcdesignport.cl/img/profile.png">
  <!-- Open Graph general (Facebook, Pinterest & Google+) -->
  <meta name="og:title" content="MC Design Port">
  <meta name="og:description" content="Macarena Castillo's Portafolio. Contains illustrations, renders and other forms of design.">
  <meta name="og:image" content="http://mcdesignport.cl/img/profile.png">
  <meta name="og:url" content="www.mcdesignport.cl">
  <meta name="og:site_name" content="MC Design Port">
  <meta name="og:locale" content="en_US">
  <meta name="og:type" content="website">


    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/freelancer.min.css" rel="stylesheet">
    <link href="css/fixes.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Oswald:500,700|Roboto:300,400" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<!-- P5 comment -->
    <script src="js/p5.min.js" type="text/javascript"></script>
    <script src="js/p5.dom.js" type="text/javascript"></script>
    <script src="js/p5.sound.js" type="text/javascript"></script>
    <script src="sketches/sketch_index.js" type="text/javascript"></script>

</head>

<body id="page-top" class="index">
<div id="skipnav"><a href="#maincontent">Skip to main content</a></div>

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top">MC Design Port</a>
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
                        <a href="#about">About Me</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container" id="maincontent" tabindex="-1">
            <div class="row">
              <div class="col-xs-12 text-center" id="banner">
                <img class="img-responsive" id="headerimage" src="img/icon.png" alt="MC Icon">
              </div>
            </div>
        </div>
    </header>

    <section id="lowbanner" class=success>
      <div class="container">
          <div class="row">
              <div class="col-xs-12 text-center">
          <div class="intro-text">
              <h1 class="name">Macarena Castillo's Portfolio</h1>
              <span class="skills">Web Developer - Graphic Artist - Digital Designer</span>
          </div>
              </div>
          </div>
      </div>
    </section>

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
              <?php
             $inspiracion = array_map('str_getcsv', file('data/blog.csv'));
             array_walk($inspiracion, function(&$a) use ($inspiracion) {$a = array_combine($inspiracion[0], $a);});
             array_shift($inspiracion);
             $all = count($inspiracion);
             for($n=0; $n < $all; $n++){
             ?>
                <div class="col-md-4 portfolio-item">
                    <a href="#portfolioModal<?php print $n?>" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php print($inspiracion[$n]["imageicon"])?>" class="img-responsive" alt="<?php print($inspiracion[$n]["title"])?>">
                    </a>
                </div>
<?php };?>
                </div>
            </div>
    </section>

    <!-- Portfolio Modals -->
    <?php include('portfoliomodal.php');?>

    <!-- About Section -->
    <section class="success" id="about">
        <div class="container">
            <div class="row">
              <div class="col-xs-12 col-md-4 text-center">
                  <img src="img/profile.png" id="selfie" class= "img-centered" alt="Me in Santiago.">
              </div>
                <div class="col-xs-12 col-md-8 text-center">
                    <h2>About Me</h2>
                    <hr class="star-light">
                    <div class="row">
                        <div class="col-xs-6">
                            <p>I'm a Chilean design student who works in graphical design using digital media. I'm fluent in Spanish, English and understand a little French and Italian.</p>
                        </div>
                        <div class="col-xs-6">
                            <p>I like videogames, literature, music and unravelling the mysteries of the universe.<br> Currently studying at the Pontificia Universidad Católica de Chile.</p>
                        </div>
                    </div>
                </div>
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
                                <label for="name">Name</label>
                                <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="email">Email Address</label>
                                <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="phone">Phone Number (Optional)</label>
                                <input type="tel" class="form-control" placeholder="Phone Number (Optional)" id="phone">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="message">Message</label>
                                <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-send btn-lg">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
<?php include('footer.php');?>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>



    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/freelancer.min.js"></script>

</body>

</html>
