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
                              <div class="row1">
                                <!-- Email here  -->
                                <div class="col-md-6 mb-3">
                                    <label for="email" class="text-black form-label">Email</label>
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Juan@gmail.com" onkeyup="this.value=this.value.replace(/[<>]/g,'')" required="">
                                </div>
                                <!-- First name here  -->
                                <div class="col-md-5 mb-3">
                                    <label for="fname" class="text-black form-label">First Name</label>
                                    <input type="text" name="fname" class="form-control" id="fname" placeholder="Juan" onkeyup="this.value=this.value.replace(/[<>]/g,'')" required="">
                                </div>
                                <!-- Last name here  -->
                                <div class="col-md-5 mb-3">
                                    <label for="lname" class="text-black form-label">Last Name</label>
                                    <input type="text" name="lname" class="form-control" id="lname" placeholder="Tamad" onkeyup="this.value=this.value.replace(/[<>]/g,'')" required="">
                                </div>
                                <!-- contact here  -->
                                <div class="col-md-6 mb-3">
                                    <label for="contact" class="text-black form-label">Contact (+63)</label>
                                    <input type="text" name="contact" class="form-control" id="contact" placeholder="xxxx-xxx-xxx" pattern="[0-9]{10}" minlength="10" maxlength="10" required="">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="gender" class="text-black form-label">Gender</label>
                                    <select name="gender" class="form-control" id="gender" required="">
                                        <option value="" disabled selected>Select gender</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                                <!-- date_of_birth here  -->
                                <div class="col-md-5 mb-3">
                                    <label for="date_of_birth" class="text-black form-label"> Date of Birth</label>
                                    <input type="date" name="date_of_birth" class="form-control" id="date_of_birth" placeholder="date of birth" required="">
                                </div>
                                <!-- password here  -->
                                <div class="col-md-5 mb-3">
                                    <label for="password" class="text-black form-label">Password</label>
                                    <input type="password" name="password" class="form-control" id="password" placeholder="password" required="">
                                </div>
                                <!-- confirm password here  -->
                                <div class="col-md-6 mb-3">
                                    <label for="c_password" class="text-black form-label">Confirm
                                        Password</label>
                                    <input type="password" name="c_password" class="form-control" id="c_password" placeholder="confirm password" required="">
                                </div>
                                <!-- Company and University here  -->
                                <div class="col-md-7 mb-3">
                                    <label for="company_univ" class="text-black form-label">Company/University</label>
                                    <input type="text" name="company_univ" class="form-control" id="company_univ" placeholder="Company / University" onkeyup="this.value=this.value.replace(/[<>]/g,'')" required="">
                                </div>
                                <!-- Address here -->
                                <div class="col-md-5 mb-3">
                                    <label for="address" class="text-black form-label">Address</label>
                                    <input type="text" name="address" class="form-control" id="address" placeholder="Address" onkeyup="this.value=this.value.replace(/[<>]/g,'')" required="">
                                </div>
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
