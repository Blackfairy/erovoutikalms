<!-- PHP code to establish connection with the localserver -->
<?php

// Username is root
$user = 'root';
$password = '';

// Database name is geeksforgeeks
$database = 'erovoutikalms';

// Server is localhost with
// port number 3306
$servername='localhost:3306';
$mysqli = new mysqli($servername, $user,
				$password, $database);

// Checking for connections
if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

// SQL query to select data from database
$sql = " SELECT * FROM usertable ";
$result = $mysqli->query($sql);
$mysqli->close();
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>EIRA | Admin </title>
    <link href="assets/vendor/fontawesome/css/fontawesome.min.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome/css/solid.min.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome/css/brands.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/airdatepicker/css/datepicker.min.css" rel="stylesheet">
    <link href="assets/vendor/mdtimepicker/mdtimepicker.min.css" rel="stylesheet">
    <link href="assets/vendor/datatables/datatables.min.css" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <nav id="sidebar" class="active">
            <div class="sidebar-header">
                <img src="image_src/erovoutika_logo.png">
            </div>
            <ul class="list-unstyled components text-secondary">
                <li>
                    <a href="admin.html"><i class="fas fa-home"></i> Dashboard</a>
                </li>
                <li>
                    <a href="admin_user_overview.php"><i class="fas fa-file-alt"></i> Users Table</a>
                </li>
                <li>
                    <a href="admin_user_edit.php"><i class="fas fa-file-alt"></i> Edit Users Table</a>
                </li>
                <li>
                    <a href="admin_students_overview.html"><i class="fas fa-table"></i> Students Table</a>
                </li>
                <li>
                    <a href="admin_courses_overview.html"><i class="fas fa-chart-bar"></i> Courses Table</a>
                </li>
                <li>
                    <a href="#pagesmenu" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fas fa-copy"></i> Pages</a>
                    <ul class="collapse list-unstyled" id="pagesmenu">
                        <li>
                            <a href="index.html"><i class="fas fa-file"></i> Blank page</a>
                        </li>
                        <li>
                            <a href="courses.html"><i class="fas fa-info-circle"></i> 404 Error page</a>
                        </li>
                        <li>
                            <a href="login_signup.php"><i class="fas fa-info-circle"></i> 500 Error page</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="settings.html"><i class="fas fa-cog"></i>Settings</a>
                </li>
            </ul>
        </nav>
        <div id="body" class="active">
            <!-- navbar navigation component -->
            <nav class="navbar navbar-expand-lg navbar-white bg-black">
                <button type="button" id="sidebarCollapse" class="btn btn-light">
                    <i class="fas fa-bars"></i><span></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav ms-auto">
                        <li class="nav-item dropdown">
                            <div class="nav-dropdown">
                                <a href="#" id="nav1" class="nav-item nav-link dropdown-toggle text-secondary" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-link"></i> <span>Quick Links</span> <i style="font-size: .8em;" class="fas fa-caret-down"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end nav-link-menu" aria-labelledby="nav1">
                                    <ul class="nav-list">
                                        <li><a href="" class="dropdown-item"><i class="fas fa-list"></i> Access Logs</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-database"></i> Back ups</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-cloud-download-alt"></i> Updates</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-user-shield"></i> Roles</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <div class="nav-dropdown">
                                <a href="#" id="nav2" class="nav-item nav-link dropdown-toggle text-secondary" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-user"></i> <span>Renz Amante</span> <i style="font-size: .8em;" class="fas fa-caret-down"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end nav-link-menu">
                                    <ul class="nav-list">
                                        <li><a href="" class="dropdown-item"><i class="fas fa-address-card"></i> Profile</a></li>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-envelope"></i> Messages</a></li>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-cog"></i> Settings</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- end of navbar navigation -->
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 page-header">
                            <div class="page-pretitle">Admin Overview</div>
                            <h2 class="page-title">Users Table</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <div class="card">
                                <div class="card-header">User Data Table</div>
                                <div class="card-body">
                                    <p class="card-title"></p>
                                    <table class="table table-hover" id="dataTables-example" width="100%">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Status</th>
                                                <th>Created at</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- PHP CODE TO FETCH DATA FROM ROWS -->
                                            <?php 
                                            // LOOP TILL END OF DATA
                                            while($rows=$result->fetch_assoc())
                                            {
                                        ?>
                                        <form>
                                        <tr>
                                            <!-- FETCHING DATA FROM EACH
                                                ROW OF EVERY COLUMN -->
                                            
                                            <td><input type="text" id="ID" name="userId" value = "<?php echo $rows['id'];?>" ></td>
                                            <td><input type="text" id="ID" name="userId" value = "<?php echo $rows['name'];?>" ></td>
                                            <td><input type="text" id="ID" name="userId" value = "<?php echo $rows['email'];?>" ></td>
                                            <td><input type="text" id="ID" name="userId" value = "<?php echo $rows['status'];?>" ></td>
                                            <td><input type="text" id="ID" name="userId" value = "<?php echo $rows['created_at'];?>" ></td>
                                        </tr>
                                        </form>
                                        <?php
                                            }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
            </div>
        </div>
    </div>
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chartsjs/Chart.min.js"></script>
    <script src="assets/js/dashboard-charts.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/airdatepicker/js/datepicker.min.js"></script>
    <script src="assets/vendor/airdatepicker/js/i18n/datepicker.en.js"></script>
    <script src="assets/vendor/mdtimepicker/mdtimepicker.min.js"></script>
    <script src="assets/vendor/datatables/datatables.min.js"></script>
    <script src="assets/js/initiate-datatables.js"></script>

    <style>

