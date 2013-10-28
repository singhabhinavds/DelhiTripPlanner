<?php

error_reporting( E_ALL );
// print every log message possible


$connection = new MongoClient();

$database = $connection->DelhiTrip;

$stops = $database->test_stops;
$routes = $database->test_routes;

echo 'Search by bus number <br />';
//for searching by bus numbers
$result = $routes->find(array('route_id'=>'492','route_type'=>'bus'));
foreach ($result as $key => $value) {
    print $value['stop_sequence'].'. ';
    $result2 = $stops->findOne(array('stop_id'=>$value['stop_id']));
    print $result2['stop_name'];
    echo '<br />';
}


echo '<br /><br /><br />';
echo 'Search with Stop name<br />';
$stop_name= 'Kalyan Puri';
$stop_search = $stops->findOne(array('stop_name'=>$stop_name));
echo $stop_search['stop_name'].' ==> '. $stop_search['stop_id'].'<br />';

$route_search = $routes->find(array('stop_id'=> $stop_search['stop_id']));

foreach($route_search as $route_key => $route_value){
    echo 'bus number is ==> ' ;
    echo $route_value['route_id'].'<br />';
}
?>