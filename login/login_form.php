<?php include_once '../config.php';
 session_start();
 ?>
<html>
    <head>
        <title>Login Page</title>
        <link rel='stylesheet' type='text/css' href='../<?php echo $css_folder; ?>/login.css' />
    </head>
<div class ='container'>
    <form action="process_login.php" method="POST">
        <ul>
            <li>
                Email : <input type="text" name="user_email" id ='email'>
            </li>
            <li>
                Password : <input type="password" name="user_password" id='password'>
            </li>
            <li>
                <input type='submit' name='LOGIN' value='LOGIN' title='LOGIN' id='submit'>
            </li>
        </ul>
    </form>
    <form action='../signup/signup_form.php' method='GET'>
        <input type='submit' name='SIGNUP' value='SIGNUP' id='signup' title='signup' />
    </form>
</div>