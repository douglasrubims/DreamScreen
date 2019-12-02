<?php
    require('connect.php');
    $items = Null;
	if($logged) {
        $id = $_GET["id"];
		$id_user = $user["id"];
        $query = mysqli_query($connection, "SELECT * FROM Item WHERE id='$id' and id_user='$id_user'") or die(mysql_error());
        $rows = mysqli_num_rows($query);
        if($rows>0) {
            $item = mysqli_fetch_assoc($query);
            header("Content-type: ".getimageSize($item["image"])["mime"]);
            echo $item["image"];
        } else {
            header('location: ./logout.php');
        }
	}
?>