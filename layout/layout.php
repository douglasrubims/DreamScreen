<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="DreamScreen is a custom DreamScreen management system.">
		<meta name="author" content="Douglas Rubim, Rubim, douglasrubims, douglasrubims@gmail.com">
		<link rel="icon" href="./img/logo.png">
		<title>DreamScreen</title>
		<link href="./css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="./css/animate.css">
<?php if(!$logged) { ?>
		<link href="./css/floating-labels.css" rel="stylesheet">
<?php } else { ?>
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
		<link href="./css/now-ui-dashboard.css" rel="stylesheet" />
<?php } ?>
	</head>
	<body>
		<div class="main-panel" id="main-panel" style="width: 100%;">
<?php
	if($logged) {
		require('./layout/navbar.php');
		if(strpos($_SERVER['REQUEST_URI'], '?addItem')) {
			require('./pages/addItem.php');
		}elseif(strpos($_SERVER['REQUEST_URI'], '?editItem')){
			require('./pages/editItem.php');
		}elseif(strpos($_SERVER['REQUEST_URI'], '?editProfile')) {
			require('./pages/editProfile.php');
		} else {
			require('./pages/dashboard.php');
		}
	} elseif(strpos($_SERVER['REQUEST_URI'], '?signup')) {
			require('./pages/signup.php');
	} else {
		require('./pages/signin.php');
	}
?>
		</div>
	</body>
	<script src="./js/jquery.min.js"></script>
	<script src="./js/popper.min.js"></script>
	<script src="./js/bootstrap.min.js"></script>
</html>