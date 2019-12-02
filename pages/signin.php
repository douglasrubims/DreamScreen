<?php if(!strpos($_SERVER['REQUEST_URI'], 'pages')) { ?>
        <form action="./auth.php" method="POST" class="form-signin animated <?php if(!strpos($_SERVER['REQUEST_URI'], '?error') !== false) echo "fadeIn"; else echo "shake"; ?>">
			<div class="text-center mb-4">
				<img class="mb-1" src="./img/logo.png" alt="" width="150" height="150">
				<h1 class="h3 mb-3 font-weight-normal">Sign In</h1>
				<p>Welcome to <code>DreamScreen</code></p>
<?php if(strpos($_SERVER['REQUEST_URI'], '?error') !== false) { ?>
			<div class="card">
				<div class="card-body">
					<h1 class="text-center text-danger lead"><strong>Error! Try again.</strong></h1>
				</div>
			</div>
<?php } ?>
			</div>
			<div class="form-label-group">
				<input type="email" name="email" id="inputEmail" class="form-control" placeholder="E-mail" required autofocus>
				<label for="inputEmail">E-mail</label>
			</div>
			<div class="form-label-group">
				<input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
				<label for="inputPassword">Password</label>
			</div>
			<button class="btn btn-lg btn-primary btn-block" type="submit">Sign In</button>
			Not registered here? <a href="./index.php?signup">Sign Up</a>.
			<p class="mt-5 mb-3 text-muted text-center">&copy; 2019</p>
        </form>
<?php } else {
    header('location: ../index.php');
} ?>