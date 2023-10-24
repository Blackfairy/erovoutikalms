<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }
}else{
    header('Location: login-user.php');
}
?>
<!DOCTYPE html> 
<html>


<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
	    <link rel="stylesheet" type="text/css" href="DashboardPBL.css">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>


<body>

    <header>
	<img src="Erovoutika.png">
	
    <nav class="navbar">
		<a href="#Dashboard">Dashboard</a>
        <a href="#reports">Reports</a>
        <a href="#products">Products</a>
        <a href="#suppliers">Suppliers</a>
		<a href="#sales">Sales</a>
    </nav>

    <div class="follow">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
    </div>

</header>
	
	<section class="home" id="home">
		<div class="logoutbtn">
			<a href="logout-user.php" class="top-right-button">LOG-OUT</a>
		</div>
			<div class="content">
				<h3 class = "2ndintro">Welcome Back <?php echo $fetch_info['name'] ?></h3>
			</div>
</section>


<section class="hobbies" id="hobbies">
    
	<div class="box-container">

        <div class="box">
            <i class="fa fa-archive" aria-hidden="true"></i>
            <h3>12 Items</h3>
            <p>Text sample</p>
        </div>

        <div class="box">
            <i class="fa fa-exclamation" aria-hidden="true"></i>
            <h3>Text here</h3>
            <p>Text sample</p>
        </div>

        <div class="box">
            <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
            <h3>Text here</h3>
            <p>Text sample</p>
        </div>

</section>


<section class="recent" id="recent">

<div class="recents">
        <h3 class = "Intro3rd"> Recent <span> <a href="#hobbies">Stock</a> </span> Items </h3>
    </div>
	</section>
	
	
	<section class="stock" id="stock">
	
	<div class="table">
	 <table>
	 <colgroup>
            <col style="width: 8%">
            <col style="width: 30%">
            <col style="width: 45%">
			<col style="width: 50%">
        </colgroup>
        <thead>
            <tr>
                <th>NO.</th>
                <th>Stock ID.</th>
                <th>Restock Items</th>
				<th>Date</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Data 1</td>
                <td>Data 2</td>
                <td>Data 3</td>
				<td>Data 4</td>
            </tr>
			<tr>
                <td>Data 1</td>
                <td>Data 2</td>
                <td>Data 3</td>
				<td>Data 4</td>
            </tr>
			<tr>
                <td>Data 1</td>
                <td>Data 2</td>
                <td>Data 3</td>
				<td>Data 4</td>
            </tr>
			<tr>
                <td>Data 1</td>
                <td>Data 2</td>
                <td>Data 3</td>
				<td>Data 4</td>
            </tr>
			<tr>
                <td>Data 1</td>
                <td>Data 2</td>
                <td>Data 3</td>
				<td>Data 4</td>
            </tr>
            <tr>
                <td>Data 4</td>
                <td>Data 5</td>
                <td>Data 6</td>
				<td>Data 4</td>

            </tr>
			<tr>
                <td>Data 4</td>
                <td>Data 5</td>
                <td>Data 6</td>
				<td>Data 4</td>
            </tr>
			<tr>
                <td>Data 4</td>
                <td>Data 5</td>
                <td>Data 6</td>
				<td>Data 4</td>
            </tr>
			<tr>
                <td>Data 4</td>
                <td>Data 5</td>
                <td>Data 6</td>
				<td>Data 4</td>
            </tr>
			<tr>
                <td>Data 4</td>
                <td>Data 5</td>
                <td>Data 6</td>
				<td>Data 4</td>
            </tr>
        </tbody>
    </table>
	</div>
	
</section>



	
</body>


</html>