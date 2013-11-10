<?php


//initializing connection to the mongoDB
$connection = new MongoClient();


//selecting our database for the project
$database = $connection->DelhiTrip;





//all the tables are here
$user_table = $database->user_table;
$routes = $database->routes;
$stops = $database->stops;
?>
