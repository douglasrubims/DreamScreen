<?php
	if(!strpos($_SERVER['REQUEST_URI'], 'pages')) {
		if(isset($_POST['name']) AND isset($_POST['description'])){
			$id_user = $user['id'];
			$name = $_POST['name'];
			$description = $_POST['description'];
			$image = exif_imagetype($_FILES['image']['tmp_name']) ? addslashes(file_get_contents($_FILES['image']['tmp_name'])) : Null;
			if(mysqli_query($connection, "INSERT INTO Item (id_user, name, description, image, accomplished) VALUES ('$id_user', '$name', '$description', '$image', 0)") or die(mysql_error())) {
				header('location: ./index.php');
			}
		}
?>
			<div class="panel-header panel-header-sm" style="padding-top: 0px; height: 200px;">
				<a href="./index.php"><img class="mx-auto d-block mt-5" src="./img/logo.png"/></a>
			</div>
			<div class="content" style="padding-bottom: 0;">
				<div class="animated fadeInUp faster">
					<div class="mx-auto d-block card card-chart col-lg-6 col-md-8">
						<div class="card-header">
							<h4 class="card-title">Add item</h4>
						</div>
						<div class="card-body">
							<form method="POST" class="form-signin" enctype="multipart/form-data">
								<div class="form-label-group">
									<label for="inputName">Name</label>
									<input type="text" name="name" id="inputName" class="form-control" placeholder="Put the item name" required autofocus/>
								</div>
								<div class="form-label-group">
									<label for="inputDescription">Description</label>
									<textarea name="description" id="inputDescription" class="form-control" placeholder="Put the item description" required></textarea>
								</div>
								<div class="form-label-group">
									<label for="inputImage">Image</label>
									<input type="file" name="image" id="inputImage" class="form-control"/>
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
	</div>
<?php } else {
	header('location: ../index.php');
} ?>
