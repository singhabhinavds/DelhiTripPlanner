<?php


$connection = new MongoClient();

$bus_info = $connection->DelhiTrip->route_info;
$array = array('bus_code'=>$_POST["bus_code"]);
$result = $bus_info->findOne($array);

if($result){


    $count = 1;
    foreach ($result as $key => $value) {
        if($key == 'intermediate_stations'){
            for($i = 0 ; $i < count($value);$i++){
                echo $count.". ".$value[$i].'<br />';
                $count++;
            }
        }elseif($key == '_id')
            continue;
        elseif($key == 'bus_code'){
            echo "Bus Code ".$value.'<br />';
        }else{ 
            echo $count.". ". $value.'<br />';
            $count++;
        }
    }

}else{
    echo "No such Bus number exists. Please check the bus number.";
}
?>
