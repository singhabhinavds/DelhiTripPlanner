<?php

$connection = new MongoClient();

$routes = $connection->DelhiTrip->routes;

$starting_station_result = $routes->find(array('stop_id' => $_POST['starting_station']));
//find all the routes in which our starting station is a stop and then check if our destination is in that same route or not 
foreach ($starting_station_result as $station_key => $station_value) {
    
    $destination_station_result = $routes->findOne(array('stop_id' => $_POST['destination_station'],
        'route_id' => $station_value['route_id']));
    
    if ($station_value['stop_sequence'] < $destination_station_result['stop_sequence']) {
        echo 'Bus with Number . ' .$destination_station_result['route_id']. ' is the bus u need!';
        echo '<br />';
    }
}


?>
