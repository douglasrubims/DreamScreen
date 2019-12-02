<?php if(!strpos($_SERVER['REQUEST_URI'], 'pages')) { ?>
			<div class="panel-header panel-header-sm" style="padding-top: 0px; height: 200px;">
				<a href="./index.php"><img class="mx-auto d-block mt-5" src="./img/logo.png"/></a>
			</div>
			<div class="content" style="padding-bottom: 0;">
				<div class="card-columns">
<?php foreach($items as $item) { ?>
					<div class="animated fadeInUp faster">
						<div class="card card-chart">
							<div class="card-header">
<?php if($item["image"] != Null) { ?>
								<img class="card-img-top mx-auto d-block rounded" src="./getImage.php?id=<?php echo $item["id"] ?>" style="max-height: 150px; width: auto;" />
<?php } ?>
								<h4 class="card-title text-center"><?php echo $item["name"]; ?></h4>
								<div class="dropdown">
									<button type="button" class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
										<i class="now-ui-icons loader_gear"></i>
									</button>
									<div class="dropdown-menu dropdown-menu-right">
										<a class="dropdown-item" href="./index.php?editItem&id=<?php echo $item["id"]; ?>">Edit</a>
										<a class="dropdown-item text-danger" href="./removeItem.php?id=<?php echo $item["id"]; ?>">Remove</a>
									</div>
								</div>
							</div>
							<div class="card-body">
								<div style="padding-left: 18px;">
									<?php echo $item["description"]; ?>

								</div>
							</div>
						</div>
					</div>
<?php
	}
?>
				</div>
			</div>
<?php
	require('./layout/footer.php');
	} else {
    	header('location: ../index.php');
	}
?>