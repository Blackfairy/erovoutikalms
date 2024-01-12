<?php 
session_start();
require "connection.php";
require "send_mail.php"; // Include the send_mail.php script
$email = "";
$name = "";
$errors = array(); // Initialize an array to store errors

if (isset($_POST['signup'])) {
    $fname = mysqli_real_escape_string($con, $_POST['fname']);
    $lname = mysqli_real_escape_string($con, $_POST['lname']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $contact = mysqli_real_escape_string($con, $_POST['contact']);
    $dob = mysqli_real_escape_string($con, $_POST['date_of_birth']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['c_password']);
    $company_univ = mysqli_real_escape_string($con, $_POST['company_univ']);
    $address = mysqli_real_escape_string($con, $_POST['address']);

    // Validation
    if ($password !== $cpassword) {
        $errors['password'] = "Confirm password not matched!";
    }
    if (strlen($password) < 8) {
        $errors['password'] = "Password length must be 8 characters long!";
    }
    if(preg_match('/^\d+$/', $password)) {
        $errors['password'] = "Password cannot be all numbers.";
    }
    if(preg_match('/[!@#$%^&*(),.?":{}|<>]/', $password)) {
        $errors['password'] = "Password cannot contain symbols";
    }
    $email_check = "SELECT * FROM students WHERE student_email = '$email'";
    $res = mysqli_query($con, $email_check);
    if(mysqli_num_rows($res) > 0){
        $errors['email'] = "Email that you have entered is already exist!";
    }
    // Add other validation checks...

    // Database insertion
 
if(count($errors) === 0){
    $encpass = password_hash($password, PASSWORD_BCRYPT);
    $code = rand(999999, 111111);
    $activation = "0";
    $insert_data = "INSERT INTO students (first_name, last_name, student_email, contact, date_of_birth, password, code, activation, university, address)
                    values('$fname', '$lname', '$email', '$contact', '$dob', '$encpass', '$code', '$activation', '$company_univ', '$address')";
    $data_check = mysqli_query($con, $insert_data);
    if($data_check){
        $subject = "Email Verification Code";
        $message = "Your verification code is $code";

        // Use the send_mail function from send_mail.php
        $mailResult = send_mail($email, $subject, $message);

        if ($mailResult === true) {
            $info = "A 6-digit verification code was sent to $email";
            $_SESSION['info'] = $info;
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            header('location: ../login-signup/user-otp.php');
            exit();
        } else {
            $errors['otp-error'] = "Failed while sending code! Error: $mailResult";
        }
    } else {
        $errors['db-error'] = "Failed while inserting data into the database!";
    }
}
}
if (isset($_POST['start-course'])) {
    $email = $_SESSION['email'];

    // Check if the user is enrolled
    $checkEnrollmentSql = "SELECT * FROM enrolled_students WHERE student_email = '$email'";
    $run_CheckEnrollmentSql = mysqli_query($con, $checkEnrollmentSql);

    if ($run_CheckEnrollmentSql && mysqli_num_rows($run_CheckEnrollmentSql) > 0) {
        // User is enrolled
        header('Location: html.html');
        exit(); // Make sure to stop further execution
    } else {
        // User is not enrolled
        echo 'not_enrolled';
    }
}



if (isset($_POST['authenticate'])) {
    $email = $_SESSION['email'];
    $password = $_SESSION['password'];

    if ($email != false && $password != false) {
        $courseName = $_POST['courseName']; // Get the course name from the form
        $referenceNumber = $_POST['reference_number']; // Get the reference number from the form

        // Continue with existing authentication logic

        $sql = "SELECT * FROM students WHERE student_email = '$email'";
        $run_Sql = mysqli_query($con, $sql);

        if ($run_Sql) {
            $fetch_info = mysqli_fetch_assoc($run_Sql);
            $activation = $fetch_info['activation'];

            if ($activation == "1") {
                $adminEmail = "amanterenz1@gmail.com"; // Replace with the actual admin email
                $subject = "Authorization Request";
                $userMessage = "Your authorization request for the $courseName course has been sent to the admin. Wait for approval.
                   
                ";

                $adminMessage = "
                        User with email $email is requesting authorization for $courseName course.
                   
                ";

                $userSender = "From: erovoutika.test.email01@gmail.com";
                $adminSender = "From: erovoutika.test.email01@gmail.com";

                // Send email to the user
                if (mail($email, $subject, $userMessage, $userSender)) {
                    $info = "Authorization request was sent to Admin. Wait for approval.";
                    $_SESSION['info'] = $info;
                    $_SESSION['email'] = $email;
                    $_SESSION['password'] = $password;
                    echo "<script>
                        alert('Authorization request sent to user and admin. Wait for approval.');
                    </script>";
                } else {
                    $errors['otp-error'] = "Failed while sending Authorization request to the user!";
                }

                // Send email to the admin
                if (mail($adminEmail, $subject, $adminMessage, $adminSender)) {
                    // Email to admin sent successfully
                } else {
                    $errors['otp-error'] = "Failed while sending Authorization request to the admin!";
                }

                // Update the new 'receipt' table in the existing database
                $receiptSql = "INSERT INTO `receipt` 
                    (`reference_number`, `user_email`) 
                    VALUES ('$referenceNumber', '$email')";
                $con->query($receiptSql);
            } else {
                $errors['otp-error'] = "User is not authorized.";
            }
        } else {
            $errors['otp-error'] = "Error while querying the database.";
        }
    } else {
        $errors['otp-error'] = "Email or password is missing.";
    }
}




    //if user click verification code submit button
    if(isset($_POST['check'])){
        $_SESSION['info'] = "";
        $otp_code = mysqli_real_escape_string($con, $_POST['otp']);
        $check_code = "SELECT * FROM students WHERE code = $otp_code";
        $code_res = mysqli_query($con, $check_code);
        if(mysqli_num_rows($code_res) > 0){
            $fetch_data = mysqli_fetch_assoc($code_res);
            $fetch_code = $fetch_data['code'];
            $email = $fetch_data['email'];
            $code = 0;
            $activation = '1';
            $update_otp = "UPDATE students SET code = $code, activation = '$activation' WHERE code = $fetch_code";
            $update_res = mysqli_query($con, $update_otp);
            if($update_res){
                $_SESSION['name'] = $name;
                $_SESSION['email'] = $email;
                header('location: ../homepage/index.php');
                exit();
            }else{
                $errors['otp-error'] = "Failed while updating code!";
            }
        }else{
            $errors['otp-error'] = "You've entered incorrect code!";
        }
    }
 //if user click login button
if(isset($_POST['login'])){
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
     
    // Retrieve the hashed password from the database
    $hashed_password_query = "SELECT password FROM students WHERE student_email = '$email'";
    $res = mysqli_query($con, $hashed_password_query);
    
    if($res && mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        $hashed_password = $row['password'];
        
        // Compare the hashed password with the entered password using password_verify()
        if(password_verify($password, $hashed_password)){
            $_SESSION['email'] = $email;
            $activation_query = "SELECT activation FROM students WHERE student_email = '$email'";
            $activation_result = mysqli_query($con, $activation_query);
            
            if ($activation_result && mysqli_num_rows($activation_result) > 0) {
                $activation_data = mysqli_fetch_assoc($activation_result);
                $activation = $activation_data['activation'];
                $_SESSION['password'] = $password;
                header('location: index.php');
            } else {
                // Generate a new verification code
                $code = rand(999999, 111111);
                $update_code = "UPDATE students SET code = $code WHERE email = '$email'";
                $update_res = mysqli_query($con, $update_code);

                if ($update_res) {
                    $subject = "Email Verification Code";
                    $message = "Your new verification code is $code";

                    // Use the send_mail function from send_mail.php
                    $mailResult = send_mail($email, $subject, $message);

                    if ($mailResult === true) {
                        $info = "You still haven't 1 your account yet. A new 6-digit verification code was sent to $email";
                        $_SESSION['info'] = $info;
                        $_SESSION['email'] = $email;
                        $_SESSION['password'] = $password;
                        header('location: ../login-signup/user-otp.php');
                        exit();
                    } else {
                        $errors['otp-error'] = "Failed while sending code! Error: $mailResult";
                    }
                } else {
                    $errors['db-error'] = "Failed while updating code!";
                }
            }
        } else {
            $errors['email'] = "<span style='color: black; font-weight: 600; margin-left: -15px;'>Incorrect email or password!";
        }
    } else {
        $errors['email'] = "<span style='color: black; font-weight: 600; font-size: 14px; margin-left: -15px;'>The email you entered isn’t connected to an account!";
    }
}


    //if user click continue button in forgot password form
    if(isset($_POST['check-email'])){
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $check_email = "SELECT * FROM students WHERE student_email='$email'";
        $run_sql = mysqli_query($con, $check_email);
        if(mysqli_num_rows($run_sql) > 0){
            $code = rand(999999, 111111);
            $insert_code = "UPDATE students SET code = $code WHERE student_email = '$email'";
            $run_query =  mysqli_query($con, $insert_code);
            if($run_query){
                $subject = "Password Reset Code";
                $message = "Your password reset code is $code";
                $sender = "From: erovoutika.test.email01@gmail.com";
                if(mail($email, $subject, $message, $sender)){
                    $info = "We will send a verification code to $email";
                    $_SESSION['info'] = $info;
                    $_SESSION['email'] = $email;
                    header('location: ../login-signup/reset-code.php');
                    exit();
                }else{
                    $errors['otp-error'] = "Failed while sending code!";
                }
            }else{
                $errors['db-error'] = "Something went wrong!";
            }
        }else{
            $errors['email'] = "This email address does not exist!";
        }
    }

    //if user click check reset otp button
    if(isset($_POST['check-reset-otp'])){
        $_SESSION['info'] = "";
        $otp_code = mysqli_real_escape_string($con, $_POST['otp']);
        $check_code = "SELECT * FROM students WHERE code = $otp_code";
        $code_res = mysqli_query($con, $check_code);
        if(mysqli_num_rows($code_res) > 0){
            $fetch_data = mysqli_fetch_assoc($code_res);
            $email = $fetch_data['email'];
            $_SESSION['email'] = $email;
            $info = "Create a new password";
            $_SESSION['info'] = $info;
            header('location: ../login-signup/new-password.php');
            exit();
        }else{
            $errors['otp-error'] = "You've entered incorrect code!";
        }
    }

    //if user click change password button
	if(isset($_POST['change-password'])){
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
    
    // Retrieve the old password from the database
    $email = $_SESSION['email'];
    $old_password_query = "SELECT password FROM students WHERE student_email = '$email'";
    $result = mysqli_query($con, $old_password_query);
    
    if($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $old_password = $row['password'];
        
        if($password && $cpassword === $old_password) {
            $errors['password'] = "New password cannot be the same as the old password.";
        }
        elseif($password !== $cpassword){
            $errors['password'] = "Confirm password not matched!";
        }
        elseif(preg_match('/[!@#$%^&*(),.?":{}|<>]/', $password)) {
            $errors['password'] = "Password cannot contain symbols";
        }
        elseif(strlen($password) < 8) {
            $errors['password'] = "Password length must be 8 characters long!";
        }
        elseif(preg_match('/^\d+$/', $password)) {
            $errors['password'] = "Password cannot be all numbers.";
        }
        else {
            $code = 0;
            $encpass = password_hash($password, PASSWORD_BCRYPT);
            $update_pass = "UPDATE students SET code = $code, password = '$encpass' WHERE email = '$email'";
            $run_query = mysqli_query($con, $update_pass);
            if($run_query) {
                $info = "Your password changed. Now you can login with your new password.";
                $_SESSION['info'] = $info;
                header('Location: ../login-signup/password-changed.php');
            } else {
                $errors['db-error'] = "Failed to change your password!";
            }
        }
    } else {
        $errors['db-error'] = "Failed to retrieve the old password.";
    }
}
 
   //if login now button click
   if(isset($_POST['login-now'])){
    header('Location: ../homepage/userprofile.html');
}
?>