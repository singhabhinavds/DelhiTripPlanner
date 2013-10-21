<?php


//initializing connection to the mongoDB
$connection = new MongoClient();


//selecting our database for the project
$database = $connection->DelhiTrip;





//all the tables are here
$route_info = $database->route_info;
$user_table = $database->user_table;
?>
