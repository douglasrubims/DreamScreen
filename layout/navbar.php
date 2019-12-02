<?php if(!strpos($_SERVER['REQUEST_URI'], 'layout')) { ?>
			<nav class="navbar navbar-expand-lg navbar-absolute" style="background: linear-gradient(to right, #0c2646 0%, #204065 60%, #2a5788 100%);">
				<div class="container-fluid">
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-bar navbar-kebab"></span>
						<span class="navbar-toggler-bar navbar-kebab"></span>
						<span class="navbar-toggler-bar navbar-kebab"></span>
					</button>
					<div class="collapse navbar-collapse justify-content-end" id="navigation">
						<ul class="navbar-nav">
							<li class="nav-item">
								<a class="nav-link" href="./index.php?addItem">
									<i class="now-ui-icons ui-1_simple-add"></i>
									<span class="d-lg-none d-md-block">Add</span>
								</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="now-ui-icons users_single-02"></i>
									<?php echo $user["name"]; ?>
								</a>
								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
									<a class="dropdown-item" href="./index.php?editProfile">Profile</a>							
									<a class="dropdown-item" href="./logout.php">Log out</a>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</nav>
<?php } ?>
