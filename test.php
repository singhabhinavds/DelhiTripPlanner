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

<div class="classname">
    show bus route
</div>
<style>
    .classname {
	-moz-box-shadow:inset 0px 0px 19px 0px #caefab;
	-webkit-box-shadow:inset 0px 0px 19px 0px #caefab;
	box-shadow:inset 0px 0px 19px 0px #caefab;
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #77d42a), color-stop(1, #5cb811) );
	background:-moz-linear-gradient( center top, #77d42a 5%, #5cb811 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#77d42a', endColorstr='#5cb811');
	background-color:#77d42a;
	-webkit-border-top-left-radius:0px;
	-moz-border-radius-topleft:0px;
	border-top-left-radius:0px;
	-webkit-border-top-right-radius:0px;
	-moz-border-radius-topright:0px;
	border-top-right-radius:0px;
	-webkit-border-bottom-right-radius:0px;
	-moz-border-radius-bottomright:0px;
	border-bottom-right-radius:0px;
	-webkit-border-bottom-left-radius:0px;
	-moz-border-radius-bottomleft:0px;
	border-bottom-left-radius:0px;
	text-indent:0px;
	border:2px solid #268a16;
	display:inline-block;
	color:#306108;
	font-family:Arial Black;
	font-size:15px;
	font-weight:bold;
	font-style:normal;
	height:46px;
	line-height:46px;
	width:168px;
	text-decoration:none;
	text-align:center;
	text-shadow:1px 0px 0px #aade7c;
}
.classname:hover {
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #5cb811), color-stop(1, #77d42a) );
	background:-moz-linear-gradient( center top, #5cb811 5%, #77d42a 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#5cb811', endColorstr='#77d42a');
	background-color:#5cb811;
}.classname:active {
	position:relative;
	top:1px;
</style>