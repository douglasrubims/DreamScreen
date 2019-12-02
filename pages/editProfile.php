<?php
	if(!strpos($_SERVER['REQUEST_URI'], 'pages')) {
		if(isset($_POST['name']) AND isset($_POST['email']) AND isset($_POST['password'])){
			$name = mysqli_real_escape_string($connection, $_POST['name']);
			$email = mysqli_real_escape_string($connection, $_POST['email']);
			$password = mysqli_real_escape_string($connection, $_POST['password']);
			if($user['name'] != $name) mysqli_query($connection, "UPDATE User SET name='$name' WHERE id='$id_user'") or die(mysql_error());
			if($user['email'] != $email) mysqli_query($connection, "UPDATE User SET email='$email' WHERE id='$id_user'") or die(mysql_error());
			if($user['password'] != $password) {
				$password = md5($password);
				mysqli_query($connection, "UPDATE User SET password='$password' WHERE id='$id_user'") or die(mysql_error());
			}
			$_SESSION['email'] = $email;
			$_SESSION['password'] = $password;
			header('location: ./index.php');
		}
?>
			<div class="panel-header panel-header-sm" style="padding-top: 0px; height: 200px;">
				<a href="./index.php"><img class="mx-auto d-block mt-5" src="./img/logo.png"/></a>
			</div>
			<div class="content" style="padding-bottom: 0;">
				<div class="animated fadeInUp faster">
					<div class="mx-auto d-block card card-chart col-lg-6 col-md-8">
						<div class="card-header">
							<h4 class="card-title">Edit profile</h4>
						</div>
						<div class="card-body">
							<form method="POST" class="form-signin">
								<input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>"/>
								<div class="form-label-group">
									<label for="inputName">Name</label>
									<input type="text" name="name" id="inputName" value="<?php echo $user["name"] ?>" class="form-control" placeholder="Put your name" required autofocus/>
								</div>
								<div class="form-label-group">
									<label for="inputEmail">E-mail</label>
									<input type="email" name="email" id="inputEmail" value="<?php echo $user["email"] ?>" class="form-control" placeholder="Put your e-mail" required/>
								</div>
								<div class="form-label-group">
									<label for="inputPassword">Password</label>
									<input type="password" name="password" id="inputPassword" value="<?php echo $user["password"] ?>" class="form-control" placeholder="**********" required/>
								</div>
								<div class="form-label-group">
									<input type="submit" value="Send" class="btn btn-info"/>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
<?php require('./layout/footer.php'); ?>
<?php } else {
	header('location: ../index.php');
} ?>