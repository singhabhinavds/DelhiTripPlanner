<?php
session_start();
?>
<html>
    <head>
        <title>
            Welcome To Delhi Trip Planner
        </title>

        <link rel='stylesheet' href='<?php echo $css_folder; ?>/header.css' />
        <link rel='stylesheet' href='<?php echo $css_folder; ?>/footer.css' />
        <script type="text/javascript" src="<?php echo $js_folder; ?>/jquery-1.10.2.js"></script>


    </head>
    <body>
        <div class="content">
            <div class='menu'>
                <ul>
                    <li><a href='<?php echo $home_folder; ?>/home.php' class='current'>Home</a></li>
                    <li><a href='<?php echo $home_folder; ?>/tickets.php'>Tickets</a></li>
                    <li><a href="<?php echo $home_folder; ?>/getting_around.php">Getting Around</a></li>
                    <li><a href="<?php echo $home_folder; ?>/news_events.php">News & Events</a></li>
                    <li><a href="<?php echo $home_folder; ?>/facilities.php">Facilities</a></li>
                    <li><a href="<?php echo $home_folder; ?>/about_us.php">About Us</a></li>
                    <li><a href="<?php echo $home_folder; ?>/login/login_form.php">Login/Signup</a></li>

                </ul>   
            </div>
            <div class="main">
