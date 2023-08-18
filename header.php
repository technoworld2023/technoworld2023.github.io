<?php
include "dp.php";

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    

    $q = "INSERT INTO `contactdata` (`name`, `email`, `phone`) VALUES ('$name', '$email', '$phone')";
    $query = mysqli_query($conn, $q);

    if ($query) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: " . mysqli_error($conn);
	}
}
?><!-- Start of header section
	============================================= -->

<html>

<body>
	<div>
		<header id="ori-header" class="ori-header-section header-style-two">
			<div class="ori-header-content-area">
				<div class="ori-header-content d-flex align-items-center justify-content-between">
					<div class="brand-logo">
						<a href="index.php"><img src="assets/img/logo/logo1.png" style="height: 80px;" alt="Techno-World"></a>
					</div>
					<div class="ori-main-navigation-area">
						<nav class="ori-main-navigation clearfix ul-li">
							<ul id="main-nav" class="nav navbar-nav clearfix">
								<li class="dropdown ori-megamenu"><a href="index.php">Home</a>

								</li>

								<li><a href="about.php" href="about">About</a></li>

								<li class="dropdown"><a>Service</a>
									<ul class="dropdown-menu clearfix">
										<li><a href="service.php">Services</a></li>
										<li class="dropdown"><a>Services Details</a>
											<ul class="dropdown-menu clearfix">
												<li><a href="webDevelopment.php">Web Development</a></li>
												<li><a href="search-Engine.php">Search Engine
														Optimization</a></li>
												<li><a href="social-media.php">Social Media
														Marketing</a></li>
												<li><a href="googleAd.php">Google Ad-Words</a></li>
												<li><a href="public-relation.php">Public Relation</a></li>
												<li><a href="content-develop.php">Content
														Development</a></li>
												<li><a href="brand-strat.php">Branding Strategy</a></li>
												<li><a href="payPer.php">Pay Per Click</a></li>
											</ul>
										</li>

									</ul>
								</li>
								<!-- <li><a href="pricing.html">Pricing Page</a></li> -->
								<li><a href="blog.php">Blog </a></li>
								<li><a href="contact.php">Contact </a></li>
							</ul>
						</nav>
					</div>
					<div class="ori-header-login-signup d-flex align-items-center">
						<div class="ori-login-btn  text-uppercase">
							<button data-bs-toggle="modal" data-bs-target="#exampleModal">
								<span>login</span> <i class="fal fa-sign-in-alt"></i>
							</button>
						</div>
						<div class="ori-sign-btn  text-uppercase">
							<button data-bs-toggle="modal" data-bs-target="#exampleModal2">sign
								up</button>
						</div>
					</div>
				</div>
				<!-- /Mobile-Menu start -->
				<div class="mobile_menu position-relative">
					<div class="mobile_menu_button open_mobile_menu">
						<i class="fal fa-bars"></i>
					</div>
					<div class="mobile_menu_wrap">
						<div class="mobile_menu_overlay open_mobile_menu"></div>
						<div class="mobile_menu_content">
							<div class="mobile_menu_close open_mobile_menu">
								<i class="fal fa-times"></i>
							</div>
							<div class="m-brand-logo">
								<a href="index.php"><img src="assets/img/logo/logo1.png" alt=""></a>
							</div>
							<nav class="mobile-main-navigation  clearfix ul-li">
								<ul id="m-main-nav" class="nav navbar-nav clearfix">
									<li><a ref="index.php">Home</a></li>

									<li><a href="index.php">About</a>
									<li class="dropdown"><a>SERVICE</a>
										<ul class="dropdown-menu clearfix">
											<li><a href="service.php">Services</a></li>
											<li class="dropdown"><a>Services Details</a>
												<ul class="dropdown-menu clearfix">
													<li><a href="webDevelopment.php">Web Development</a></li>
													<li><a href="search-Engine.php">Search Engine
															Optimization</a></li>
													<li><a href="social-media.php">Social Media
															Marketing</a></li>
													<li><a href="googleAd.php">Google Ad-Words</a></li>
													<li><a href="public-relation.php">Public
															Relation</a></li>
													<li><a href="content-develop.php">Content
															Development</a></li>
													<li><a href="brand-strat.php">Branding Strategy</a></li>
													<li><a href="payPer.php">Pay Per Click</a></li>
												</ul>
											</li>

										</ul>
									</li>
									<!-- <li><a href="pricing.html">Pricing Page</a></li> -->
									<li><a href="blog.php">Blog </a></li>
									<li><a href="contact.php">Contact </a></li>

								</ul>
							</nav>
						</div>
					</div>
					<!-- /Mobile-Menu -->
				</div>
			</div>
		</header>
		<!-- End of header section
	============================================= -->

		<!-- log In Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
			<div class="ori-signup-modal">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-body">
							<div class="ori-sign-up-modal-form-area">
								<button class="close-btn" type="button" data-bs-dismiss="modal" aria-label="Close">
									<i class="fal fa-times"></i>
								</button>
								<div class="ori-sign-up-modal-form-content d-flex align-items-center flex-wrap">
									<div class="ori-sign-up-modal-img position-relative">
										<img src="assets/img/bg/loginpage1.png" alt="">
										<!-- <div class="brand-logo position-absolute">
											<a href="#"><img src="assets/img/logo/logo1.png" alt=""></a>
										</div> -->
									</div>
									<div class="ori-sign-up-modal-form pera-content">
										<h3>Log in</h3>
										<p>Pls Log in to continue in our website.</p>
										<form  method="post">
											<label>Name</label> <input text="name" name="name" placeholder="Enter your Name"> <label>Phone
												Number</label> <input type="number"   name="phone" placeholder="Enter your phone number" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
											<label>Email ID</label> <input type="email"  name="email" placeholder="Enter your Email iD">
											<label>Password</label>
											<input type="text" name="password" placeholder="123456789">
											<label>Confirm Password</label>
											<input type="text" name="confrimpassword" placeholder="123456789">
											<div class="ori-signup-account-forget d-flex justify-content-between">
												<div class="keep-login">
													<input type="checkbox" name="keep"> <span>Keep
														me logged in</span>
												</div>
												<div class="forgot-pass">
													<a href="#">Forgot Password</a>
												</div>
											</div>
											<button type="submit" name="submit">Log In</button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Register Modal -->
		<div class="modal fade" id="exampleModal2" tabindex="-1" aria-hidden="true">
			<div class="ori-signup-modal">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-body">
							<div class="ori-sign-up-modal-form-area">
								<button class="close-btn" type="button" data-bs-dismiss="modal" aria-label="Close">
									<i class="fal fa-times"></i>
								</button>
								<div class="ori-sign-up-modal-form-content d-flex align-items-center flex-wrap">
									<div class="ori-sign-up-modal-img position-relative">
										<img src="assets/img/bg/Signup.png" alt="">

									</div>
									<div class="ori-sign-up-modal-form pera-content">
										<h3>Register</h3>
										<p>Register in to continue in our website.</p>
										<form action="#" method="get">
											<label>Email Address</label> <input type="email" name="email" placeholder="example@hotmail.com"> <label>Password</label>
											<input type="text" name="password" placeholder="123456789">
											<div class="ori-signup-account-forget d-flex justify-content-between">
												<div class="keep-login">
													<input type="checkbox" name="keep"> <span>Keep
														me logged in</span>
												</div>
												<div class="forgot-pass">
													<a href="#">Forgot Password</a>
												</div>
											</div>
											<button type="submit">Register</button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>

</html>