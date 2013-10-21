<?php

include_once '../config.php';
include_once '../'.$include_folder.'/tables.php';

if(isset($_POST['user_email']) && isset($_POST['user_password']) && isset($_POST['user_password_verify'])){
    if($_POST['user_password'] === $_POST['user_password_verify'] ){
        $array = array('user_email'=> $_POST['user_email']);
        $result = $user_table->findOne($array);
        if(!$result){
            $if_successful = $user_table->insert(array('user_email'=>$_POST['user_email'],'user_password'=>$_POST['user_password']));
            if($if_successful){
                echo 'Successfully registered! Now you can log in!';
            }else{
                echo 'Something went wrong. Please notify the webmaster!';
            }
        }else{
            echo 'Email already registered! Please choose a different one!';
        }
    }else{
        echo 'Both the passwords do not match . Please fill the form again!';
    }
}else{
    echo 'You need to fill all the details ! please fill the signup form again!';
}

?>
