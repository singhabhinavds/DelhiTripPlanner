<?php

$connection = new MongoClient();

$db = $connection->DelhiTrip;

$routes = $db->routes;
$stops = $db->stops;
$icon_offset = "-10,-25";
print "lat\tlon\ticonOffset\n";

$bus_code = $routes->find(array('route_id'=>'492'));

foreach($bus_code as $bus_code_key => $bus_code_value){
    $bus_geolocation = $stops->findOne(array('stop_id'=>$bus_code_value['stop_id']));
    $lon = $bus_geolocation['stop_lon'];
    $lat = $bus_geolocation['stop_lat'];
    
    print $lat."\t".$lon."\t".$icon_offset."\n";
}


?>
