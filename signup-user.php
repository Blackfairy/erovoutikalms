<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign-Up</title>
    <link rel="stylesheet" href="signup-user.css">
</head>
<body>
<div class="logo">
	<img src="Erovoutika_Logo.png">
</div>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="signup-user.php" method="POST" autocomplete="">
				<div class="link login-link text-center">Already have an account? <a href="login-user.php">SIGN IN</a></div>
                    <h2 class="text-center">Welcome to ERovoutika <br> Electronics Robotics Automation</h2>
                    <?php
                    if(count($errors) == 1){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }elseif(count($errors) > 1){
                        ?>
                        <div class="alert alert-danger">
                            <?php
                            foreach($errors as $showerror){
                                ?>
                                <li><?php echo $showerror; ?></li>
                                <?php
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="form-group">
                        <input class="form-control" type="text" name="name" placeholder="Name" required value="<?php echo $name ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Email Address" required value="<?php echo $email ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="cpassword" placeholder="Confirm password" required>
                    </div>
					<div class="form-group">
					<label>
						<input type="checkbox" id="accept-terms" required> By joining Erovoutika, you agree to our <br> <b>Terms of Service</b> and <b>Privacy Policy</b>
					</label>
					</div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="signup" value="Create Account">
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</body>
</html>