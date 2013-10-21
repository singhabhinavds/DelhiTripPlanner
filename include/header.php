<?php include_once '../config.php'; 
 session_start();
?>
<html>
    <head>
        <title>
            Welcome To Delhi Trip Planner
        </title>
        
        <link rel="stylesheet" href="<?php echo $css_folder; ?>/header.css" />

        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster" />
        
        <!--[if lt IE 9]>
          <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        
    </head>
    <body>
        <nav>
            <ul class="menu">
                <li id="home"><a href="#home" class="homeIcon">Home</a></li>
                <li id="trip_information"><a href="#trip_information">Trip Information</a></li>
                <li id="tickets_fares"><a href="#tickets_fares">Tickets & Fares</a></li>
                <li id="news"><a href="#news">News & Updates</a></li>
                <li id="about"><a href="#about">About us</a></li>
                <li id="sign_in"><a href="#sign_in">Sign In/Sign Up</a></li>
            </ul>
        </nav>