	<main role="main" class="col signup">
      <div class="align-items-center col-sm-4 offset-sm-4">
        <div class="signup-form col-sm-12" >
			<h1 class="h2 lead mb-4">Signup</h1>
			<div class="alert alert-<?php echo $current_controller->alert_state ?>"><?php echo $current_controller->alert_message ?></div>
			<form class="form" action="" method="post" >
				<div class="form-group">
					<input type="text" for="password"  placeholder="Enter First Name" required="" class="form-control" id="fname" name="fname" value="<?php echo $_POST['fname'] ?>" >
					<span class="error-text" ><?php echo $current_controller->errors['fname'] ?></span>
				</div>
				<div class="form-group">
					<input type="text" for="lname" placeholder="Enter Last Name" required="" class="form-control" id="lname" name="lname" value="<?php echo $_POST['lname'] ?>">
					<span class="error-text" ><?php echo $current_controller->errors['lname'] ?></span>
				</div>
				<div class="form-group">
					<input type="text" for="email"  placeholder="Enter Email" required="" class="form-control" id="email" name="email" value="<?php echo $_POST['email'] ?>">
					<span class="error-text" ><?php echo $current_controller->errors['email'] ?></span>
				</div>
				<div class="form-group">
					<input type="password" for="password" placeholder="Enter Password" required="" class="form-control" id="password" name="password" value="<?php echo $_POST['password'] ?>">	
					<span class="error-text" ><?php echo $current_controller->errors['password'] ?></span>
				</div>
				<div class="form-group">
					<input type="submit" name="submit" value="Submit" class="btn btn-sm btn-primary col-sm-4 offset-sm-4 " >
				</div>
				<div class="text-center">
					Already have an account? <a href="login">Login</a>
				</div>
			</form>
		</div>
    </main>