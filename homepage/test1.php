<?php require_once "../controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <link rel="stylesheet" href="testcss.css">
    <title>Document</title>
</head>

  <header role="banner">
    <div id="cd-logo"><a href="#0"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/148866/cd-logo_1.svg" alt="Logo"></a></div>

    <nav class="navbar">
      <ul>
        <!-- inser more links here -->
        <li><a class="cd-signin" href="#0">Sign in</a></li>
        <li><a class="cd-signup" href="#0">Sign up</a></li>
      </ul>
    </nav>
  </header>
  <body>
  <div class="cd-user-modal"> <!-- this is the entire modal form, including the background -->
    <div class="cd-user-modal-container"> <!-- this is the container wrapper -->
        <div class="container1">
            <input type="checkbox" id="flip">
            <div class="cover">
              <div class="front">
                <img src="homepage/img/login.png" alt="">
              </div>
              <div class="back">
                <img class="backImg" src="homepage/img/signup.png" alt="">
              </div>
            </div>
            <div class="forms">
                <div class="form-content">
                  <div class="login-form">
                    <div class="title">Login</div>
                    <h1> Welcome Back! Please login <br>to your account</h1>
                    <form class="form" action="login_signup.php" method="POST" autocomplete="off">
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
                    <div class="input-boxes">
                      <div class="input-box">
                        <i class="fas fa-envelope"></i>
                        <input class="form-control" type="email" name="email" placeholder="Email Address" required value="<?php echo $email ?>">
                      </div>
                      <div class="input-box">
                        <i class="fas fa-lock"></i>
                        <input class="form-control" type="password" name="password" placeholder="Password" required>
                      </div>
                      <div class="text"><a href="forgot-password.php">Forgot password?</a></div>
                      <div class="button input-box">
                        <input type="submit" name="login" value="Login">
                        
                      </div>
                     
                      <div class="text sign-up-text">Don't have an account? <label for="flip">Signup now</label></div>
                    </div>
                </form>
              </div>
              <form action="login_signup.php" method="POST" autocomplete="off">
                <div class="signupuser-form">
                <div class="title">Signup</div>
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
                                <div class="alert alert-danger text-center">
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
                    <div class="row1">
                                                <!-- Email here  -->
                                                <div class="col-md-4 mb-3">
                                                    <label for="email" class="text-white form-label">Email</label>
                                                    <input type="email" name="email" class="form-control" id="email" placeholder="Juan@gmail.com" onkeyup="this.value=this.value.replace(/[<>]/g,'')" required="">
                                                </div>
                                                <!-- First name here  -->
                                                <div class="col-md-4 mb-3">
                                                    <label for="fname" class="text-white form-label">First Name</label>
                                                    <input type="text" name="fname" class="form-control" id="fname" placeholder="Juan" onkeyup="this.value=this.value.replace(/[<>]/g,'')" required="">
                                                </div>
                                                <!-- Last name here  -->
                                                <div class="col-md-4 mb-3">
                                                    <label for="lname" class="text-white form-label">Last Name</label>
                                                    <input type="text" name="lname" class="form-control" id="lname" placeholder="Tamad" onkeyup="this.value=this.value.replace(/[<>]/g,'')" required="">
                                                </div>
                                                <!-- contact here  -->
                                                <div class="col-md-4 mb-3">
                                                    <label for="contact" class="text-white form-label">Contact
                                                        (+63)</label>
                                                    <input type="text" name="contact" class="form-control" id="contact" placeholder="xxxx-xxx-xxx" onkeyup="this.value=this.value.replace(/[<>]/g,'')" pattern="[0-9]{10}" minlength="10" maxlength="10" required="">
                                                </div>
                                                <!-- password here  -->
                                                <div class="col-md-4 mb-3">
                                                    <label for="password" class="text-white form-label">Password</label>
                                                    <input type="password" name="password" class="form-control" id="password" placeholder="password here" onkeyup="this.value=this.value.replace(/[<>]/g,'')" required="">
                                                </div>
                                                <!-- confirm password here  -->
                                                <div class="col-md-4 mb-3">
                                                    <label for="c_password" class="text-white form-label">Confirm
                                                        Password</label>
                                                    <input type="password" name="c_password" class="form-control" id="c_password" placeholder="confirm password here" onkeyup="this.value=this.value.replace(/[<>]/g,'')" required="">
                                                </div>
                                                <!-- Company and University here  -->
                                                <div class="col-md-6 mb-3">
                                                    <label for="company_univ" class="text-white form-label">Company /
                                                        University</label>
                                                    <input type="text" name="company_univ" class="form-control" id="company_univ" placeholder="Company / University" onkeyup="this.value=this.value.replace(/[<>]/g,'')" required="">
                                                </div>
                                                <!-- Address here -->
                                                <div class="col-md-6 mb-3">
                                                    <label for="address" class="text-white form-label">Address</label>
                                                    <input type="text" name="address" class="form-control" id="address" placeholder="Address here" onkeyup="this.value=this.value.replace(/[<>]/g,'')" required="">
                                                </div>
                                                <div class="col-md-6 mb-3">

                                                    <label>
                                                        <input type="checkbox" name="accept-terms" id="accept-terms" required>By joining Erovoutika, you agree to our
                                                        <br> <b>Terms of Service</b> and <b>Privacy Policy</b>
                                                    </label>
                                                </div>
                                            </div>
                      </form>
                    </div>
            </div>
            </div>
    </div> <!-- cd-user-modal-container -->
  </div> <!-- cd-user-modal -->

  <script src="testScript1.js"></script>

  </body>
</html>