<?php
include_once 'config.php';
include_once $include_folder . '/header.php';
?>
<link rel='stylesheet' href='<?php echo $css_folder; ?>/home.css' />
<script type="text/javascript" src="<?php echo $js_folder; ?>/home.js"></script>

<div class='message'>
    <?php
    if (isset($_GET['msg'])) {
        if ($_GET['msg'] == 'signup_success') {
            echo 'Successfully registered! Now you can log in!';
        } elseif ($_GET['msg'] == 'signup_error') {
            echo 'Something went wrong. Please notify the webmaster!';
        } elseif ($_GET['msg'] == 'signup_already_registered') {
            echo 'Email already registered! Please choose a different one!';
        } elseif ($_GET['msg'] == 'login_success') {
            echo 'You have successfully logged in !';
        } elseif ($_GET['msg'] == 'login_error') {
            echo 'Your login email / password was wrong!';
        } elseif ($_GET['msg'] == 'login_unregistered') {
            echo 'Your email is not registered with us ! please sign up !';
        }
    }
    ?>
</div>

<div class='gallery'>
    <img src='' />
</div>
<div id='bus_timetable'>
    Bus Start and Stop Stations <br />
    <?php 
        include_once $include_folder . '/tables.php';
        
        $search_buses_routes = $routes->distinct('route_id');
        for($i = 0;$i < count($search_buses_routes); $i++){
            echo 'Bus Number ';
            echo $search_buses_routes[$i];
            echo ' : ';
            $start_stations = $routes->findOne(array('route_id' => $search_buses_routes[$i], 'stop_sequence'=> '1'));
            echo $start_stations['stop_id'];
            echo ' ==> ';
            $stop_station = $routes->findOne(array('route_id' => $search_buses_routes[$i], 'last_station' => '1'));
            echo $stop_station['stop_id'];
            echo '<br />';
        }

        
    ?>
</div>
<form id='journey_form' action='journey_planner.php' method='POST'>
<div class="journey_planner">
    <ul>

        <div id="journey_planner_header">
            JOURNEY PLANNER
            <hr />
        </div>



        <div class="leavingfrom">
            <label for="starting_station">Leaving from</label>
            <input type="text" placeholder="Starting Station" id="origin" name="starting_station" />
        </div>


        <div class="goingto">
            <label for="destination">Going to</label>
            <input type="text" placeholder="Destination Station" id="destination" name="destination_station" />
        </div>

        
        <div id='submit_journey' class="submit_bus_code" >
                        Show Journey
                    </div>

    </ul>
</div>
    </form>

<div class='timetable'>


    <ul class="tabs">
        <li>
            <input type="radio" checked name="tabs" id="tab1">
            <label for="tab1">Search with Bus Number</label>
            <div id="tab-content1" class="tab-content">


                <form action ="bus_information/bus_code_info.php" method="POST" id='bus_information'>
                    <div>
                        <input type="text" name="bus_code" placeholder="bus number">
                    </div>
                    <div class="submit_bus_code" id='submit_bus_information'>
                        Show Bus Route
                    </div>
                </form>

            </div>
        </li>
        <li>
            <input type="radio" name="tabs" id="tab2">
            <label for="tab2">Search With Bus Station</label>
            <div id="tab-content2" class="tab-content">

                <form action ="bus_information/bus_station_info.php" method="POST" id='bus_station_info'>
                    <div>
                        <input type="text" name="station_name" placeholder='station name'>
                    </div>
                    <div id='submit_bus_station_info' class="submit_bus_code" >
                        Show Buses
                    </div>
                </form>

            </div>
        </li>
    </ul>
</div>


<div class ='newsfeed'>
    <ul>
        <div id='newsfeed_header'>
            NEWS FEED
            <hr />
        </div>
    </ul>
</div>


<?php
include_once $include_folder . '/footer.php';
?>
