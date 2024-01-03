<?php
$page_title = 'Add Student';
require_once('includes/load.php');
$all_categories = find_all('students');

if (isset($_POST['test_students'])) {
    $req_fields = array('llname', 'ffname', 'ddob', 'ggender', 'mmjor', 'ssemail', 'eecourses', 'eenrolledat');
    validate_fields($req_fields);

    if (empty($errors)) {
        $s_firstname = remove_junk($db->escape($_POST['ffname']));
        $s_lastname = remove_junk($db->escape($_POST['llname']));
        $s_dob = remove_junk($db->escape($_POST['ddob']));
        $s_gender = remove_junk($db->escape($_POST['ggender']));
        $s_major = remove_junk($db->escape($_POST['mmjor']));
        $s_semail = remove_junk($db->escape($_POST['ssemail']));
        $s_ecourses = remove_junk($db->escape($_POST['eecourses']));
        $s_enrolledat = remove_junk($db->escape($_POST['eenrolledat']));


        $query  = "INSERT INTO students (";
        $query .=" first_name,last_name,date_of_birth,gender,major,student_email,enrolled_courses,enrolled_at";
        $query .=") VALUES (";
        $query .=" '{$s_firstname}', '{$s_lastname}', '{$s_dob}', '{$s_gender}', '{$s_major}', '{$s_semail}', '{$s_ecourses}', '{$s_enrolledat}'";
        $query .=")";
        $query .=" ON DUPLICATE KEY UPDATE student_email='{$s_semail}'";

        if ($db->query($query)) {
            $session->msg('s',"students added ");
            redirect('test_students.php', false);
        } else {
            $session->msg('d',' Sorry failed to added!');
            redirect('students.php', false);
        }

    } else {
        $session->msg("d", $errors);
        redirect('test_students.php', false);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<section class="container2">
      <header>Registration Form</header>  
<div class="row">
    <div class="col-md-8">
        <div class="panel panel-default">
            
            <div class="panel-body">
                
                    <form method="post" action="test_students.php" class="form">
                        <div class="form-group">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="llname" placeholder="Last Name">
                                    </div>
                        
                            
                                    <div class="input-group">
 
                                        <input type="text" class="form-control" name="ffname"
                                            placeholder="First Name">
                                    </div>
                               

                                
                                    <div class="input-group">
 
                                        <input type="date" class="form-control" name="ddob"
                                            placeholder="Date of Birth">
                                    </div>
                              
                                
                                    <div class="input-group">
 
                                        <input type="text" class="form-control" name="ggender"
                                            placeholder="Gender">
                                    </div>
                                
                                
                                    <div class="input-group">
 
                                        <input type="text" class="form-control" name="mmjor"
                                            placeholder="Major">
                                    </div>
                             
                                
                                    <div class="input-group">
 
                                        <input type="text" class="form-control" name="ssemail"
                                            placeholder="Student Email">
                                    </div>
                            
                                
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="eecourses"
                                            placeholder="Enrolled Courses">
                                    </div>
                          
                                
                                    <div class="input-group">
                                        <input type="date" class="form-control" name="eenrolledat"
                                            placeholder="Enrolled Date">
                                    </div>
                        
                                
                                    <div class="input-group">
                                <button type="submit" name="test_students" class="btn">Add students</button>
                                    </div>
                         
                            
                        </div>
                        
                    </form>
                
            </div>
        </div>
    </div>
</div>
</section>
<style>
  /* Import Google font - Poppins */
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
.container2 {
  position: relative;
  max-width: 700px;
  width: 100%;
  background: #fff;
  padding: 25px;
  border-radius: 8px;
  box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
}
.container2 header {
  font-size: 1.5rem;
  color: #333;
  font-weight: 500;
  text-align: center;
}
.container2 .form {
  margin-top: 30px;
}
.form .input-group {
  width: 100%;
  margin-top: 20px;
}
.input-group label {
  color: #333;
}
.form :where(.input-group input, .select-box) {
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
.input-group input:focus {
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

</body>
</html>