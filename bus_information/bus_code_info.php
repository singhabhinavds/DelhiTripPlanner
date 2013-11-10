<?php
include_once '../config.php';
include_once $include_folder . '/header.php';
include_once $include_folder . '/tables.php';
?>

<link rel='stylesheet' href='<?php echo $css_folder; ?>/bus.css' />

<div class="bus_info">
    <?php
    $array = array('route_id' => $_POST["bus_code"]);
    $result = $routes->find($array);
    $result->sort(array('stop_sequence' => 1));

    if ($result->count(true) != NULL) {

        echo '<div id="bus_code_header">';
        echo "Bus Code " . $_POST['bus_code'] . '<br />';
        echo '</div>';

        foreach ($result as $key => $value) {
            echo '<div id="bus_code_station" >';
            echo $value['stop_id'] . '<br />';
            echo '</div>';
        }
    } else {
        echo "No such Bus number exists. Please check the bus number.";
    }
    ?>
</div>


<?php
include_once $include_folder . '/footer.php';
?>
