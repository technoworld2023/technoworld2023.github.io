<?php
include "dp.php";

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $subject = $_POST['subject'];

    $q = "INSERT INTO `contactdata` (`name`, `email`, `phone`, `message`, `subject`) VALUES ('$name', '$email', '$phone', '$message', '$subject')";
    $query = mysqli_query($conn, $q);

    // if ($query) {
    //     echo "Data inserted successfully.";
    // } else {
    //     echo "Error: " . mysqli_error($conn);
	// }
}
?>

<!DOCTYPE html>

<html>
	

<?php include('head.php') ?>
<body>
<?php include('body.php') ?>
<?php include('header.php') ?>
	

	<!-- Start of Breadcrumbs  section
	============================================= -->
	<section id="ori-breadcrumbs"
		class="ori-breadcrumbs-section position-relative"
		data-background="assets/img/bg/bread-bg.png">
		<div class="container">
			<div class="ori-breadcrumb-content text-center ul-li">
				<h1>Contact Us</h1>
				<ul>
					<li><a href="index.php">TechnoWorld</a></li>
					<li>Contact Us</li>
				</ul>
			</div>
		</div>
		<div class="line_animation">
			<div class="line_area"></div>
			<div class="line_area"></div>
			<div class="line_area"></div>
			<div class="line_area"></div>
			<div class="line_area"></div>
			<div class="line_area"></div>
			<div class="line_area"></div>
			<div class="line_area"></div>
		</div>
	</section>
	<!-- End of Breadcrumbs section c
	============================================= -->
	<!-- Start of Portfolio Details  section
	============================================= -->
	<section id="ori-portfolio-details"
		class="ori-portfolio-details-section position-relative">
		<div class="container">
			<div class="ori-portfolio-details-text-info-wrapper">
				<div class="row">
					<div class="col-lg-8">
						<div class="ori-portfolio-details-text-wrap pera-content">
							<div class="ori-portfolio-details-text">
								<h3>Methodologies</h3>
								<p>At Techno World, we are a result-oriented, full-service
									digital marketing powerhouse dedicated to amplifying your
									online impact and achieving extraordinary growth. Our team of
									experts thrives on crafting marketing solutions that cater to
									your unique business needs. Fueled by passion and driven by
									innovation, we stay ahead of industry trends, delivering
									exceptional results for our clients.</p>
								<p>Our approach is rooted in data-driven research, gaining
									an in-depth understanding of your business goals and target
									audience. By prioritizing active listening, conducting
									extensive market analysis, and designing tailor-made marketing
									strategies, we align your brand's vision with success.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="ori-portfolio-details-info ul-li-block">
							<h3>Particulars</h3>
							<ul>
								<li>Personage : <span>Techno-world</span></li>
								<li>genre : <span>Digital Marketing</span></li>
								<li>Legacy of : <span>3 years and counting</span></li>
								<li>Website : <span>info@techno-world.co</span></li>
								<li>Tags : <span>Digital Marketing, SEO , Technology</span></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="line_animation">
			<div class="line_area"></div>
			<div class="line_area"></div>
			<div class="line_area"></div>
			<div class="line_area"></div>
			<div class="line_area"></div>
			<div class="line_area"></div>
			<div class="line_area"></div>
			<div class="line_area"></div>
		</div>
	</section>
	<!-- End of Portfolio Details  section
	============================================= -->

	<!-- Start of Contact form  section
	============================================= -->
	<section id="ori-contact-form"
		class="ori-contact-form-section position-relative">
		<div class="container">
			<div class="ori-contact-form-content">
				<div class="row">
					<div class="col-lg-6">
						<div class="ori-contact-form-text-info pera-content">
							<h3>Onboard with us and join the digital era</h3>
							<p>Get in touch with us and get insights into your business
								and overcome and manage your buisness.</p>
							<div class="ori-contact-form-item-info">
								<div class="ori-contact-info d-flex align-items-center">
									<div
										class="info-icon d-flex align-items-center justify-content-center">
										<a href="tel:+91 9740-639-740"><i class="fas fa-phone-alt"></i></a>
									</div>
									<div class="info-text pera-content">
										<h4>Phone</h4>
										<p>(+91)9740-639-740</p>
									</div>
								</div>
								<div class="ori-contact-info d-flex align-items-center">
									<div
										class="info-icon d-flex align-items-center justify-content-center">
										<a href="mailto:info@techno-world.co"><i
											class="fas fa-envelope"></i></a>
									</div>
									<div class="info-text pera-content">
										<h4>Email</h4>
										<p>info@techno-world.co</p>
									</div>
								</div>
								<div class="ori-contact-info d-flex align-items-center">
									<div
										class="info-icon d-flex align-items-center justify-content-center">
										<a href="https://maps.app.goo.gl/UF8wGPZLbvyEsEHcA"><i
											class="fas fa-map-marker-alt"></i></a>

									</div>
									<div class="info-text pera-content">

										<h4>Location</h4>

										<span>#1, 1st Floor, 14th cross, Maruthi Nagar,<br>
											Chandra Layout, 80Ft. Road, Nagarbhavi,<br> Bengaluru,
											Karnataka- 560072
										</span> <br>
									</div>
								</div>
								<!-- Start of  google map  section
	                             ============================================= -->
								<div class="ori-container">
									<div class="ori-google-map">

										<!-- <iframe align="left" height="300" width="80" frameborder="0" style="border:0"
											src="https://maps.app.goo.gl/UF8wGPZLbvyEsEHcA">
										</iframe> -->
										<iframe height="300" width="80"
											style="border: 0; float: left;"
											src="https://www.google.com/maps/place/Techno+World/@12.9589113,77.5235154,17z/data=!3m1!4b1!4m6!3m5!1s0x6233e15946550c31:0xaba4e28f5dc82ffa!8m2!3d12.9589113!4d77.5235154!16s%2Fg%2F11v0qs9rb7?entry=ttu">
										</iframe>
									</div>

								</div>
								<!-- End of  google map  section
	                            ============================================= -->
							</div>
						</div>
					</div>

					<div class="col-lg-6">
						<div class="ori-contact-form-wrap">
							<form  method="POST">
								<label>Name *</label>
								 <input type="text" name="name" >
								 <label>Email
									*</label> 
									<input type="text" name="email" 
									placeholder="technoworld0510@gmail.com"> 
									
									<label>Phone Number *</label> 
									<input type="text" name="phone"
									placeholder="(+91) 9740639740"> <label>Subject
									*</label> <input type="text" name="subject" placeholder="Web development">
								<label>Message *</label>
								<textarea name="message"
									placeholder="Leave a message , we will get in touch soon..."></textarea>
								<button type="submit" name="submit">submit now</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="line_animation">
			<div class="line_area"></div>
			<div class="line_area"></div>
			<div class="line_area"></div>
			<div class="line_area"></div>
			<div class="line_area"></div>
			<div class="line_area"></div>
			<div class="line_area"></div>
			<div class="line_area"></div>
		</div>
	</section>
	<!-- End of Contact Form section
	============================================= -->

	<?php include('footer.php') ?>


</body>

</html>