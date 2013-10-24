<?php include_once '../config.php';
 ?>
<html>
    <head>
        <title>Signup Page</title>
        <link rel='stylesheet' type='text/css' href='<?php echo $css_folder; ?>/login.css' />
    </head>
    <?php include_once $include_folder.'/header.php'; ?>
<div class ='container'>
<form action ='process_signup.php' method ='POST'>
    <ul>
        <li>
    Email: <input type='text' name='user_email' id="email">
        </li>
        <li>
    Password: <input type='password' name='user_password' id="password">
        </li>
        <li>
    Password again: <input type='password' name='user_password_verify' id="password">
        </li>
        <li>
    <input type='submit' id="submit" value="Signup">
        </li>
    </ul>
</form>
    
    </div>
    
<?php include_once $include_folder.'/footer.php'; ?>