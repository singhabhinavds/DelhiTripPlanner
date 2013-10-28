<?php
include_once 'config.php';
include_once $include_folder . '/header.php';
?>
<link rel='stylesheet' href='<?php echo $css_folder; ?>/home.css' />
<script type="text/javascript" src="js/home.js"></script>

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
    <img src='images/bus.jpg' />
</div>
<div class="journey_planner">
    <ul>

        <div id="journey_planner_header">
            JOURNEY PLANNER
            <hr />
        </div>



        <div class="leavingfrom">
            <label for="starting_station">Leaving from</label>
            <input type="text" placeholder="Starting Station" id="origin" name="starting_Station" />
        </div>


        <div class="goingto">
            <label for="destination">Going to</label>
            <input type="text" placeholder="Destination Station" id="destination" name="destination" />
        </div>


        <div class="arrive_or_depart">
            <label for="">Arrive or Depart</label>
            <select name="arrive_depart" id="arrive_depart">
                <option value="arrive">Arrive</option>
                <option selected="selected" value="depart">Depart</option>
            </select>
        </div>
        <div class="time">
            <label for="journey_day">Day</label>
            <select name="journey_day" id="journey_day">

                <option value="1">01</option>

                <option value="2">02</option>

                <option value="3">03</option>

                <option value="4">04</option>

                <option value="5">05</option>

                <option value="6">06</option>

                <option value="7">07</option>

                <option value="8">08</option>

                <option value="9">09</option>

                <option value="10">10</option>

                <option value="11">11</option>

                <option value="12">12</option>

                <option value="13">13</option>

                <option value="14">14</option>

                <option value="15">15</option>

                <option value="16">16</option>

                <option value="17">17</option>

                <option value="18">18</option>

                <option value="19">19</option>

                <option value="20">20</option>

                <option value="21">21</option>

                <option value="22">22</option>

                <option value="23">23</option>

                <option value="24">24</option>

                <option value="25">25</option>

                <option value="26">26</option>

                <option value="27">27</option>

                <option value="28">28</option>

                <option value="29">29</option>

                <option value="30">30</option>

                <option value="31">31</option>

            </select>
            <label for="journey_month">Month</label>
            <select name="journey_month" id="journey_month">

                <option value="month01">January</option>

                <option value="month02">February</option>

                <option value="month03">March</option>

                <option value="month04">April</option>

                <option value="month05">May</option>

                <option value="month06">June</option>

                <option value="month07">July</option>

                <option value="month08">August</option>

                <option value="month09">September</option>

                <option value="month10">October</option>

                <option value="month11">November</option>

                <option value="month12">December</option>

            </select>
            <input type="hidden" class="dateSelector">
        </div>



        <div class="goingToTime">
            <label for="journey_hour">Hour</label>
            <select name="jounrye_hour" id="journey_hour">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
                <option>11</option>
                <option>12</option>
            </select>
            <label for='journey_minute'>Minute</label>
            <select name="journey_minute" id="journey_minute">
                <option>00</option>
                <option>05</option>
                <option>10</option>
                <option>15</option>
                <option>20</option>
                <option>25</option>
                <option>30</option>
                <option>35</option>
                <option>40</option>
                <option>45</option>
                <option>50</option>
                <option>55</option>
            </select>
            <select name="journey_ampm" id="am">
                <option selected="selected" value="am">AM</option>
                <option value="pm">PM</option>
            </select>
        </div>


        <p class="searchOptions"><a href="#" id="MoreSearchOptions">More search options</a></p>
        <input type="submit" value="Show journey" class="submitButton" name="jpSubmit">

    </ul>

</div>
<div class='timetable'>


    <ul class="tabs">
        <li>
            <input type="radio" checked name="tabs" id="tab1">
            <label for="tab1">Search with Bus Number</label>
            <div id="tab-content1" class="tab-content">


                <form action ="bus_information.php" method="POST">
                    <div>
                        <input type="text" name="bus_code" placeholder="bus number">
                    </div>
                    <div id="submit_bus_code">
                        Show Bus Route
                    </div>
                </form>

            </div>
        </li>
        <li>
            <input type="radio" name="tabs" id="tab2">
            <label for="tab2">Search With Bus Station</label>
            <div id="tab-content2" class="tab-content">

                <form action ="bus_information/bus_station_info.php" method="POST">
                    <div>
                        <input type="text" name="station_name" placeholder='station name'>
                    </div>
                    <input type="submit" value="show buses">
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
