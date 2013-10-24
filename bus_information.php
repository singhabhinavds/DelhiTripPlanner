<?php
include_once 'config.php';
include_once $include_folder . '/header.php';
?>

<link rel='stylesheet' href='<?php echo $css_folder; ?>/bus.css' />

<div class="bus_info">
    <?php
    $connection = new MongoClient();

    $bus_info = $connection->DelhiTrip->route_info;
    $array = array('bus_code' => $_POST["bus_code"]);
    $result = $bus_info->findOne($array);

    if ($result) {


        $count = 1;
        foreach ($result as $key => $value) {
            if ($key == 'intermediate_stations') {
                for ($i = 0; $i < count($value); $i++) {
                    echo '<div id="bus_code_station" >';
                    echo $count . ". " . $value[$i] . '<br />';
                    echo '</div>';
                    $count++;
                }
            } elseif ($key == '_id')
                continue;
            elseif ($key == 'bus_code') {
                echo '<div id="bus_code_header">';
                echo "Bus Code " . $value . '<br />';
                echo '</div>';
            } else {
                echo '<div id="bus_code_station" >';
                echo $count . ". " . $value . '<br />';
                echo '</div>';
                $count++;
            }
        }
    } else {
        echo "No such Bus number exists. Please check the bus number.";
    }
    ?>
</div>


<?php
include_once $include_folder . '/footer.php';
?>
