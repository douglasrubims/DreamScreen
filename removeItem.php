<?php
    require('connect.php');
    global $logged;
	global $user;
    global $connection;
    $items = Null;
	if($logged) {
        $id = $_GET["id"];
		$id_user = $user["id"];
        mysqli_query($connection, "DELETE FROM Item WHERE id='$id' and id_user='$id_user'") or die(mysql_error());
        header('location: ./index.php');
	}
?>