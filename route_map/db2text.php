<?php

$connection = new MongoClient();

$db = $connection->DelhiTrip;

$collection = $db->stops;

$result = $collection->find();

$icon_offset = "-10,-25";

print "lat\tlon\ticonOffset\n";

foreach($result as $result_key => $result_value){
    $lon = $result_value['stop_lon'];
    $lat = $result_value['stop_lat'];
    
    print $lat."\t".$lon."\t".$icon_offset."\n";
}

?>
