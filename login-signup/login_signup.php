<?php require_once "../controllerUserData.php"; ?>
<div class="cd-user-modal"> <!-- this is the entire modal form, including the background -->
    <div class="cd-user-modal-container1"> <!-- this is the container1 wrapper -->
        <div class="container1">
            <input type="checkbox" id="flip">
            <div class="cover">
              <div class="front">
                <img src="../homepage/img/login.png" alt="">
              </div>
              <div class="back">
                <img class="backImg" src="../homepage/img/signup.png" alt="">
              </div>
            </div>
            <div class="forms">
                <div class="form-content">
                  <div class="login-form">
                    <div class="title">Login</div>
                    <h1> Welcome Back! Please login <br>to your account</h1>
                    <form class="form" action="" method="POST" autocomplete="off">
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
                      <div class="text"><a href="../login-signup/forgot-password.php">Forgot password?</a></div>
                      <div class="button input-box">
                        <input type="submit" name="login" value="Login">
                        
                      </div>
                     
                      <div class="text sign-up-text">Don't have an account? <label for="flip">Signup now</label></div>
                    </div>
                </form>
              </div>
              <form action="" method="POST" autocomplete="off">
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
                    <div class="input-boxes">
                      <div class="input-box">
                        <i class="fas fa-user"></i>
                        <input class="form-control" type="text" name="name" placeholder="Name" required value="<?php echo $name ?>">
                      </div>
                      <div class="input-box">
                        <i class="fas fa-envelope"></i>
                        <input class="form-control" type="email" name="email" placeholder="Email Address" required value="<?php echo $email ?>">
                      </div>
                      <div class="input-box">
                        <i class="fas fa-lock"></i>
                        <input class="form-control" type="password" name="password" placeholder="Password" required>
                      </div>
                      <div class="input-box">
                        <i class="fas fa-lock"></i>
                        <input class="form-control" type="password" name="cpassword" placeholder="Confirm password" required>
                      </div>
                      <div class="form-group">
                          <label>
                              <input type="checkbox" id="accept-terms" required>By joining Erovoutika, you agree to our
                              <br> <b>Terms of Service</b> and <b>Privacy Policy</b>
                          </label>
                      </div>
                            <div class="button input-box">
                                <input type="submit" name="signup" value="Create Account">
                            </div>
                            
                      <div class="text sign-up-text">Already have an account? <label for="flip">Login now</label></div>
                      </form>
                    </div>
            </div>
            </div>
            </div>
          </div>
    </div> <!-- cd-user-modal-container1 -->
  </div> <!-- cd-user-modal -->
