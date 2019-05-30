    <main role="main" class="col login">
      <div class="align-items-center col-sm-4 offset-sm-4">
        <div class="login-form col-sm-12" >
			<h1 class="h2 lead mb-4">Login</h1>
			<div class="alert alert-<?php echo $current_controller->alert_state ?>"><?php echo $current_controller->alert_message ?></div>
			<form class="form" action="" method="post">
				<div class="form-group">
					<input type="text" for="email" name="email" placeholder="Enter Email" required="" class="form-control" id="email" value="<?php echo $_POST['email'] ?>">
					<span class="error-text" ><?php echo $current_controller->errors['email'] ?></span>
				</div>
				<div class="form-group">
					<input type="password" for="password" placeholder="Enter Password" required="" class="form-control" name="password" id="password" value="<?php echo $_POST['password'] ?>" >
					<span class="error-text" ><?php echo $current_controller->errors['password'] ?></span>
				</div>
				<div class="form-group">
					<span><input type="checkbox" name="remember"> Remember</span>
					<a href="" class="float-right">Forgot Password?</a>
				</div>
				<div class="form-group">
					<input type="submit" name="submit" value="Login" class="btn btn-sm btn-primary col-sm-12 " >
				</div>
				<div class="text-center">
					Don't have an account? <a href="signup">Create an Account</a>
				</div>

			</form>
		</div>
    </main>