/*------------------------------------------------------------------
[Table of contents]

1. Body / #body
2. Header / #header
3. Navigation / #navbar
4. Content / #content
5. Sidebar / #sidebar
6. Boxes / .box
7. Dashboard cards / .card
8. Miscellaneous
9. Adjustments to dafault behaviors
10. Colors / .teal, .olive, .violet, .orange, .darkgray, .blue, .grey
11. Responsive properties
-------------------------------------------------------------------*/

/*------------------------------------------------------------------
[1. Body / #body]
*/
@font-face {
    font-family: "Lato";
    font-style: normal;
    font-weight: 400;
    font-display: auto;
    src: url("../font/Lato-Regular.eot");
    src: url("../font/Lato-Regular.eot?#iefix") format("embedded-opentype"), url("../font/Lato-Regular.woff") format("woff"), url("../font/Lato-Regular.ttf") format("truetype");
}

body,
h1,
.h1,
h2,
.h2,
h3,
.h3,
h4,
.h4,
h5,
.h5,
h6,
.h6,
p,
a,
td {
    -moz-osx-font-smoothing: grayscale;
    -webkit-font-smoothing: antialiased;
}

body {
    width: 100%;
    height: 100%;
    background: #141415;
    font-family: "Lato", "Helvetica Neue", Arial, Helvetica, sans-serif;
    font-size: 1rem;
    color: #f8f3f3;
}

.wrapper {
    display: flex;
    width: 100%;
    align-items: stretch;
    overflow-x: hidden
}

#body {
    width: 100%;
    padding: 0;
    min-height: 100vh;
    transition: all 0.3s;
}

/*------------------------------------------------------------------
[2. Header / #header]
*/
#body>.navbar {
    padding: 0 1.5rem;
    min-height: 54px;
    box-shadow: none;
    border-bottom: 1px solid rgba(101, 109, 119, .16);
}
/*------------------------------------------------------------------
[3. Navigation / #navbar] - see /components/navbar/navbar-dropdown.css
*/
.nav-dropdown .nav-link {
    color: #B2EBF2;
    line-height: 1.42857;
    padding: 1rem 0 1rem 1rem !important;
}
.nav-dropdown .nav-link:hover {
    color: #fff;
}
.nav-dropdown.show a {
    color: #fff;
}
.nav-dropdown .nav-link::after {
    display: none;
}
.nav-dropdown .nav-link-menu {
    position: absolute;
    border: none;
    min-width: 220px;
    padding: 0;
    line-height: 1.4;
    box-shadow: 0 1px 10px 0 rgba(69, 90, 100, 0.2);
    margin-top: -5px;
}
.nav-dropdown .nav-link-menu::before {
    top: -4px;
    right: 25%;
    margin: 0 0 0 -.25em;
    display: block;
    position: absolute;
    pointer-events: none;
    content: '';
    visibility: visible;
    -webkit-transform: rotate(45deg);
    transform: rotate(45deg);
    width: .5em;
    height: .5em;
    background: #ffffff;
    z-index: 2;
}
.nav-dropdown .nav-link-menu .nav-list {
    padding: 5px 0;
    margin-bottom: 0;
    list-style: none;
}
.nav-dropdown .nav-link-menu .nav-list li {
    line-height: 1.2;
}
.nav-dropdown .nav-link-menu .nav-list li a {
    color: #888;
    font-size: 14px;
    padding: .8rem;
}
.nav-dropdown .dropdown-divider {
    margin: 3px 0;
}
.default-light-menu {
    border: none !important;
    box-shadow: 0 0 0 1px rgba(255, 255, 255, 0.5) inset !important;
    color: #f6ebeb;
}
.default-light-menu:hover {
    background: #2196F3 !important;
    color: #f0eded;
}
.btn-light {
    --bs-btn-color: firebrick;
    --bs-btn-bg: #000;
    --bs-btn-border-color: #f8f9fa;
    --bs-btn-hover-color: #000;
    --bs-btn-hover-bg: #d3d4d5;
    --bs-btn-hover-border-color: #c6c7c8;
    --bs-btn-focus-shadow-rgb: 211,212,213;
    --bs-btn-active-color: #000;
    --bs-btn-active-bg: #c6c7c8;
    --bs-btn-active-border-color: #babbbc;
    --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
    --bs-btn-disabled-color: #000;
    --bs-btn-disabled-bg: #f8f9fa;
    --bs-btn-disabled-border-color: #f8f9fa;
}
/*------------------------------------------------------------------
[4. Content / #content]
*/
#body>.content {
    position: relative;
    padding: .5rem;
}

