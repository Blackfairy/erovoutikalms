<?php require_once "../controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <link rel="stylesheet" href="testcss1.css">
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
  <div class="cd-payment-modal">
    <div class="cd-payment-modal-container">
        <div class="container1">
            <div class="forms">
                <div class="form-content">
                    <div class="login-form">
                        <div class="title">Authorization</div>
                        <h1>Enroll <br> your account</h1>
                        <form class="form" action="test1.php" method="POST" autocomplete="off" enctype="multipart/form-data">
                        <div class="input-boxes">
                              <div class="row1">
                                <!-- img here  -->
                                <div class="col-md-6 mb-3">
                                    <label for="img" class="text-black form-label">Upload Image Here</label>
                                    <input type="file" name="img" class="form-control" id="img" accept="image/*" placeholder="Image Here" onkeyup="this.value=this.value.replace(/[<>]/g,'')" required="">
                                </div>
                                <div class="uploaded-image-container">
                                    <!-- Placeholder for the uploaded image -->
                                    <img id="uploadedImage" src="" alt="Uploaded Image">
                                </div>
                                <!-- First name here  -->
                                <div class="col-md-5 mb-3">
                                    <label for="reference_number" class="text-black form-label">Reference Number</label>
                                    <input type="text" name="reference_number" class="form-control" id="reference_number" placeholder="Reference Number" onkeyup="this.value=this.value.replace(/[<>]/g,'')" required="">
                                </div>
                                <div class="button input-box">
                                    <input type="submit" name="start" value="Submit">
                                </div>
                            </div>
                        </form>
                        <!-- Container to display the uploaded image -->
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const fileInput = document.querySelector('input[type="file"]');
        const uploadedImage = document.getElementById('uploadedImage');

        fileInput.addEventListener('change', function () {
            const file = fileInput.files[0];
            if (file) {
                const imageUrl = URL.createObjectURL(file);
                uploadedImage.src = imageUrl;
            }
        });
    });
</script>
  <script src="testScript2.js"></script>

  </body>
</html>