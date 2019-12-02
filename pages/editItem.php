<?php
	if(!strpos($_SERVER['REQUEST_URI'], 'pages')) {
		if(!isset($_GET['id'])) header('location: ./index.php');
		if(isset($_POST['id']) AND isset($_POST['name']) AND isset($_POST['description'])){
			$id = $_POST['id'];
			$name = $_POST['name'];
			$description = $_POST['description'];
			$image = Null;
			if(exif_imagetype($_FILES['image']['tmp_name'])) {
				$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
				mysqli_query($connection, "UPDATE Item SET name='$name', description='$description', image='$image' WHERE id='$id' AND id_user='$id_user'") or die(mysql_error());
			} else mysqli_query($connection, "UPDATE Item SET name='$name', description='$description' WHERE id='$id' AND id_user='$id_user'") or die(mysql_error());
			header('location: ./index.php');
		} else {
			$id = $_GET['id'];
			$item = mysqli_query($connection, "SELECT * FROM Item WHERE id='$id' AND id_user='$id_user'") or die(mysql_error());
			$item = mysqli_fetch_assoc($item);
		}
?>
			<div class="panel-header panel-header-sm" style="padding-top: 0px; height: 200px;">
				<a href="./index.php"><img class="mx-auto d-block mt-5" src="./img/logo.png"/></a>
			</div>
			<div class="content" style="padding-bottom: 0;">
				<div class="animated fadeInUp faster">
					<div class="mx-auto d-block card card-chart col-lg-6 col-md-8">
						<div class="card-header">
							<h4 class="card-title">Edit item</h4>
						</div>
						<div class="card-body">
							<form method="POST" class="form-signin" enctype="multipart/form-data">
								<input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>"/>
								<div class="form-label-group">
									<label for="inputName">Name</label>
									<input type="text" name="name" id="inputName" value="<?php echo $item["name"] ?>" class="form-control" placeholder="Put the item name" required autofocus/>
								</div>
								<div class="form-label-group">
									<label for="inputDescription">Description</label>
									<textarea name="description" id="inputDescription" class="form-control" placeholder="Put the item description" required><?php echo $item["description"] ?></textarea>
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
<?php } else {
	header('location: ../index.php');
} ?>