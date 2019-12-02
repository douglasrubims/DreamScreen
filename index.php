<?php
	require('connect.php');
	if($logged) {
		$id_user = $user["id"];
		$items = mysqli_query($connection, "SELECT * FROM Item WHERE id_user='$id_user'") or die(mysql_error());
	}
	require('./layout/layout.php');
?>