#body .content .page-title h3 {
    margin: 1rem 0;
}

.page-header {
    margin-top: 1.25rem;
}

.page-pretitle {
    font-size: .8rem;
    text-transform: uppercase;
    line-height: 1.6;
    color: #e3e4e4;
}
.page-title {
    margin: 0;
    font-size: 1.5rem;
    line-height: 1.5555556;
}
.detail-subtitle {
    font-size: .8rem;
    text-transform: uppercase;
    line-height: 1.6;
}
/*------------------------------------------------------------------
[5. Sidebar / #sidebar] - see /components/sidebar/sidebar-default.css
*/
#sidebar {
    min-width: 250px;
    max-width: 250px;
    background: #111111;
    color: #fff;
    transition: all 0.3s;
    border-right: 1px solid #e6ecf5;
}
#sidebar.active {
    margin-left: -250px;
}
#sidebar .sidebar-header {
    padding: .4rem 1rem;
    border-bottom: 1px solid rgba(101, 109, 119, .16);
    max-height: 55px;
}
#sidebar .sidebar-header img {
    padding: .5rem .1rem;
    max-height: 60px;
}
#sidebar ul.components {
    padding: 0 0;
}
#sidebar ul p {
    color: #fff;
    padding: 10px;
}
#sidebar ul li a {
    padding: .8rem 1.5rem;
    font-size: 1rem;
    display: block;
}
#sidebar ul li a .fas {
    min-width: 20px;
    margin-right: 5px;
    text-align: center;
}

#sidebar ul li a:hover,
#sidebar ul li a.active {
    color: #fff;
    background: #2196F3;
}
#sidebar ul li.active>a,
a[aria-expanded="true"] {
    color: inherit;
}
#sidebar ul ul a {
    font-size: 1rem;
    background: #EEEEEE;
}

#sidebar a[data-toggle="collapse"] {
    position: relative;
}
#sidebar .dropdown-toggle::after {
    display: block;
    position: absolute;
    top: 50%;
    right: 20px;
    transform: translateY(-50%);
    display: none;
}
@media (max-width: 768px) {
    #sidebarCollapse span {
        display: none;
    }
}
.table {
    color: #fff;
}

/*------------------------------------------------------------------
[6. Boxes / .box] 
*/
.box {
    position: relative;
    border-radius: 3px;
    background: #0b0909;
    border-top: 3px solid #d2d6de;
    margin-bottom: 20px;
    width: 100%;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
}
.box-body {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;
    padding: 10px;
}
.box-footer {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;
    border-top: 1px solid #f4f4f4;
    padding: 10px 20px;
    background-color: #FAFAFA;
    text-align: right;
}
.box-primary {
    border-top-color: #22a1f9;
}
/*------------------------------------------------------------------
[7. Dashboard Cards / .card] 
*/
.card {
    margin-bottom: 15px;
    box-shadow: rgba(35, 46, 60, .04) 0 2px 4px 0;
    background: #0b0909;
}

.card .content {
    padding: 15px 15px 10px 15px;
}

