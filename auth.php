<?php
    require('connect.php');
    if(isset($_POST['name']) AND isset($_POST['email']) AND isset($_POST['password'])) {
        $name = mysqli_real_escape_string($connection, $_POST['name']);
        $email = mysqli_real_escape_string($connection, $_POST['email']);
        $password = md5(mysqli_real_escape_string($connection, $_POST['password']));
        if(mysqli_num_rows(mysqli_query($connection, "SELECT id FROM User WHERE email='$email' LIMIT 1") or die(mysql_error()))>0) header('location: ./index.php?error');
        mysqli_query($connection, "INSERT INTO User (name, email, password) VALUES ('$name', '$email', '$password')") or die(mysql_error());
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        header('location: ./index.php');
    } elseif(isset($_POST['email']) AND isset($_POST['password'])) {
        $email = mysqli_real_escape_string($connection, $_POST['email']);
        $password = md5(mysqli_real_escape_string($connection, $_POST['password']));
        $query = mysqli_query($connection, "SELECT * FROM User WHERE email='$email' and password='$password'") or die(mysql_error());
        $rows = mysqli_num_rows($query);
        if($rows>0) {
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            header('location: ./index.php');
        }else {
            header('location: ./index.php?error');
        }
    }else {
        header('location: ./index.php?error');
    }
?>