<?php
	
	include 'config.php';
	
	session_start();
	if(isset($_POST['login'])){
		
		$email = $_POST['email'];
		$email = filter_var($email, FILTER_SANITIZE_STRING);
		$pass = ($_POST['password']);
		$pass = filter_var($pass, FILTER_SANITIZE_STRING);
		
		$sql = "SELECT * FROM `userdetails` WHERE email = '$email' and Password ='$pass' ";
        $result = mysqli_query($conn, $sql);
        $rowCount = mysqli_num_rows($result);
		if(mysqli_num_rows($result) > 0){
			$_SESSION["id"] = $row["id"];
			header("Location: home-shop-modern.php");
		}
		else{
			echo
			"<script> alert('incorrect username or password!'); </script>";
		}
		
	}
	
	
?>



<!DOCTYPE html>
<html lang="en">
	
	<head>
		<!-- Metas -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="keywords" content="">
		<meta name="description" content="">
		<meta name="author" content="">
		
		<!-- Title  -->
		<title>Sign up | SALES UPGRADE</title>
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="assets/img/fav.png" title="Favicon" sizes="16x16">
		
		<!-- ====== bootstrap icons cdn ====== -->
		<link rel="stylesheet" href="npm/bootstrap-icons%401.7.2/font/bootstrap-icons.css">
		
		<!-- bootstrap 5 -->
		<link rel="stylesheet" href="assets/css/lib/bootstrap.min.css">
		
		<!-- ====== font family ====== -->
		<link href="css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
		
		<link rel="stylesheet" href="assets/css/lib/all.min.css">
		<link rel="stylesheet" href="assets/css/lib/animate.css">
		<link rel="stylesheet" href="assets/css/lib/jquery.fancybox.css">
		<link rel="stylesheet" href="assets/css/lib/lity.css">
		<link rel="stylesheet" href="assets/css/lib/swiper.min.css">
		
		<!-- ====== global style ====== -->
		<link rel="stylesheet" href="assets/css/style.css">
		<style>
			@media screen and (min-width: 1250px) {
				.center{
					margin-left: 250px;
				}
				
			}
		</style>
	</head>
	
	<body>
		
		<!-- ====== start loading page ====== -->
		<!-- <div id="preloader">
		</div> -->
		<!-- ---------- loader ---------- -->
		<!--<div id="preloader">
			<div id="loading-wrapper" class="show">
            <div id="loading-text"> <img src="assets/img/logo_9.png" alt=""> </div>
            <div id="loading-content"></div>
			</div>
		</div>-->
		<!-- ====== end loading page ====== -->
		
		<!--Contents-->
		<main class="signin-page style-5">
			
			<!-- ====== start careers-features ====== -->
			<section class="signin style-5">
				<div class="container">
					<div class="form-content">
						<div class="row gx-0">
						 	<form action="" class="form" method="post">
							<div class="col-lg-6 order-last order-lg-first center">
								<div class="info">
							
								<div class="login">
									<a href="#" class="logo">
										<img src="assets/img/sales-upgrade.png" alt="">
									</a>
									<h3 class="mb-2">Existing user <span class="color-blue5">Please signin here </span> </h3>
									<div class="row">
										<div class="col-lg-6">
											<div class="form-group group-icon">
												<input type="text" class="form-control" placeholder="Email address">
												<span class="icon"> <i class="fas fa-envelope"></i> </span>
											</div>
										</div>
										<div class="col-lg-6">
											<div class="form-group group-icon mt-3 mt-lg-0">
												<input type="password" class="form-control" placeholder="Password">
												<span class="icon"> <i class="fas fa-key"></i> </span>
											</div>
										</div>
										
									</div>
									<button class="butn bg-main border-0 rounded-3 w-100 text-white mt-20 py-3">  
										<span> Log In <i class="fal fa-long-arrow-right ms-2"></i> </span>
									</button>
									<br>
									</br>
									 <p class="mb-2"><a href="new-user-signup.php"><span class="color-blue5">Create an account </span></a></p>
									</div>
							        </div>		
								
							</div>
							</form>
							
						</div>
						
					</div>
				</div>
			</section>
			<!-- ====== end timeline ====== -->
			
		</main>
	<!--End-Contents-->
	
    <!-- ====== start to top button ====== -->
    <a href="#" class="to_top bg-gray rounded-circle icon-40 d-inline-flex align-items-center justify-content-center">
	<i class="bi bi-chevron-up fs-6 text-dark"></i>
    </a>
    <!-- ====== end to top button ====== -->
	
    <!-- ====== request ====== -->
    <script src="assets/js/lib/jquery-3.0.0.min.js"></script>
    <script src="assets/js/lib/jquery-migrate-3.0.0.min.js"></script>
    <script src="assets/js/lib/bootstrap.bundle.min.js"></script>
    <script src="assets/js/lib/wow.min.js"></script>
    <script src="assets/js/lib/jquery.fancybox.js"></script>
    <script src="assets/js/lib/lity.js"></script>
    <script src="assets/js/lib/swiper.min.js"></script>
    <script src="assets/js/lib/jquery.waypoints.min.js"></script>
    <script src="assets/js/lib/jquery.counterup.js"></script>
    <!-- <script src="assets/js/lib/pace.js"></script> -->
    <script src="assets/js/lib/scrollIt.min.js"></script>
    <script src="assets/js/main.js"></script>
	
    <script>
	const second = 1000,
	minute = second * 60,
	hour = minute * 60,
	day = hour * 24,
	week = hour * 24 * 7;
	
	let countDown = new Date('Oct 29, 2022 11:30').getTime(),
	x = setInterval(function() {
	
	let now = new Date().getTime(),
	distance = countDown - now;
	
	document.getElementById('days').innerText = Math.floor(distance / (day)),
	document.getElementById('hours').innerText = Math.floor((distance % (day)) / (hour)),
	document.getElementById('minutes').innerText = Math.floor((distance % (hour)) / (minute)),
	document.getElementById('seconds').innerText = Math.floor((distance % (minute)) / second);
	
	//do something later when date is reached
	//if (distance < 0) {
	//  clearInterval(x);
	//  'IT'S MY BIRTHDAY!;
	//}
	
	}, second)
    </script>
	
	</body>
	
	</html>	