.card .content .icon-big {
    font-size: 3em;
    min-height: 64px;
    line-height: 64px;
}
.card .content .number {
    font-size: 1.5em;
    text-align: right;
    font-weight: bolder;
}
.card .content .footer {
    background-attachment: fixed;
    position: relative;
    padding: 0;
    line-height: 30px;
}
.card .content .stats {
    display: inline-block;
    color: #a9a9a9;
}
/*------------------------------------------------------------------
[8. Miscellaneous ] 
*/
.line {
    border-bottom: 1px solid #E0E0E0;
}
.nav-pills {
    padding: 15px;
    background-color: #E0E0E0;
    -webkit-box-shadow: 0 3px 10px 0 rgba(0, 0, 0, 0.05);
    box-shadow: 0 3px 10px 0 rgba(0, 0, 0, 0.05);
}
.btn-rounded {
    border-radius: 10em;
    padding: 6px 8px;
    font-size: small;
    text-transform: none;
    text-shadow: none !important;
    background: #eaeaea;
    border-color: transparent;
    border: none;
}
.btn-rounded:hover {
    border-color: transparent;
    border: none;
}
#myTab {
    margin-bottom: 15px;
}
.no-margin {
    margin: 0;
}
.dfd {
    width: 100%;
}
.bg-lighter-grey {
    background: #FAFAFA;
}
/*------------------------------------------------------------------
[9. Adjustments to default behaviors] 
*/
a,
a:hover,
a:focus {
    color: inherit;
    text-decoration: none;
    transition: all 0.3s;
}
.btn.focus,
.btn:focus {
    box-shadow: none;
}
.btn.btn-square {
    border-radius: 0;
}
.table td,
.table th {
    vertical-align: middle;
}
table.dataTable thead .sorting:before,
table.dataTable thead .sorting:after,
table.dataTable thead .sorting_asc:before,
table.dataTable thead .sorting_asc:after,
table.dataTable thead .sorting_desc:before,
table.dataTable thead .sorting_desc:after,
table.dataTable thead .sorting_asc_disabled:before,
table.dataTable thead .sorting_asc_disabled:after,
table.dataTable thead .sorting_desc_disabled:before,
table.dataTable thead .sorting_desc_disabled:after {
    font-size: .8rem;
    bottom: .9rem;
}
.dataTables_info {
    visibility: hidden;
}
table.dataTable>tbody>tr.child ul.dtr-details {
    display: block;
}
.nav-tabs {
    border-bottom: 2px solid #dee2e6;
}
.nav-tabs .nav-item {
    margin-bottom: -2px;
}
.nav-tabs .nav-link {
    border: none;
    -webkit-transition: color .1s ease;
    transition: color .1s ease;
    color: inherit;
}
.nav-tabs .nav-item.show .nav-link,
.nav-tabs .nav-link.active {
    color: #007bff;
    background-color: #fff;
    border-bottom: 2px solid #22a1f9;
}
.tab-content {
    padding: 15px;
}
.svg-inline--fa {
    min-width: 15px;
}
.display-absolute {
    position: absolute;
}
.large-icon {
    font-size: 3em;
}
.license span {
    margin-bottom: 1em;
}
/*------------------------------------------------------------------
[10. Colors / .teal, .olive, .violet, .orange, .darkgray, .blue, .grey] 
*/
.teal {
    color: #00b5ad !important;
}
.olive {
    color: #b5cc18 !important;
}
.violet {
    color: #6435c9 !important;
}
.orange {
    color: #f2711c !important;
}
.darkgray {
    color: darkgray !important;
}
.blue {
    color: #2185d0 !important;
}
.grey {
    color: #767676 !important;
}
/*------------------------------------------------------------------
[11. Responsive properties] 
*/
@media (max-width: 768px) {
    .display-absolute {
        position: relative;
    }
}

@media (max-width: 680px) {
    #body.active .navbar-collapse {
        display: -ms-flexbox !important;
        display: flex !important;
        -ms-flex-preferred-size: auto;
        flex-basis: auto;
    }

    .nav-dropdown .nav-link-menu {
        position: fixed !important;
        top: 52px !important;
        width: 100% !important;
        margin-top: 0;
    }

    .nav-dropdown .nav-link {
        padding: 10px;
    }

    .nav-dropdown .nav-link-menu::before {
        right: 50%;
    }

    #body .navbar-collapse {
        display: none !important;
    }

    #body .nav-dropdown .nav-item span {
        display: none !important;
    }

    .btn-header {
        display: none;
    }
}

@media (min-width: 200px) {
    .navbar-expand-lg .navbar-collapse {
        display: -ms-flexbox !important;
        display: flex !important;
        -ms-flex-preferred-size: auto;
        flex-basis: auto;
    }

    .navbar-expand-lg .navbar-nav {
        -ms-flex-direction: row;
        flex-direction: row;
    }
}
</style>
</body>
</html>