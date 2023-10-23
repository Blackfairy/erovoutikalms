<?php

if($_SERVER["REQUEST_METHOD"] === "POST")   {

    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];

    try {   
        require_once("dbh.onc.php");
        require_once("signup_model.inc.php");
        require_once 'signup_view.inc.php';
        require_once ("signup_contr.inc.php");

        //ERROR HANDLERSSSS
        $errors = [];

        if (is_input_empty($username, $password, $email))    {
            $errors["empty_input"] = "Fill in all fields!";
        }
        if (is_email_invalid($email))    {
            $errors["invali_email"] = "Invalid email used!";
        }
        if (is_username_taken($pdo, $username))    {
            $errors["username_taken"] = "Username already taken!";
        }
        if (is_email_registered($pdo, $email))    {
            $errors["email_used"] = "Email already registered!";
        }

        require_once "config_session.inc.php";

        if($errors) {
            $_SESSION["errors_signup"] = $errors;

            header("Location: ../login_signup.php");
            die();
        }
        
        create_user($pdo, $username, $password, $email);

        header("Location: ../login_signup.php?signup=success");
        
        $pdo = null;
        $stmt = null;

        die();
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }

} else  {
    header("Location: ../login_signup.php");
    die();
}