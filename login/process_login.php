<?php

include_once '../config.php';
include_once  '../'.$include_folder.'/tables.php';

if(isset($_POST['user_email']) && isset($_POST['user_password'])){
    $array = array('user_email' => $_POST['user_email']);
    $result = $user_table->findOne($array);
    
    if($result){
        if($_POST['user_password'] === $result['user_password']){
            echo "You have successfully logged in !";
        }else{
            echo "Your login email / password was wrong!";
        }
    }else{
        echo "Your email is not registered with us ! please sign up !";
    }
    
}else{
    echo "Please input both the email and password";
}
?>
