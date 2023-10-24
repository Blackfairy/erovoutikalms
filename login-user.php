<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Form</title>
    <link rel="stylesheet" href="login-user.css">
</head>
<body>

    <div class="main">
        <div class="navbar">
            <div class="icon">
            </div>

        </div> 
        <div class="content">
		<img src="Erovoutika.png">
            <h1> Welcome Back! Please login <br>to your account</h1>
                <form class="form" action="login-user.php" method="POST" autocomplete="">
                   <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Email Address" required value="<?php echo $email ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Password" required>
                    </div>
					<div class="link1 forget-pass text-left"><a href="forgot-password.php">Forgot password?</a></div>
                    <button class="btnn" type="submit" name="login" value="Login" ><a href="#">Login</a></button>
					 <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
				<div class="link login-link text-center"> <p>Don't have an account yet?<a href="signup-user.php">Sign up</a></div>
				   
                    
                </form>
                    </div>
                </div>
				
    
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>