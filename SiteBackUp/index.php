<?php
if (isset($_POST["submit"])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'SpaceCraft Contact Form'; 
    $to = 'launch@realspacecraft.com'; 
    $subject = $_POST['name'] . ' is interested in SpaceCraft!';

    $body ="From: $name\n\n E-Mail: $email\n\n Message:\n $message";
    // Check if name has been entered
    if (!$_POST['name']) {
        $errName = 'Please enter your name';
    }

    // Check if email has been entered and is valid
    if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errEmail = 'Please enter a valid email address';
    }

    //Check if message has been entered
    if (!$_POST['message']) {
        $errMessage = 'Please enter your message';
    }
    // If there are no errors, send the email
    if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
        if (mail ($to, $subject, $body, $from)) {
            $result='<div class="alert alert-success">Thank You! I will be in touch</div>';
        } else {
            $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
        }
    }
}
?>

<!doctype html>
<html lang="en">

    <!-- Mirrored from templateocean.com/wrapbootstrap/zerif-html/v1.3.1/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 May 2016 17:02:17 GMT -->
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Beautiful Responsive Animated OnePage Template" />
        <meta name="keywords" content="Zerif, responsive, html, template, creative"/>
        <meta name="author" content="Mizanur Rahman" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SpaceCraft</title>

        <!-- =========================
FAV AND TOUCH ICONS  
============================== -->
        <link rel="shortcut icon" href="images/fav.png">

        <!-- =========================
STYLESHEETS      
============================== -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/jquery.vegas.min.css">
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="assets/icon-fonts/styles.css"> 
        <link rel="stylesheet" href="css/pixeden-icons.css"> 

        <!-- CUSTOM STYLES -->
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="css/responsive.css">

        <!-- WEBFONT -->
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,400italic|Montserrat:700,400|Homemade+Apple' rel='stylesheet' type='text/css'>

        <!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

        <!-- JQUERY -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    </head>


    <body>

        <!-- =========================
HOME SECTION       
============================== -->
        <header id="home" class="header">
            <!-- TOP BAR -->
            <div id="main-nav" class="navbar navbar-inverse bs-docs-nav" role="banner">
                <div class="container">
                    <div class="navbar-header responsive-logo">
                        <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#bs-navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <nav class="navbar-collapse collapse" role="navigation" id="bs-navbar-collapse">
                        <ul class="nav navbar-nav navbar-right responsive-nav main-nav-list">
                            <li><a href="#home">Home</a></li>
                            <li><a href="#focus">Focus</a></li>
                            <li><a href="#team">Team</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- / END TOP BAR -->
        </header> <!-- / END HOME SECTION  -->

        <!-- =========================
FOCUS SECTION      
============================== -->
        <section class="focus" id="focus">
            <div class="container">

                <!-- SECTION HEADER -->
                <div class="section-header">

                    <!-- SECTION TITLE -->
                    <h2 class="dark-text">Our Focus</h2>

                    <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
                    <h6>
                        Train Virtually.
                    </h6>
                </div>
                <!-- / END SECTION HEADER -->

                <!-- 4 FOCUS BOXES -->
                <div class="row">

                    <!-- FIRST FOCUS BOXES -->
                    <div class="col-lg-3 col-sm-3 focus-box blue wow fadeInRight animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                        <div class="service-icon">
                            <i class="pixeden pd-icon-email-marketing"></i>
                        </div>
                        <h5 class="blue-border-bottom">Training</h5>
                        <p>
                            Training is created with a 360 degree and Artisian. It's much easier to explore new hardware and become familiar with it through virtual reality than watching videos, especially if maker spaces don't have personnel in place to train everyone that walks through the door.
                        </p>
                    </div>                    
                    <div class="col-lg-3 col-sm-3 focus-box red wow fadeInLeft animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                        <div class="service-icon">
                            <i class="pixeden pd-icon-monitor"></i> <!-- FOCUS ICON-->
                        </div>
                        <h5 class="red-border-bottom">Hardware</h5> <!-- FOCUS HEADING -->
                        <p> <!-- FOCUS DESCRIPTION -->
                            Hardware between maker spaces may be different. We allow maker spaces to curate the content they provide to their makers. By providing training videos for a variety of hardware that may be available at the maker space.
                        </p>
                    </div>
                    <!-- / END FIRST FOCUS BOX. Other boxes has same format -->
                    <div class="col-lg-3 col-sm-3 focus-box green wow fadeInLeft animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                        <div class="service-icon">
                            <span class="pixeden pd-icon-camera"></span>
                        </div>
                        <h5 class="green-border-bottom">Virtual Immersion</h5>
                        <p>
                            Virtual reality provides a more immersive learning experience than video. Users have more control of the experience and can learn and explore at their own pace while bridging between different learning types.
                        </p>
                    </div>
                    <div class="col-lg-3 col-sm-3 focus-box yellow wow fadeInRight animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                        <div class="service-icon">
                            <i class="pixeden pd-icon-check"></i>
                        </div>
                        <h5 class="yellow-border-bottom">Makers</h5>
                        <p>
                            Makers are trained more rapidly with our platform. This saves maker spaces time and money by allowing personnel to delegate basic training and be more available for other maker space tasks.
                        </p>
                    </div>
                </div>
                <!-- / END 4 FOCUS BOXES -->
            </div> <!-- / END CONTAINER -->
        </section>  <!-- / END FOCUS SECTION -->
        <!-- =========================
