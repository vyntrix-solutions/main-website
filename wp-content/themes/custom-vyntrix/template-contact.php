<?php
    //Template Name: contact
    get_header();
?>

	<!-- Page Title -->
    <section class="page-title" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/background/7.jpg)">
        <div class="auto-container">
			<h2>Contact Us</h2>
			<ul class="bread-crumb clearfix">
				<li><a href="index-2.html">Home</a></li>
				<li>Contact Us</li>
			</ul>
        </div>
    </section>
    <!-- End Page Title -->
	
	<!-- Contact One -->
	<section class="contact-one" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/background/map-1.png)">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title">
				<div class="d-flex justify-content-between align-items-center flex-wrap">
					<div class="left-box">
						<div class="sec-title_title">Contact us</div>
						<h2 class="sec-title_heading">Grow Your Business With <br> <span>Our Expertise</span></h2>
					</div>
					<div class="right-box">
						<div class="sec-title_text">Reach out to us today and let our experts help you take the next big step. We're just a message away!</div>
					</div>
				</div>
			</div>
			<div class="row clearfix">
			
				<!-- Info Column -->
				<div class="info-column col-lg-4 col-md-12 col-sm-12">
					<div class="inner-column">
						
						<!-- Contact Block -->
						<div class="contact-block">
							<div class="block-inner">
								<span class="icon"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/contact-1.png" alt="" /></span>
								<strong>Office address</strong>
								380 Satya Sai Indore Madhya Pradesh
							</div>
						</div>
						
						<!-- Contact Block -->
						<div class="contact-block">
							<div class="block-inner">
								<span class="icon"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/contact-2.png" alt="" /></span>
								<strong>Telephone number</strong>
								+91 78698 18226
							</div>
						</div>
						
						<!-- Contact Block -->
						<div class="contact-block">
							<div class="block-inner">
								<span class="icon"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/contact-3.png" alt="" /></span>
								<strong>Mail address</strong>
								vyntrixsolutions@gmail.com
							</div>
						</div>
						
					</div>
				</div>
				
				<!-- Form Column -->
				<div class="form-column col-lg-8 col-md-12 col-sm-12">
					<div class="inner-column">
						
						<!-- Contact Form -->
						<div class="contact-form">
							<form action="https://api.web3forms.com/submit" method="POST" id="contact-form">
                                <input type="hidden" name="access_key" value="767ac4ee-1fb1-47e2-b54d-40529a56542d">
								<div class="row clearfix">
									
									<div class="col-lg-6 col-md-6 col-sm-12 form-group">
										<label>Name (required)</label>
										<input type="text" name="username" placeholder="Your name*" required="">
									</div>
									
									<div class="col-lg-6 col-md-6 col-sm-12 form-group">
										<label>Email adress (required)</label>
										<input type="text" name="email" placeholder="Email" required="">
									</div>
									
									<div class="col-lg-6 col-md-12 col-sm-12 form-group">
										<label>Phone (optional)</label>
										<input type="text" name="phone" placeholder="Phone" required="">
									</div>
									
									<div class="col-lg-6 col-md-12 col-sm-12 form-group">
										<label>Subject (required)</label>
										<input type="text" name="subject" placeholder="Subject" required="">
									</div>
									
									<div class="col-lg-12 col-md-12 col-sm-12 form-group">
										<label>Your message</label>
										<textarea class="" name="message" placeholder="Your text here..."></textarea>
									</div>
									
									<div class="col-lg-12 col-md-12 col-sm-12 form-group">
										<button class="btn-style-seven theme-btn">
											<span class="btn-wrap">
												<span class="text-one">Send message</span>
												<span class="text-two">Send message</span>
											</span>
										</button>
									</div>
									
								</div>
							</form>
						</div>
						<!-- End Comment Form -->
						
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Contact One -->
	
	<!-- Map One -->
	<!-- <section class="map-one">
		<div class="map-outer">
			<iframe src="#" allowfullscreen=""></iframe>
		</div>
	</section> -->
	<!-- End Map One -->

<?php
    get_footer();
?>
