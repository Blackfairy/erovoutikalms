<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>EIRA | Training Courses</title>
    <link rel="icon" type="images/x-icon" href="/homepage/img/Rectangle 13.png" />
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

    <link rel="stylesheet" href="./homepage/scss/bootstrap.scss" />

<style>
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap");
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif; }

body::-webkit-scrollbar {
    width: 15px; }
body::-webkit-scrollbar-track {
    background: #f1f1f1; }
body::-webkit-scrollbar-thumb {
    background: #888; }
body::-webkit-scrollbar-thumb:hover {
    background: #555; }

header {
    position: relative;
    width: 100%;
    height: 80vh; }

/*NAVIGATION MENU*/
.navbar .nav-item {
    padding: 20px;
    color: white;
    font-size: 20px;
    font-weight: 500;
    text-decoration: none; }
.navbar .nav-item:hover {
    text-decoration: underline;
    color: darkorange;
}

/*CAROUSEL SLIDER*/
figure {
    display: block;
    position: absolute;
    overflow: hidden;
    margin-top: 7%;
    left: 0;
    right: 0; }
figure .carousel-item {
    position: relative;
    width: 100%;
    height: 500px;
    object-fit: none;
    object-position: 0 5%; }
figure .carousel-item::after {
    content: "";
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    background: rgba(0, 0, 0, .6); }
figure .carousel-control-prev {
    width: 90px;
    height: 60px;
    position: absolute;
    top: 50%;
    left: 0;
    background: var(--bs-primary);
    border-radius: 0 50px 50px 0;
    opacity: 1; }
figure .carousel-control-prev:hover {
    background: var(--bs-primary);
    transition: .8s; }
figure .carousel-control-next {
    width: 90px;
    height: 60px;
    position: absolute;
    top: 50%;
    right: 0;
    background: var(--bs-primary);
    border-radius: 50px 0 0 50px;
    opacity: 1; }
figure .carousel-control-next:hover {
    background: var(--bs-primary);
    transition: .8s; }
figure article {
    position: absolute;
    text-align: center;
    width: 50%;
    margin: 40px 25%;
    top: 5%; }

/*REVIEWS*/
main article {
    background-color: #0205a1;
    color: white;
    position: relative;
    left: 0;
    right: 0;
    margin-top: 7%;}
main article img{
    background-color: black;
    height: 30%;
    width: 30%; }

/*POP-UP COURSES*/
main section {
    justify-content: center;
    height: 60%;
    left: 0;
    right: 0; 
    display: flex;
    position: relative; }
section .dialog {
    border: 1px solid;
    border-radius: 10px;
    background: #012766;
    padding: 10px;
    margin: 30px;
    width: 80px;
    height: 90%; }
section .button {
    background-color: darkorange;
    color: #012766;
    padding: 10px;
    border-radius: 20px; }
section .modal-4 h4 {
    height: 90px; }
[id^=modal] {
    display: none;
    position: fixed;
    top: 0;
    left: 0; }
[id^=modal]:target {
    display: block; }
input[type=checkbox] {
    position: absolute;
    clip: rect(0 0 0 0); }
.popup {
    width: 100%;
    height: 90%;
    z-index: 99999; }
.popup__overlay {
    position: fixed;
    z-index: 2;
    display: block;
    top: 0;
    left: 0;
    right: 0;
    height: 100%;
    width: 100%;
    background: #000000b3; }
.popup__wrapper {
    position: fixed;
    z-index: 9;
    left: 80px;
    width: 100%;
    height: 100%;
    max-width: 1200px;
    border-radius: 8px;
    padding: 58px 32px 32px 32px;
    background: #fff; }
.popup__close {
    position: absolute;
    top: 30px;
    right: 50px;
    font-size: 40px; }
.heading {
    padding-top: 20px;
    font-size: 50px; }
section a {
    text-decoration: none; }
section img {
    height: 60%; 
    width: 100%;
    padding: 10px; }
section h4 {
    padding: 20px;
    color: white; }
.popup nav ul li a {
    padding: 20px;
    text-align: center;
    color: darkorange; }
.popup nav ul li a:hover{
    color: black; }
.tab-content {
    height: 100%;}
.tab-content p {
    margin: 15px 0; }
.tab-pane {
    height: 95%; }
.course-width {
    width: 100%;
    justify-content: center;
    display: inline-flex; }
.datacourse-width {
    width: 50%;
    margin-left: 15%; }
.dropdown-menu {
    width: max-content;
    padding: 10%;
    line-height: 1.6; }
.btn {
    line-height: 0.5; }
.dropdown-item-text {
    display: contents; }


/*CONTACT*/
.contact-detail::before {
    background-color: #0205a1;;
    position: absolute;
    content: "";
    height: 100%;
    width: 100%;
    top: 0;
    left: 0;
    border-radius: 10px;
    z-index: -1; }
.btn-square i {
    font-size: 30px; }
h4 {
    color: darkorange; }
.text-start {
    background-color: #0205a1;
    width: 60%;
    border-radius: 10px; }

/*FOOTER*/
footer {
    margin-top: 50px; }
.footer .short-link a,
.footer .help-link a,
.footer .contact-link a {
    transition: .5s; }
.footer .short-link a:hover,
.footer .help-link a:hover,
.footer .contact-link a:hover {
    letter-spacing: 1px; }
.footer .hightech-link a:hover {
    background: var(--bs-primary);
    border: 0; }

</style>
</head>
<body>
<header>
<nav>
    <!--NAVIGATION MENU-->
    <div class="container-fluid fixed-top" style="background-color:#0205a1;">
        <div class="container">
            <nav class="navbar navbar-dark navbar-expand-lg py-0">
                <a href="https://eira.erovoutika.ph/index.php" class="navbar-brand">
                    <img src="/homepage/img/Rectangle 13.png" alt="img" class="h-50 w-75">
                </a>
                <div class="collapse navbar-collapse bg-transparent">
                    <div class="navbar-nav ms-auto mx-xl-auto">
                        <a href="https://eira.erovoutika.ph/index.php" class="nav-item active">Home</a>
                        <a href="/homepage/coursedashboard.html" class="nav-item">Training</a>
                        <a href="https://eira.erovoutika.ph/certificate.php" class="nav-item">Certificates</a>
                        <a href="/login-signup/login_signup.php" class="nav-item">Login</a>
                    </div>
                </div>
            </nav>     
        </div>
    </div>
</nav>

<figure>
    <!--CAROUSEL SLIDER-->
    <div id="carouselControls" class="carousel slide d-block" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/homepage/img/backgroundblue.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img src="/homepage/img/training7.png" alt="Second slide" style="width:100%;height:200%;">
            </div>
            <div class="carousel-item">
                <img src="/homepage/img/training2.png" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
        </a>
    <article>
        <div class="container carousel-content">
            <h6 class="h4 text-primary animated fadeInUp">EROVOUTIKA INTERNATIONAL ROBOTICS ACADEMY</h6>
            <h1 class="text-white display-1 mb-4 font-weight-bolder animated fadeInRight">SELF PACED TRAINING <span style="color:darkorange;">PROGRAM</span></h1>
            <p class="mb-4 text-white fs-5 animated fadeInDown">Online Courses about Electronics, Robotics, Automation, and ICT...</p>
        </div>
    </article>
    </div>
</figure>
</header>

<main>
    <!--LANGUAGES-->
    <article>
        <div class="container-fluid text-center">
            <div class="row">
                <div class="col">
                    <div class="p-1">
                        <img src="/homepage/img/html.png" alt="img">
                    </div>
                </div>
                <div class="col">
                    <div class="p-1">
                        <img src="/homepage/img/css.png" alt="img">
                    </div>
                </div>
                <div class="col">
                    <div class="p-1">
                        <img src="/homepage/img/javascrpit.png" alt="img">
                    </div>
                </div>
                <div class="col">
                    <div class="p-1">
                        <img src="/homepage/img/php.png" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </article>

    <!--HEADING-->
    <div class="position-relative" >
        <div class="heading position-relative text-center font-weight-bolder">Training Courses</div>
            <p class="text-center font-weight-bold p-2" style="color:darkorange;">Develop your mind & skills by our intense tracks that covers all you need</p>
    </div>

    <!--POPUP COURSES-->
    <section>
        <div class="row container">
        <!--FRONT END DEVELOPMENT COURSES-->
            <div class="dialog col position-relative text-center">
                <div class="d-inline-block">
                    <img src="/homepage/img/course.png" alt="img">
                    <h4>Front-End Development</h4>
                    <a class="button position-relative text-center font-weight-bold" href="#modal1">Details<i class="fa-solid fa-arrow-up-right-from-square m-lg-1"></i></a>
                </div>
            </div>
        <!--COURSE MODAL-->
            <div class="popup" id="modal1">
                <a class="popup__overlay" href="#"></a>
                    <div class="popup__wrapper m-3">
                        <a class="popup__close" href="#"><i class="fa-regular fa-circle-xmark"></i></a>
                            <nav>
                                <ul class="nav nav-tabs list-unstyled border-bottom p-3" id="tabContent">
                                    <li class="nav-item">
                                        <a href="#about" data-toggle="tab">ABOUT</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#html" data-toggle="tab">HTML</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#css" data-toggle="tab">CSS</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#javascript" data-toggle="tab">JAVASCRIPT</a>
                                    </li>
                                </ul>
                            </nav>
                            <div class="tab-content p-3">
                            <!--ABOUT COURSE-->
                                <div class="tab-pane container active" id="about">
                                    <h3 class="font-weight-bolder">WHAT IS FRONT-END DEVELOPMENT?</h3>
                                    <p class="lh-base">
                                        Front-end development refers to the part of web development that deals with the user interface and user experience of a website. <br>
                                        It involves designing and coding the part of a website that the user interacts with directly. </p>
                                    <div class="d-inline float-left">
                                        <h5 class="font-weight-bold m-2">Front-End Development Skills</h5>
                                            <ul class="list-group p-0 m-3">
                                                <li>Programming Languages: HTML, CSS, JavaScript</li>
                                                <li>Creativity</li>
                                                <li>Problem Solving</li>
                                                <li>Critical Thiking</li>
                                                <li>Micro-Frontend</li>
                                                <li>Code Analysis</li>
                                                <li><a href="https://www.linkedin.com/pulse/top-10-skills-frontend-developer-must-have-2023/">See more...</a></li>
                                            </ul>
                                    </div>
                                    <div class="d-inline float-right">
                                        <h5 class="font-weight-bold m-2">Front-End Job Titles</h5>
                                            <ul class="list-group p-0 m-3">
                                                <li>Front-End Developer</li>
                                                <li>Front-End Engineer</li>
                                                <li>CSS/HTML Developer</li>
                                                <li>Front-End Web Designer</li>
                                                <li>Web/Front-End User Interface (aka UI) Developer/Engineer</li>
                                                <li>Mobile/Tablet Front-End Developer</li>
                                                <li><a href="https://frontendmasters.com/guides/front-end-handbook/2018/practice/types-of-front-end-dev.html">See more...</a></li>
                                            </ul>
                                    </div>
                                </div>
                            <!--HTML COURSE-->
                                <div class="tab-pane container" id="html">
                                    <h3 class="font-weight-bolder">WHAT IS HTML?</h3>
                                    <p class="lh-base">
                                        HTML stands for HyperText Markup Language. It is used on the frontend and gives the structure to the webpage which <br>
                                        you can style using CSS and make interactive using JavaScript. </p>
                                    <div class="course-width">
                                        <div class="float-left p-3">
                                            <h5 class="font-weight-bold m-2"> IDEs for HTML</h5>
                                                <ul class="list-group p-0 m-3">
                                                    <li>Notepad++</li>
                                                    <li>Sublime</li>
                                                    <li>Visual Studio Code</li>
                                                    <li>IntelliJ IDEA</li>
                                                    <li>Komodo Edit</li>
                                                    <li>Adobe Deamweaver</li>
                                                    <li>WebStorm</li>
                                                    <li>Geany</li>
                                                </ul>
                                        </div>
                                        <div class="float-right p-3">
                                            <h5 class="font-weight-bold m-2">COURSE OUTLINE</h5>
                                                <ul class="list-group p-0 m-3">
                                                    <li>Learn the basics</li>
                                                    <li>Writing Semantic HTML</li>
                                                    <li>Forms and Validations</li>
                                                    <li>Accesibility</li>
                                                </ul>
                                        </div>
                                    </div>
                                    <div class="btn justify-content-center m-2 w-100"><a href="/login-signup/login_signup.php">Start Learning</a></div>
                                </div>
                            <!--CSS COURSE-->
                                <div class="tab-pane container" id="css">
                                    <h3 class="font-weight-bolder">WHAT IS CSS?</h3>
                                    <p class="lh-base">
                                        CSS or Cascading Style Sheets is the language used to style the frontend of any website. 
                                        CSS is a cornerstone technology of the World Wide Web, alongside HTML and JavaScript.</p>
                                    <div class="course-width">
                                        <div class="float-left p-3">
                                            <h5 class="font-weight-bold m-2"> IDEs for CSS</h5>
                                                <ul class="list-group p-0 m-3">
                                                    <li>IntelliJ IDEA</li>
                                                    <li>Visual Studio Code</li>
                                                    <li>RJ TextEd</li>
                                                    <li>Light Table</li>
                                                    <li>NetBeans</li>
                                                    <li>Brackets</li>
                                                    <li>Sublime Text 3</li>
                                            </ul>
                                    </div>
                                        <div class="float-right p-3">
                                            <h5 class="font-weight-bold m-2">COURSE OUTLINE</h5>
                                                <ul class="list-group p-0 m-3">
                                                    <li>Learn the basics</li>
                                                    <li>Making Layouts</li>
                                                    <li>Responsive Design</li>
                                                </ul>
                                        </div>
                                    </div>
                                    <div class="btn justify-content-center m-2 w-100"><a href="/login-signup/login_signup.php">Start Learning</a></div>
                                </div>
                            <!--JAVASCRIPT COURSE-->
                                <div class="tab-pane container" id="javascript">
                                    <h3 class="font-weight-bolder">WHAT IS JAVASCRIPT?</h3>
                                    <p class="lh-base">
                                        JavaScript is a dynamic, interpreted programming language that is commonly used for web development. It was first 
                                        created in the late 1990s by Netscape and can be used to create interactive elements on web pages, as well as handle 
                                        server-side operations. It is a popular choice for web developers because it allows for a lot of flexibility and can 
                                        be used to create a wide range of interactive and dynamic web applications. </p>
                                    <div class="course-width">
                                        <div class="float-left p-3">
                                            <h5 class="font-weight-bold m-2"> IDEs for JAVASCRIPT</h5>
                                                <ul class="list-group p-0 m-3">
                                                    <li>Eclipse</li>
                                                    <li>CodeLite</li>
                                                    <li>Atom</li>
                                                    <li>Visual Studio Code</li>
                                                    <li>WebStorm</li>
                                                    <li>PhpStorm</li>
                                                    <li>Sublime Text 3</li>
                                                </ul>
                                        </div>
                                        <div class="float-right p-3">
                                            <h5 class="font-weight-bold m-2">COURSE OUTLINE</h5>
                                                <ul class="list-group p-0 m-3">
                                                    <li>Learn the basics</li>
                                                    <li>Learn DOM Manipulation</li>
                                                    <li>Fetch API / Ajax (XHR)</li>
                                                </ul>
                                        </div>
                                    </div>
                                    <div class="btn justify-content-center m-2 w-100"><a href="/login-signup/login_signup.php">Start Learning</a></div>
                                </div>
                            </div>
                    </div>
            </div>

        <!--BACK END DEVELOPMEnT COURSES-->
            <div class="dialog col position-relative text-center">
                <div class="d-inline-block">
                    <img src="/homepage/img/course.png" alt="img">
                    <h4>Back-End Development</h4>
                    <a class="button position-relative text-center font-weight-bold" href="#modal2">Details<i class="fa-solid fa-arrow-up-right-from-square m-lg-1"></i></a>
                </div>
            </div>
        <!--COURSE MODAL-->
            <div class="popup " id="modal2">
                <a class="popup__overlay" href="#"></a>
                    <div class="popup__wrapper">
                        <a class="popup__close" href="#"><i class="fa-regular fa-circle-xmark"></i></a>
                            <nav>
                                <ul class="nav nav-tabs list-unstyled border-bottom p-3" id="tabContent">
                                    <li class="nav-item"> 
                                        <a href="#dataAbout" data-toggle="tab">ABOUT</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#database" data-toggle="tab">DATABASE</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#php" data-toggle="tab">PHP</a>
                                    </li>
                                </ul>
                            </nav>
                            <div class="tab-content p-3">
                            <!--ABOUT COURSE-->
                                <div class="tab-pane container active" id="dataAbout">
                                    <h3 class="font-weight-bolder">WHAT IS BACK-END DEVELOPMENT?</h3>
                                    <p class="lh-base">
                                        Refers to the part of web development concerned with creating server-side applications and services. 
                                        This includes creating APIs, managing databases, and developing logic for the front-end front-end applications 
                                        to interact with. They work closely with front-end developers, but their work is usually less visible to the end user. </p>
                                    <div class="w-75 ml-sm-5">
                                        <div class="d-inline float-left">
                                            <h5 class="font-weight-bold m-2">Back-End Development Skills</h5>
                                                <ul class="list-group p-0 m-3">
                                                    <li>Programming Languages: Java, Python, PHP </li>
                                                    <li>Web Frameworks</li>
                                                    <li>Data Structure and Algorithm</li>
                                                    <li>Server Management</li>
                                                    <li>Application Programming Interface (API)</li>
                                                    <li><a href="https://www.geeksforgeeks.org/back-end-developer-skills/">See more...</a></li>
                                                </ul>
                                        </div>
                                        <div class="d-inline float-right">
                                            <h5 class="font-weight-bold m-2">Back-End Job Titles</h5>
                                                <ul class="list-group p-0 m-3">
                                                    <li>Back-end Developer</li>
                                                    <li>Full Stack Developer</li>
                                                    <li>Back-end Engineer</li>
                                                    <li>DevOps Engineer</li>
                                                    <li>SQL Developer</li>
                                                    <li><a href="https://www.indeed.com/career-advice/career-development/front-end-vs-back-end">See more...</a></li>
                                                </ul>
                                        </div>
                                    </div>
                                </div>
                            <!--DATABASE COURSE-->
                                <div class="tab-pane container" id="database">
                                    <h3 class="font-weight-bolder">WHAT IS A DATABASE?</h3>
                                    <p class="lh-base">
                                        A database is a collection of useful data of one or more related organizations structured in a way to make data 
                                        an asset to the organization. A database management system is a software designed to assist in maintaining and 
                                        extracting large collections of data in a timely fashion. </p>
                                    <div class="datacourse-width">
                                        <div class="d-inline float-left">
                                            <h5 class="font-weight-bold m-2"> IDEs for DATABASE</h5>
                                                <ul class="list-group p-0 m-3">
                                                    <li>Visual Studio Code</li>
                                                    <li>Oracle SQL Developer</li>
                                                    <li>DataGrip</li>
                                                    <li>PL/SQL Developer</li>
                                                    <li>IntelliJ IDEA</li>
                                                </ul>
                                        </div>
                                        <div class="d-inline float-right">
                                            <h5 class="font-weight-bold m-2">COURSE OUTLINE</h5>
                                                <ul class="list-group p-0 m-3">
                                                    <li>Learn the basics</li>
                                                    <li>Information Management</li>
                                                    <li>Database VS DBMS</li>
                                                    <li>What is DBMS?</li>
                                                    <!--DATABASE FILE >> https://drive.google.com/file/d/1eAj5GYqWHb3tM3TutnlR6hw8txp52zcJ/view?usp=drive_link-->
                                                </ul>
                                        </div>
                                    </div>
                                </div>
                            <!--PHP COURSE-->
                                <div class="tab-pane container" id="php">
                                    <h3 class="font-weight-bolder">WHAT IS PHP?</h3>
                                    <p class="lh-base">
                                        A relational database is a type of database that stores and provides access to data points that are related to 
                                        one another. Relational databases store data in a series of tables. Interconnections between the tables are 
                                        specified as foreign keys. A foreign key is a unique reference from one row in a relational table to another 
                                        row in a table, which can be the same table but is most commonly a different table. </p>
                                    <div class="course-width">
                                        <div class="float-left p-3">
                                            <h5 class="font-weight-bold m-2"> IDEs for RELATIONAL DATABASE</h5>
                                                <ul class="list-group p-0 m-3">
                                                    <li>MySQL Workbench</li>
                                                    <li>HeidiSQL</li>
                                                    <li>SQL Server Management Studio</li>
                                                    <li>DataGrip</li>
                                                </ul>
                                        </div>
                                        <div class="float-right p-3">
                                            <h5 class="font-weight-bold m-2">COURSE OUTLINE</h5>
                                                <ul class="list-group p-0 m-3">
                                                    <li>Learn the basics</li>
                                                    <li>Relational Model and Mathematical Foundation</li>
                                                    <li>Define, Query and Manipulate Relational Database</li>
                                                    <li>Conceptual Database Modelling Methods</li>
                                                    <li>Query Processing and Optimization</li>
                                                </ul>
                                        </div>
                                    </div>
                                    <div class="btn justify-content-center m-2 w-100"><a href="/login-signup/login_signup.php">Start Learning</a></div>
                                </div>
                            </div>
                    </div>
            </div>

        <!--SELF PACED PROGRAM COURSES-->
            <div class="dialog col position-relative text-center">
                <div class="d-inline-block">
                    <img src="/homepage/img/course.png" alt="img">
                    <h4>Self-Paced Training Program</h4>
                    <a class="button position-relative font-weight-bold" href="#modal3">Details<i class="fa-solid fa-arrow-up-right-from-square m-lg-1"></i></a>
                </div>
            </div>
        <!--COURSE MODAL-->
            <div class="popup" id="modal3">
                <a class="popup__overlay" href="#"></a>
                    <div class="popup__wrapper">
                        <a class="popup__close" href="#"><i class="fa-regular fa-circle-xmark"></i></a>
                            <nav>
                                <ul class="nav nav-tabs list-unstyled border-bottom p-3" id="tabContent">
                                    <li class="nav-item">
                                        <a href="#programAbout" data-toggle="tab">ABOUT</a>
                                    </li>
                                    <li class="dropdown" data-toggle="tab">
                                        <button class="btn dropdown-toggle" type="button" data-toggle="dropdown">
                                            PROGRAMS
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item-text" href="#gamedev" data-toggle="tab">GAME DEVELOPMENT & ANIMATION</a></li>
                                            <li><a class="dropdown-item-text" href="#cisco" data-toggle="tab">CISCO WAN TECHNOLOGY</a></li>
                                            <li><a class="dropdown-item-text" href="#cloud" data-toggle="tab">CLOUD COMPUTING</a></li>
                                            <li><a class="dropdown-item-text" href="#machine" data-toggle="tab">MACHINE LEARNING</a></li>
                                            <li><a class="dropdown-item-text" href="#linux" data-toggle="tab">LINUX SYSTEM ADMINISTRATION</a></li>
                                            <li><a class="dropdown-item-text" href="#datanalytics" data-toggle="tab">DATA ANALYTICS</a></li>
                                            <li><a class="dropdown-item-text" href="#plc-1" data-toggle="tab">PLC PROGRAMMING LEVEL-1</a></li>
                                            <li><a class="dropdown-item-text" href="#plc-2" data-toggle="tab">PLC PROGRAMMING LEVEL-2</a></li>
                                            <li><a class="dropdown-item-text" href="#telecom" data-toggle="tab">INNOVATION IN TELECOMMUNICATION</a></li>
                                            <li><a class="dropdown-item-text" href="#industrial" data-toggle="tab">INDUSTRIAL PNUEMATIC SYSTEM</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                                <div class="tab-content p-3">
                                    <!--ABOUT COURSE-->
                                        <div class="tab-pane container active" id="programAbout">
                                            <h3 class="font-weight-bolder"> WHY CHOOSE OUR PROGRAMS? </h3>
                                            <p class="lh-base"> 
                                                Embarking on the training program offered by Erovoutika LMS is a transformative journey towards personal and 
                                                professional excellence. It stands out as a premier learning platform, offering a unique and innovative approach to education that goes beyond 
                                                traditional training methods.</p>
                                            <div class="w-75 ml-sm-5">
                                                <div class="d-inline">
                                                        <ul class="list-group p-0 m-3">
                                                            <li>
                                                                <span class="font-weight-bold">Cutting-edge Curriculum:</span> 
                                                                Erovoutika LMS prides itself on delivering a curriculum that is at the forefront of industry trends and technological advancements. </li>
                                                            <li>
                                                                <span class="font-weight-bold">Flexible Learning Paths:</span> 
                                                                Recognizing the diverse needs and schedules of learners, Erovoutika LMS offers flexible learning paths.</li>
                                                            <li>
                                                                <span class="font-weight-bold">Innovative Teaching Methodologies:</span> 
                                                                Employs state-of-the-art teaching methodologies, including interactive simulations, virtual labs, and real-world case studies.</li>
                                                            <li>
                                                                <span class="font-weight-bold">Industry-Expert Instructors:</span> 
                                                                The training program is led by a team of seasoned industry experts who bring a wealth of real-world experience to the virtual classroom. </li>
                                                            <li>
                                                                <span class="font-weight-bold">Personalized Learning Experience:</span>
                                                                The platform employs adaptive learning technologies to tailor the educational experience to individual needs, ensuring that participants can progress at their own pace and focus on areas that require additional attention.</li>
                                                        </ul>
                                                </div>
                                            </div> 
                                        </div>
                                    <!--GAME DEVELOPMENT & ANIMATION-->
                                        <div class="tab-pane container" id="gamedev">
                                            <h3 class="font-weight-bolder"> WHAT IS GAME DEVELOPMENT and ANIMATION? </h3>
                                            <p class="lh-base">
                                                Game development involves the creation of video games. It includes game design, programming, art, 
                                                and testing. Various tools and techniques are used in game development, including game engines, 
                                                game art software, and animation software.</p>
                                            <div class="w-80 ml-sm-5">
                                                <div class="d-inline float-left">
                                                    <h5 class="font-weight-bold m-2">Game Development & Animation Skills</h5>
                                                        <ul class="list-group p-0 m-3">
                                                            <li>Programming languages like C++, Unity, and Unreal Engine</li>
                                                            <li>Design characters, environments, and special effects</li>
                                                            <li>Drawing, rigging, and compositing</li>
                                                            <li>knowledge of physics, mathematics, and music theory</li>
                                                        </ul>
                                                </div>
                                                <div class="d-inline float-right">
                                                    <h5 class="font-weight-bold m-2">Game Development & Animation Job Titles</h5>
                                                        <ul class="list-group p-0 m-3">
                                                            <li>3D Designer</li>
                                                            <li>Game Developer</li>
                                                            <li>Motion Capture Artist</li>
                                                            <li>Animation Artist</li>
                                                            <li>Game Programmer</li>
                                                        </ul>
                                                </div>
                                            </div>
                                        </div>
                                    <!--CISCO WAN TECHNOLOGY-->
                                        <div class="tab-pane container" id="cisco">
                                            <h3 class="font-weight-bolder">WHAT IS CISCO WAN TECHNOLOGY?</h3>
                                            <p class="lh-base">
                                                Refers to the set of networking protocols and devices used to create and maintain wide-area 
                                                networks (WANs). Cisco WAN technology includes products and services such as routers, switches, firewalls, 
                                                and VPNs that are designed to provide secure and reliable connectivity between WAN devices.</p>
                                            <div class="w-75 ml-sm-5">
                                                <div class="d-inline float-left">
                                                    <h5 class="font-weight-bold m-2">Cisco Wan Technology Skills</h5>
                                                        <ul class="list-group p-0 m-3">
                                                            <li>Infastructure requirements</li>
                                                            <li>Compnents of Wide and Local area networks</li>
                                                            <li>Network Operating System</li>
                                                            <li>Network Protocols</li>
                                                            <li>Diagnostic tools</li>
                                                        </ul>
                                                </div>
                                                <div class="d-inline float-right">
                                                    <h5 class="font-weight-bold m-2">Cisco Wan Technology Job Titles</h5>
                                                        <ul class="list-group p-0 m-3">
                                                            <li>Network Engineer</li>
                                                            <li>Network Design Engineer</li>
                                                            <li>Network Architect</li>
                                                            <li>WAN Professional</li>
                                                            <li>Cisco Certified Internetwork Expert (CCIE)</li>
                                                        </ul>
                                                </div>
                                            </div>
                                        </div>
                                    <!--CLOUD COMPUTING-->
                                        <div class="tab-pane container" id="cloud">
                                            <h3 class="font-weight-bolder">WHAT IS CLOUD COMPUTING?</h3>
                                            <p class="lh-base">
                                                Refers to the delivery of computing resources, including servers, storage, databases, 
                                                networking, software, analytics, and intelligence, over the internet. Large clouds often have functions 
                                                distributed over multiple locations, each of which is a data center.</p>
                                            <div class="w-75 ml-sm-5">
                                                <div class="d-inline float-left">
                                                    <h5 class="font-weight-bold m-2">Cloud Computing Skills</h5>
                                                        <ul class="list-group p-0 m-3">
                                                            <li>Automation</li>
                                                            <li>Cloud Security</li>
                                                            <li>DevOps</li>
                                                            <li>Computer Architecture</li>
                                                            <li>Machine Learning</li>
                                                        </ul>
                                                </div>
                                                <div class="d-inline float-right">
                                                    <h5 class="font-weight-bold m-2">Cloud Computing Job Titles</h5>
                                                        <ul class="list-group p-0 m-3">
                                                            <li>Cloud Architect</li>
                                                            <li>DevOps Engineer</li>
                                                            <li>Cloud Security Specialist</li>
                                                            <li>Cloud Operations Mnager</li>
                                                            <li>Cloud Compliance Officer</li>
                                                        </ul>
                                                </div>
                                            </div>
                                        </div>
                                    <!--MACHINE LEARNING-->
                                        <div class="tab-pane container" id="machine">
                                            <h3 class="font-weight-bolder">WHAT IS MACHINE LEARNING?</h3>
                                            <p class="lh-base">
                                                A branch of artificial intelligence that involves the use of algorithms and statistical models to enable 
                                                computers to improve their performance on a specific task over time, based on experience. Use and development of 
                                                computer systems that are able to learn and adapt without following explicit instructions, by using algorithms 
                                                and statistical models to analyze and draw inferences from patterns in data.</p>
                                            <div class="w-75 ml-sm-5">
                                                <div class="d-inline float-left">
                                                    <h5 class="font-weight-bold m-2">Machine Learning Skills</h5>
                                                        <ul class="list-group p-0 m-3">
                                                            <li>Deep Learning</li>
                                                            <li>Artificial Neural Network</li>
                                                            <li>Data Visualization</li>
                                                            <li>Algortihm</li>
                                                            <li>Statistics</li>
                                                        </ul>
                                                </div>
                                                <div class="d-inline float-right">
                                                    <h5 class="font-weight-bold m-2">Machine Learning Job Titles</h5>
                                                        <ul class="list-group p-0 m-3">
                                                            <li>Data Scientist</li>
                                                            <li>Machine Learning Research Scientist</li>
                                                            <li>Data Analyst</li>
                                                            <li>AI Research Scientist</li>
                                                            <li>Machine Learning Engineer</li>
                                                        </ul>
                                                </div>
                                            </div>
                                        </div>
                                    <!--LINUX SYSTEM ADMINISTRATION-->
                                        <div class="tab-pane container" id="linux">
                                            <h3 class="font-weight-bolder">WHAT IS LINUX SYSTEM ADMINISTRATION?</h3>
                                            <p class="lh-base"> 
                                                Involves managing and maintaining Linux systems, including installing and configuring software, 
                                                managing user accounts and security, troubleshooting system issues, and backups and recovery. </p>
                                            <div class="w-75 ml-sm-5">
                                                <div class="d-inline float-left">
                                                    <h5 class="font-weight-bold m-2">Linux System Administration Skills</h5>
                                                        <ul class="list-group p-0 m-3">
                                                            <li>Command Line Interface</li>
                                                            <li>Shell Scripting</li>
                                                            <li>Network Fundamentals</li>
                                                            <li>Management and Administration</li>
                                                            <li>Automation and Virtualization</li>
                                                        </ul>
                                                </div>
                                                <div class="d-inline float-right">
                                                    <h5 class="font-weight-bold m-2">Linux System Administration Job Titles</h5>
                                                        <ul class="list-group p-0 m-3">
                                                            <li>System Administrator</li>
                                                            <li>DevOps Engineer</li>
                                                            <li>IT Operations Specialist</li>
                                                            <li>Cloud Systems Engineer</li>
                                                            <li>System Analyst</li>
                                                        </ul>
                                                </div>
                                            </div>
                                        </div>
                                    <!--DATA ANALYTICS-->
                                        <div class="tab-pane container" id="datanalytics">
                                            <h3 class="font-weight-bolder">WHAT IS DATA ANALYTICS?</h3>
                                            <p class="lh-base"> 
                                                Process of collecting and analyzing large sets of data to extract meaningful insights and make informed 
                                                decisions. It involves a variety of techniques and tools, including statistical analysis, machine 
                                                learning, data visualization, and predictive modeling. </p>
                                            <div class="w-75 ml-sm-5">
                                                <div class="d-inline float-left">
                                                    <h5 class="font-weight-bold m-2">Data Analytics Skills</h5>
                                                        <ul class="list-group p-0 m-3">
                                                            <li>Data Visualization</li>
                                                            <li>Data Cleansing</li>
                                                            <li>Business Intelligence</li>
                                                            <li>Machine Learning</li>
                                                            <li>Data Mining</li>
                                                        </ul>
                                                </div>
                                                <div class="d-inline float-right">
                                                    <h5 class="font-weight-bold m-2">Data Analytics Job Titles</h5>
                                                        <ul class="list-group p-0 m-3">
                                                            <li>Business Intelligence Analyst</li>
                                                            <li>Data Scientist/Analyst</li>
                                                            <li>Big Data Engineer</li>
                                                            <li>Data Warehouse Analyst</li>
                                                            <li>Business Analyst</li>
                                                        </ul>
                                                </div>
                                            </div>
                                        </div>
                                    <!--PLC PROGRAMMING LEVEL1-->
                                        <div class="tab-pane container" id="plc-1">
                                            <h3 class="font-weight-bolder">WHAT IS PLC PROGRAMMING LEVEL-1?</h3>
                                            <p class="lh-base"> 
                                                A digital computer used for process automation in various industries, A basic level of programming 
                                                language that allows operators to control and monitor the PLC system. They can program the PLC system 
                                                to perform specific tasks and automate processes.</p>
                                            <div class="w-75 ml-sm-5">
                                                <div class="d-inline float-left">
                                                    <h5 class="font-weight-bold m-2">PLC Programming Level-1 Skills</h5>
                                                        <ul class="list-group p-0 m-3">
                                                            <li>Hardware Components</li>
                                                            <li>Memory Types</li>
                                                            <li>CPU Operations</li>
                                                            <li>Diverse PLC Modules</li>
                                                            <li>Integrate PLC with STEP 7 Software</li>
                                                        </ul>
                                                </div>
                                                <div class="d-inline float-right">
                                                    <h5 class="font-weight-bold m-2">PLC Programming Level-1 Job Titles</h5>
                                                        <ul class="list-group p-0 m-3">
                                                            <li>Control Systems Engineer</li>
                                                            <li>Machine Automation Specialist</li>
                                                            <li>Implementation Specialist</li>
                                                            <li>Automation Engineer</li>
                                                            <li>Principal Engineer</li>
                                                        </ul>
                                                </div>
                                            </div>
                                        </div>
                                    <!--PLC PROGRAMMING LEVEL2-->
                                        <div class="tab-pane container" id="plc-2">
                                            <h3 class="font-weight-bolder">WHAT IS PLC PROGRAMMING LEVEL-2?</h3>
                                            <p class="lh-base"> 
                                                Refers to a more advanced level of programming compared to Level 1, It typically involves the use of 
                                                ladder logic diagrams, which are graphical representations of a program. Level 2 programming also allows 
                                                for more complex decision-making and troubleshooting capabilities.</p>
                                            <div class="w-75 ml-sm-5">
                                                <div class="d-inline float-left">
                                                    <h5 class="font-weight-bold m-2">PLC Programming Level-2 Skills</h5>
                                                        <ul class="list-group p-0 m-3">
                                                            <li>Ladder Logic</li>
                                                            <li>Structured Text Programming</li>
                                                            <li>Function Block Diagram</li>
                                                            <li>Sequential Function Chart</li>
                                                            <li>Graphical Programming Languages</li>
                                                        </ul>
                                                </div>
                                                <div class="d-inline float-right">
                                                    <h5 class="font-weight-bold m-2">PLC Programming Level-2 Job Titles</h5>
                                                        <ul class="list-group p-0 m-3">
                                                            <li>Control Systems Engineer</li>
                                                            <li>Software Developer</li>
                                                            <li>Supervisory Control and <br/> Data Acquisition (SCADA) Engineer</li>
                                                        </ul>
                                                </div>
                                            </div>
                                        </div>
                                    <!--INNOVATION IN TELECOMMUNICATION-->
                                        <div class="tab-pane container" id="telecom">
                                            <h3 class="font-weight-bolder">WHAT IS INNOVATION IN TELECOMMUNICATION?</h3>
                                            <p class="lh-base"> 
                                                Refers to the development of new and improved ways to communicate using technology, this can include 
                                                new messaging platforms, faster internet speeds, more advanced mobile devices, and new types of network 
                                                infrastructure. </p>
                                            <div class="w-80 ml-sm-3 ">
                                                <div class="d-inline float-left">
                                                    <h5 class="font-weight-bold m-2">Innovation in Telecommunication Skills</h5>
                                                        <ul class="list-group p-0 m-3">
                                                            <li>5G Networks</li>
                                                            <li>Internet of Things (IoT)</li>
                                                            <li>Artificial Intelligence</li>
                                                            <li>Network Architecture</li>
                                                            <li>Cybersecurity</li>
                                                        </ul>
                                                </div>
                                                <div class="d-inline float-right">
                                                    <h5 class="font-weight-bold m-2">Innovation in Telecommunication Job Titles</h5>
                                                        <ul class="list-group p-0 m-3">
                                                            <li>Network Engineer</li>
                                                            <li>Software Developer</li>
                                                            <li>Data Analyst</li>
                                                            <li>5G Network Expert</li>
                                                            <li>Cloud System Specialist</li>
                                                        </ul>
                                                </div>
                                            </div>
                                        </div>
                                    <!--INDUSTRIAL PNEUMATIC SYSTEM-->
                                        <div class="tab-pane container" id="industrial">
                                            <h3 class="font-weight-bolder">WHAT IS INDUSTRIAL PNEUMATIC SYSTEM?</h3>
                                            <p class="lh-base"> 
                                                A type of mechanical system that uses compressed gas (usually air) to transmit mechanical work or 
                                                energy to operate equipment or machinery in industrial settings. These systems are used in a wide range 
                                                of applications, including conveyor systems, actuators, valves, and compressors, among others. </p>
                                            <div class="w-75 ml-sm-5">
                                                <div class="d-inline float-left">
                                                    <h5 class="font-weight-bold m-2">Industrial Pneumatic System Skills</h5>
                                                        <ul class="list-group p-0 m-3">
                                                            <li>Design basic pneumatic circuits</li>
                                                            <li>Operate Pneumatic Systems</li>
                                                            <li>Install basic Pneumatic Systems</li>
                                                            <li>Troubleshooting and Maintenance</li>
                                                            <li>Repair Pneumatic Systems</li>
                                                        </ul>
                                                </div>
                                                <div class="d-inline float-right">
                                                    <h5 class="font-weight-bold m-2">Industrial Pneumatic System Job Titles</h5>
                                                        <ul class="list-group p-0 m-3">
                                                            <li>Plant Manager</li>
                                                            <li>Mechanical Engineer</li>
                                                            <li>Pneumatic System Specialist</li>
                                                            <li>Industrial Process Engineer</li>
                                                            <li>Maintenance Technician</li>
                                                        </ul>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                    </div>
            </div>
        </div>
    </section>

    <!--GALLERY-->
    <section>
        <div class="container-fluid project py-5 mb-5">
            <div class="container">
                <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                    <h5 class="text-primary">Our Gallery</h5>
                    <h1 class="font-weight-bold">Our Recently Completed Training</h1>
                </div>
                <div class="row g-5">
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s">
                        <div class="project-item">
                            <div class="project-img">
                                <img src="/homepage/img/training1.png" class="img-fluid w-100 rounded" alt="">
                                <div class="project-content">
                                    <a href="#" class="text-center">
                                        <h4 class="text-white">Web design</h4>
                                        <p class="m-0 text-white">Web Analysis</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".5s">
                        <div class="project-item">
                            <div class="project-img">
                                <img src="/homepage/img/training3.png" class="img-fluid w-100 rounded" alt="">
                                <div class="project-content">
                                    <a href="#" class="text-center">
                                        <h4 class="text-white">Cyber Security</h4>
                                        <p class="m-0 text-white">Cyber Security Core</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".7s">
                        <div class="project-item">
                            <div class="project-img">
                                <img src="/homepage/img/training4.png" class="img-fluid w-100 rounded" alt="">
                                <div class="project-content">
                                    <a href="#" class="text-center">
                                        <h4 class="text-white">Application Developement</h4>
                                        <p class="m-0 text-white">Programming</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s">
                        <div class="project-item">
                            <div class="project-img">
                                <img src="/homepage/img/training5.png" class="img-fluid w-100 rounded" alt="">
                                <div class="project-content">
                                    <a href="#" class="text-center">
                                        <h4 class="text-white">Web Development</h4>
                                        <p class="m-0 text-white">Web Analysis</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".5s">
                        <div class="project-item">
                            <div class="project-img">
                                <img src="/homepage/img/training6.png" class="img-fluid w-100 rounded" alt="">
                                <div class="project-content">
                                    <a href="#" class="text-center">
                                        <h4 class="text-white">Networking</h4>
                                        <p class="m-0 text-white">Network Analysis</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".7s">
                        <div class="project-item">
                            <div class="project-img">
                                <img src="/homepage/img/training7.png" class="img-fluid w-100 rounded" alt="">
                                <div class="project-content">
                                    <a href="#" class="text-center">
                                        <h4 class="text-white">Research Development</h4>
                                        <p class="m-0 text-white">Research Analysis</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<!--ABOUT-->
<article>
    <div class="container-fluid py-5 my-5">
        <div class="container pt-5">
            <div class="row g-5">
                <div class="col-lg-5 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".3s">
                    <div class="h-100 position-relative">
                        <img src="/homepage/img/about-1.png" class="img-fluid w-75 rounded" alt="" style="margin-bottom: 25%;">
                        <div class="position-absolute w-75" style="top: 25%; left: 25%;">
                            <img src="/homepage/img/about-1.png" class="img-fluid w-100 rounded" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".5s">
                    <h5 class="text-primary">About Us</h5>
                    <h1 class="mb-4 font-weight-bold">Erovoutika International Robotics Academy</h1>
                    <p>A respected and experienced Automation and Robotics Company. Our highly professional teams, with in-depth knowledge of each jurisdiction, has been successfully deliver customer needs.</p>
                    <p class="mb-4"> Our goal is to assist our clients in getting their needs and requirements in the easiest and fastest possible time in a most professional manner. We provide the highest quality service at the most reasonable cost.</p>
                    <a href="" class="btn btn-primary rounded-pill px-5 py-3 text-white">More Details</a>
                </div>
            </div>
        </div>
    </div>
</article>

<!--CONTACT-->
<article>
    <div class="container-fluid border-top py-5 mb-5">
        <div class="container">
            <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                <h5 class="text-primary">Get In Touch</h5>
                <h1 class="mb-3">Contact for any query</h1>
            </div>
            <div class="contact-detail position-relative p-5">
                <div class="row g-5 mb-5 justify-content-center">
                    <div class="col-xl-4 col-lg-6 wow fadeIn" data-wow-delay=".3s">
                        <div class="d-flex bg-light p-3 rounded">
                            <div class="flex-shrink-0 btn-square bg-primary rounded-circle" style="width: 60px; height: 60px;">
                                <i class="fas fa-map-marker-alt text-white mx-3 my-3"></i>
                            </div>
                            <div class="p-3">
                                <h4>Address</h4>
                                <a href="https://goo.gl/maps/Zd4BCynmTb98ivUJ6" target="_blank" class="h6">Parc House Building II, Guadalupe Nuevo, Makati, Philippines</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 wow fadeIn" data-wow-delay=".5s">
                        <div class="d-flex bg-light p-3 rounded">
                            <div class="flex-shrink-0 btn-square bg-primary rounded-circle" style="width: 60px; height: 60px;">
                                <i class="fa fa-phone text-white mx-3 my-3"></i>
                            </div>
                            <div class="p-3">
                                <h4>Call Us</h4>
                                <a class="h6" href="tel:+0123456789" target="_blank">074 423 1557</a> |
                                <a class="h6" href="tel:+0123456789" target="_blank">09653546415</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 wow fadeIn" data-wow-delay=".7s">
                        <div class="d-flex bg-light p-3 rounded">
                            <div class="flex-shrink-0 btn-square bg-primary rounded-circle" style="width: 60px; height: 60px;">
                                <i class="fa fa-envelope text-white mx-3 my-3"></i>
                            </div>
                            <div class="p-3">
                                <h4>Email Us</h4>
                                <a class="h6" href="mailto:info@example.com" target="_blank">erovoutika@gmail.com</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay=".3s">
                        <div class="p-5 h-100 bg-primary rounded contact-map">
                            <iframe class="rounded w-100 h-100" src="https://maps.google.com/maps?q=Parc%20House%20Building%20II,%20Guadalupe%20Nuevo,%20Makati,%20Philippines&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay=".5s">
                        <div class="p-5 bg-primary rounded contact-form">
                            <div class="mb-4">
                                <input type="text" class="form-control border-0 py-3" placeholder="Your Name">
                            </div>
                            <div class="mb-4">
                                <input type="email" class="form-control border-0 py-3" placeholder="Your Email">
                            </div>
                            <div class="mb-4">
                                <input type="text" class="form-control border-0 py-3" placeholder="Project">
                            </div>
                            <div class="mb-4">
                                <textarea class="w-100 form-control border-0 py-3" rows="6" cols="10" placeholder="Message"></textarea>
                            </div>
                            <div class="text-start">
                                <button class="btn text-white py-3 px-5" type="button">Send Message</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</article>

<!--FOOTER-->
<footer>
    <div class="container-fluid footer bg-dark wow fadeIn" data-wow-delay=".3s">
        <div class="container pt-5 pb-4">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <a href="index.html">
                        <h1 class="text-white fw-bold d-block">EI<span class="text-primary">RA</span> </h1>
                    </a>
                    <p class="mt-4 text-light">Innovate with EIRA, where technology meets your learning pace</p>
                    <div class="d-flex hightech-link">
                        <a href="" class="btn-light nav-fill btn btn-square rounded-circle me-2"><i class="fab fa-facebook-f text-primary"></i></a>
                        <a href="" class="btn-light nav-fill btn btn-square rounded-circle me-2"><i class="fab fa-twitter text-primary"></i></a>
                        <a href="" class="btn-light nav-fill btn btn-square rounded-circle me-2"><i class="fab fa-instagram text-primary"></i></a>
                        <a href="" class="btn-light nav-fill btn btn-square rounded-circle me-0"><i class="fab fa-linkedin-in text-primary"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="#" class="h3 text-primary">Quick Links</a>
                    <div class="mt-4 d-flex flex-column short-link">
                        <a href="" class="mb-2 text-white"><i class="fas fa-angle-right text-primary me-2"></i>Home</a>
                        <a href="" class="mb-2 text-white"><i class="fas fa-angle-right text-primary me-2"></i>About</a>
                        <a href="" class="mb-2 text-white"><i class="fas fa-angle-right text-primary me-2"></i>Training</a>
                        <a href="" class="mb-2 text-white"><i class="fas fa-angle-right text-primary me-2"></i>Gallery</a>
                        <a href="" class="mb-2 text-white"><i class="fas fa-angle-right text-primary me-2"></i>Latest Blog</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="#" class="h3 text-primary">Our Services</a>
                    <div class="mt-4 d-flex flex-column help-link">
                        <a href="" class="mb-2 text-white"><i class="fas fa-angle-right text-primary me-2"></i>Training and Certifications</a>
                        <a href="" class="mb-2 text-white"><i class="fas fa-angle-right text-primary me-2"></i>Automation Solutions</a>
                        <a href="" class="mb-2 text-white"><i class="fas fa-angle-right text-primary me-2"></i>Robotics</a>
                        <a href="" class="mb-2 text-white"><i class="fas fa-angle-right text-primary me-2"></i>Research And Development</a>
                        <a href="" class="mb-2 text-white"><i class="fas fa-angle-right text-primary me-2"></i>Cybersecurity</a>
                        <a href="" class="mb-2 text-white"><i class="fas fa-angle-right text-primary me-2"></i>Blockchain</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="#" class="h3 text-primary">Contact Us</a>
                    <div class="text-white mt-4 d-flex flex-column contact-link">
                        <a href="#" class="pb-3 text-light border-bottom border-primary"><i class="fas fa-map-marker-alt text-primary me-2"></i> Parc House Building II, Guadalupe Nuevo, Makati, Philippines</a>
                        <a href="#" class="py-3 text-light border-bottom border-primary"><i class="fas fa-phone-alt text-primary me-2"></i> 074 423 1557 | 09653546415</a>
                        <a href="#" class="py-3 text-light border-bottom border-primary"><i class="fas fa-envelope text-primary me-2"></i> erovoutika@gmail.com</a>
                    </div>
                </div>
            </div>
            <hr class="text-light mt-5 mb-4">
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <span class="text-light"><a href="#" class="text-primary"><i class="fas fa-copyright text-primary me-2"></i>EIRA</a>, All right reserved.</span>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <span class="text-light">Designed By<a href="https://htmlcodex.com" class="text-primary"> Group 2</a></span>
                </div>
            </div>
        </div>
    </div>
</footer>

<script type="module" src="./homepage/js/main.js"></script>
</body>
</html>