<?php require_once "../controllerUserData.php"; ?>
<div class="otpModal"> <!-- this is the entire modal form, including the background -->
    <div class="cd-user-modal-container1"> <!-- this is the container1 wrapper -->
        <div class="container1">
        <div class="forms">
                <div class="form-content">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="" method="POST" autocomplete="off">
                    <h2 class="text-center">Verify Your Account</h2>
                    <?php 
                    if(isset($_SESSION['info'])){
                        ?>
                        <div class="alert alert-success text-center">
                            <?php echo $_SESSION['info']; ?>
                        </div>
                        <?php
                    }
                    ?>
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
                    <div class="form-group">
                        <input class="form-control" type="number" name="otp" placeholder="Enter verification code" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="check" value="Submit">
                    </div>
                </form>
            </div>
            </div>
            </div>
        </div>
        </div>
    </div> <!-- cd-user-modal-container1 -->
  </div> <!-- cd-user-modal -->
