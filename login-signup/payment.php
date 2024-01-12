<?php require_once "../controllerUserData.php"; ?>
<div class="cd-payment-modal">
    <div class="cd-payment-modal-container">
        <div class="container2">
            <div class="cd-close-form"><i class="fa-regular fa-circle-xmark" aria-hidden="true"></i></div>
            <!-- Close button added here -->
            <div class="forms">
                <div class="form-content">
                    <div class="authentication">
                        <div class="title">Authorization</div>
                        <h1>Enroll <br> your account
                            <div class="default-image-container">
                                <img src="img/img.jpeg" alt="Default Image">
                            </div>
                        </h1>
                        <form class="form" action="" method="POST" autocomplete="off" enctype="multipart/form-data">
                            <div class="input-boxes">
                                <div class="row2">
                                    <!-- img here  -->
                                    <div class="col-md-12 mb-3">
                                        <label for="img" class="text-black form-label">Upload Proof of Payment Here</label>
                                        <input type="file" name="img" class="form-control" id="img" accept="image/*" placeholder="Image Here" onkeyup="this.value=this.value.replace(/[<>]/g,'')" required="">
                                    </div>
                                    <!-- Placeholder for the uploaded image -->
                                    <div class="col-md-12 mb-3 uploaded-image-container">
                                        <img id="uploadedImage" src="" alt="Uploaded Image">
                                    </div>
                                    <!-- Reference Number input -->
                                    <div class="col-md-12 mb-3">
                                        <label for="reference_number" class="text-black form-label">Reference Number</label>
                                        <input type="text" name="reference_number" class="form-control" id="reference_number" placeholder="Reference Number" onkeyup="this.value=this.value.replace(/[<>]/g,'')" required="">
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="courseName" class="text-black form-label">Course Name</label>
                                        <select name="courseName" class="form-control" id="courseName" required="">
                                        <option value="" disabled selected>Select Course</option>
                                        <option value="HTML">HTML</option>
                                        <option value="CSS">CSS</option>
                                        <option value="JAVASCRIPT">JAVASCRIPT</option>
                                        <option value="PHP">PHP</option>
                                        <option value="GAME DEVELOPMENT & ANIMATION">GAME DEVELOPMENT & ANIMATION</option>
                                        <option value="CISCO WAN TECHNOLOGY">CISCO WAN TECHNOLOGY</option>
                                        <option value="CLOUD COMPUTING">CLOUD COMPUTING</option>
                                        <option value="other">Other</option>
                                    </select>    
                                    </div>
                                    <!-- Submit button -->
                                    <div class="button input-box">
                                        <input type="submit" name="authenticate" value="Submit">
                                    </div>
                                </div>
                            </div>
                        </form>
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