OUR TEAM SECTION   
============================== -->

        <section class="our-team" id="team">
            <div class="container">
                <!-- SECTION HEADER -->
                <div class="section-header">
                    <!-- SECTION TITLE -->
                    <h2 class="dark-text">SpaceCraft Team</h2>
                    <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
                    <h6>
                        Parts Virtual Reality, Parts Education, All Maker. 
                    </h6>
                </div>
                <!-- / END SECTION HEADER -->
                <!-- TEAM MEMBERS -->
                <div class="row wow fadeInRight animated" data-wow-offset="40" data-wow-duration="3s" data-wow-delay="0.15s">
                    <!-- MEMBER -->
                                        <div class="outer">
                        <div class="team-member memone col-lg-6 col-sm-6">
                            <figure class="profile-pic"> 
                                <img src="images/team/pic1.jpg" alt=""> <!-- MEMBER PROFILE PIC -->
                            </figure>
                            <div class="member-details">
                                <h5 class="dark-text red-border-bottom">Bob Sopko</h5>
                                <div class="position">
                                    Business Development
                                    <p>Director of Case Western Reserve Univ LaunchNet, guiding students and alumni to analyze and bring ideas to market.</p>
                                </div>
                            </div>
                            <div class="social-icons">
                                <ul>
                                    <li><a href="https://www.linkedin.com/in/robertsopko"><i class="icon-linkedin"></i></a></li>
                                </ul>
                            </div>                           
                        </div>
                        <!-- / END MEMBER -->
                        <div class="team-member memtwo col-lg-6 col-sm-6">
                            <figure class="profile-pic">
                                <img src="images/team/pic2.jpg" alt="">
                            </figure>
                            <div class="member-details">
                                <h5 class="dark-text green-border-bottom">Andrea Young</h5>
                                <div class="position">
                                    Project Management
                                    <p>Seasoned marketer, web-content creator, brand cheerleader, project manager and currently student of web development. </p>
                                </div>
                            </div>
                            <div class="social-icons">
                                <ul>
                                    <li><a href="https://www.linkedin.com/in/brandcheerleaderandrea"><i class="icon-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4">
                        <div class="team-member">
                            <figure class="profile-pic">
                                <img src="images/team/pic3.jpg" alt="">
                            </figure>
                            <div class="member-details">
                                <h5 class="dark-text blue-border-bottom">Matthew Allen</h5>
                                <div class="position">
                                    Virtual Reality Content Creator
                                    <p>Virtual reality story builder, Previous Kent State LaunchNet Director of Technology, Past instructor at iD Tech Camps, and University Innovation Fellow</p>
                                </div>
                            </div>
                            <div class="social-icons">
                                <ul>
                                    <li><a href="https://www.linkedin.com/in/onemattallen"><i class="icon-linkedin"></i></a></li>
                                </ul>
                            </div>                               
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-4">
                        <div class="team-member">
                            <figure class="profile-pic">
                                <img src="images/team/pic4.jpg" alt="">
                            </figure>
                            <div class="member-details">
                                <h5 class="dark-text yellow-border-bottom">Ian Schwarber</h5>
                                <div class="position">
                                    Public Relations and Marketing
                                    <p>Impassioned Branding & Marketing Strategist w/Artist's Creative Touch. Talents include Public Speaking, Org Development & Building Alliances</p>
                                </div>
                            </div>
                            <div class="social-icons">
                                <ul>
                                    <li><a href="https://www.linkedin.com/in/ian-schwarber-61133227"><i class="icon-linkedin"></i></a></li>
                                </ul>
                            </div>                                
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4">
                        <div class="team-member">
                            <figure class="profile-pic">
                                <img src="images/team/pic8.jpg" alt="">
                            </figure>
                            <div class="member-details">
                                <h5 class="dark-text blue-border-bottom">Bill Myers</h5>
                                <div class="position">
                                    Virtual Reality Videographer
                                    <p>Virtual reality storyteller with an emphasis in product development and 360-degree video production.</p>
                                </div>
                            </div>
                            <div class="social-icons">
                                <ul>
                                    <li><a href="https://www.linkedin.com/in/billmyersvr"><i class="icon-linkedin"></i></a></li>
                                </ul>
                            </div>                                
                        </div>
                    </div>
                </div> <!-- / END TEAM MEMBER LIST -->
            </div> <!-- / END CONTAINER -->
        </section> <!-- / END OUR TEAM SECTION -->
        <!-- ==========================
SERVICES - START 
=========================== -->
        <section class="content" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h2>Connect</h2>
                        <p>Let's help you train people virtually</p>
                        <div class="contact-alert-wrapper"></div>
                        <!-- sign up form -->
                        <form class="form-horizontal" role="form" method="post" action="index.php">
                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
                                    <?php echo "<p class='text-danger'>$errName</p>";?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
                                    <?php echo "<p class='text-danger'>$errEmail</p>";?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="message" class="col-sm-2 control-label">Message</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
                                    <?php echo "<p class='text-danger'>$errMessage</p>";?>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-10 col-sm-offset-2">
                                    <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-10 col-sm-offset-2">
                                    <?php echo $result; ?>
                                </div>
                            </div>
                        </form>

                    </div>

                </div>            
            </div>
        </section>  

        <script src="js/bootstrap.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/jquery.nav.js"></script>
        <script src="js/jquery.knob.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/smoothscroll.js"></script>
        <script src="js/jquery.vegas.min.js"></script>
        <script src="js/zerif.js"></script>
    </body>
    <!-- Mirrored from templateocean.com/wrapbootstrap/zerif-html/v1.3.1/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 May 2016 17:02:50 GMT -->
</html>