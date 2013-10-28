<?php
include_once '../config.php';
include_once $include_folder . '/tables.php';
include_once $include_folder . '/header.php';
?>

<link rel='stylesheet' href='<?php echo $css_folder; ?>/bus.css' />

<div class="bus_info">


<?php
if (isset($_POST['station_name']) && $_POST['station_name'] != '') {

    $find_buses = $routes->find(array('stop_id' => $_POST['station_name']));

    echo '<div id="bus_code_header">';
    echo $_POST['station_name'] . '<br />';
    echo '</div>';


    if ($find_buses->count(true) != NULL) {
        foreach ($find_buses as $find_buses_key => $find_buses_value) {
            echo '<div id="bus_code_station" >';
            echo $find_buses_value['route_id'];
            echo '</div>';
        }
    } else {
        echo 'No Such Bus Station!';
    }
} else {
    echo 'No Such Bus Station!';
}
?>

</div>

<?php
include_once $include_folder . '/footer.php';
?>
