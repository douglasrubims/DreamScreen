<?php
    $connection = mysqli_connect('localhost', 'rubim', '5644789010', 'DreamScreen');
    session_start();
    $logged = False;
    $user = Null;
    header('Content-Type: text/html; charset=utf-8');
	mysqli_query("SET NAMES 'utf8'");
	mysqli_query('SET character_set_connection=utf8');
	mysqli_query('SET character_set_client=utf8');
	mysqli_query('SET character_set_results=utf8');
    if(isset($_SESSION['email']) AND isset($_SESSION['password'])){
        $email = $_SESSION['email'];
        $password = $_SESSION['password'];
        $query = mysqli_query($connection, "SELECT * FROM User WHERE email='$email' and password='$password'") or die(mysql_error());
        $rows = mysqli_num_rows($query);
        if($rows>0){
            $user = mysqli_fetch_assoc($query);
            $logged = True;
        }else{
            header('location: ./logout.php');
        }
    }
?>