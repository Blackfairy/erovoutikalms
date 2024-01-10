<?php require_once "../controllerUserData.php"; ?>
<?php
$page_title = 'Add Student';
require_once('includes/load.php');
$all_categories = find_all('students');

if (isset($_POST['coursedashboard1'])) {
    $req_fields = array('llname', 'ffname', 'ddob', 'ggender', 'mmjor', 'ssemail');
    validate_fields($req_fields);

    if (empty($errors)) {
        $s_firstname = remove_junk($db->escape($_POST['ffname']));
        $s_lastname = remove_junk($db->escape($_POST['llname']));
        $s_dob = remove_junk($db->escape($_POST['ddob']));
        $s_gender = remove_junk($db->escape($_POST['ggender']));
        $s_major = remove_junk($db->escape($_POST['mmjor']));
        $s_semail = remove_junk($db->escape($_POST['ssemail']));


        $query  = "INSERT INTO students (";
        $query .=" first_name,last_name,date_of_birth,gender,major,student_email";
        $query .=") VALUES (";
        $query .=" '{$s_firstname}', '{$s_lastname}', '{$s_dob}', '{$s_gender}', '{$s_major}', '{$s_semail}'";
        $query .=")";
        $query .=" ON DUPLICATE KEY UPDATE student_email='{$s_semail}'";

        if ($db->query($query)) {
            $session->msg('s',"students added ");
            redirect('coursedashboard1.php', false);
        } else {
            $session->msg('d',' Sorry failed to add!');  
        }

    } else {
        $session->msg("d", $errors);
        redirect('coursedashboard1.php', false);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>EIRA | Register</title>
    <link rel="icon" type="images/x-icon" href="img/Rectangle 13.png" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
        rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I"
        crossorigin="anonymous"
    />
    <script
        src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"
    ></script>
    <script
        src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
        crossorigin="anonymous"
    ></script>

    <script src="https://kit.fontawesome.com/95c10202b4.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="scss/bootstrap.scss" />
    <link rel="stylesheet" href="testcss.css">
            
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Add this in the <head> section of your HTML -->
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="testScript1.js"></script>
        
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<style>
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
body {
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 20px;
  background: rgb(130, 106, 251);
}
.container {
  position: relative;
  max-width: 700px;
  width: 100%;
  background: #fff;
  padding: 25px;
  border-radius: 8px;
  box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
}
.container header {
  font-size: 1.5rem;
  color: #333;
  font-weight: 500;
  text-align: center;
}
.container .form {
  margin-top: 30px;
}
.form .input-box {
  width: 100%;
  margin-top: 20px;
}
.input-box label {
  color: #333;
}
.form :where(.input-box input, .select-box) {
  position: relative;
  height: 50px;
  width: 100%;
  outline: none;
  font-size: 1rem;
  color: #707070;
  margin-top: 8px;
  border: 1px solid #ddd;
  border-radius: 6px;
  padding: 0 15px;
}
.input-box input:focus {
  box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
}
.form .column {
  display: flex;
  column-gap: 15px;
}
.form .gender-box {
  margin-top: 20px;
}
.gender-box h3 {
  color: #333;
  font-size: 1rem;
  font-weight: 400;
  margin-bottom: 8px;
}
.form :where(.gender-option, .gender) {
  display: flex;
  align-items: center;
  column-gap: 50px;
  flex-wrap: wrap;
}
.form .gender {
  column-gap: 5px;
}
.gender input {
  accent-color: rgb(130, 106, 251);
}
.form :where(.gender input, .gender label) {
  cursor: pointer;
}
.gender label {
  color: #707070;
}
.address :where(input, .select-box) {
  margin-top: 15px;
}
.select-box select {
  height: 100%;
  width: 100%;
  outline: none;
  border: none;
  color: #707070;
  font-size: 1rem;
}
.form button {
  height: 55px;
  width: 100%;
  color: #fff;
  font-size: 1rem;
  font-weight: 400;
  margin-top: 30px;
  border: none;
  cursor: pointer;
  transition: all 0.2s ease;
  background: rgb(130, 106, 251);
}
.form button:hover {
  background: rgb(88, 56, 250);
}
/*Responsive*/
@media screen and (max-width: 500px) {
  .form .column {
    flex-wrap: wrap;
  }
  .form :where(.gender-option, .gender) {
    row-gap: 15px;
  }
}
</style>
</head>
<body>
    <section class="container">
      <header>Registration Form</header>
      <form action="#" class="form">
        <div class="input-box">
          <label>First Name</label>
          <input type="text" placeholder="Enter first name" required />
        </div>
        <div class="input-box">
        <label>Last Name</label>
        <input type="text" placeholder="Enter last name" required />
      </div>
        <div class="input-box">
          <label>Email Address</label>
          <input type="text" placeholder="Enter email address" required />
        </div>

        <div class="column">
          <div class="input-box">
            <label>College</label>
            <input type="text" placeholder="College course" required />
          </div>
          <div class="input-box">
            <label>Birth Date</label>
            <input type="date" placeholder="Enter birth date" required />
          </div>
        </div>
        <div class="gender-box">
          <h3>Gender</h3>
          <div class="gender-option">
            <div class="gender">
              <input type="radio" id="check-male" name="gender" checked />
              <label for="check-male">Male</label>
            </div>
            <div class="gender">
              <input type="radio" id="check-female" name="gender" />
              <label for="check-female">Female</label>
            </div>
            <div class="gender">
              <input type="radio" id="check-other" name="gender" />
              <label for="check-other">prefer not to say</label>
            </div>
          </div>
        </div>
        <div class="input-box address">
          <label>Course Enrolling </label>
          <div class="column">
            <div class="select-box">
              <select>
                <option hidden>Available Courses</option>
                <option>HTML</option>
                <option>CSS</option>
                <option>JAVASCRIPT</option>
                <option>PHP</option>
              </select>
            </div>
        </div>
        <button>Submit</button>
      </form>
    </section>

<?php require_once "../login-signup/login_signup.php"; ?>

<script type="module" src=".js/main.js"></script>
  </body>
</html>