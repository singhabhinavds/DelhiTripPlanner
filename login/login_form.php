<?php include_once '../config.php';
 ?>
<html>
    <head>
        <title>Login Page</title>
        <link rel='stylesheet' type='text/css' href='<?php echo $css_folder; ?>/login.css' />
    </head>
    <?php include_once $include_folder.'/header.php'; ?>
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
        <a href='../signup/signup_form' id='signup'>Dont have an account ? Create one!</a>
</div>
    
    <?php include_once $include_folder.'/footer.php'; ?>