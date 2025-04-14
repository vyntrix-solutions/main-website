<?php
    //Template Name: custom-web-development
    get_header();
?>

	<!-- Page Title -->
    <section class="page-title" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/background/7.jpg)">
        <div class="auto-container">
			<h2>Custom Web Development</h2>
			<ul class="bread-crumb clearfix">
				<li><a href="<?php echo get_permalink(7); ?>">Home</a></li>
				<li>Custom Web Development</li>
			</ul>
        </div>
    </section>
    <!-- End Page Title -->
	
	<!-- Sidebar Page Container -->
    <div class="sidebar-page-container">
    	<div class="auto-container">
        	<div class="row clearfix">
				
				<!-- Sidebar Side -->
                <div class="sidebar-side left-sidebar col-lg-4 col-md-12 col-sm-12">
                	<aside class="sidebar">
						<!-- Sidebar Widget -->
						<div class="sidebar-widget category-widget">
                            <ul class="cat-list">
                                <li class="<?php echo (get_the_ID() == 20) ? 'active' : ''; ?>">
                                    <a href="<?php echo get_permalink(20); ?>">UX & UI</a>
                                </li>
                                <li class="<?php echo (get_the_ID() == 22) ? 'active' : ''; ?>">
                                    <a href="<?php echo get_permalink(22); ?>">Custom Web Development</a>
                                </li>
                                <li class="<?php echo (get_the_ID() == 24) ? 'active' : ''; ?>">
                                    <a href="<?php echo get_permalink(24); ?>">AI & Machine Learning Solutions</a>
                                </li>
                                <li class="<?php echo (get_the_ID() == 26) ? 'active' : ''; ?>">
                                    <a href="<?php echo get_permalink(26); ?>">Mobile Application Development</a>
                                </li>
                                <li class="<?php echo (get_the_ID() == 28) ? 'active' : ''; ?>">
                                    <a href="<?php echo get_permalink(28); ?>">Digital Marketing & SEO Optimization</a>
                                </li>
                                <li class="<?php echo (get_the_ID() == 30) ? 'active' : ''; ?>">
                                    <a href="<?php echo get_permalink(30); ?>">Cybersecurity & Threat Protection</a>
                                </li>
                                <li class="<?php echo (get_the_ID() == 32) ? 'active' : ''; ?>">
                                    <a href="<?php echo get_permalink(32); ?>">Security And Compliance</a>
                                </li>
                                <li class="<?php echo (get_the_ID() == 35) ? 'active' : ''; ?>">
                                    <a href="<?php echo get_permalink(35); ?>">E-commerce Development</a>
                                </li>
                            </ul>
                        </div>

						<!-- Contact Widget -->
						<div class="sidebar-widget contact-widget">
							<div class="widget-content" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/background/8.jpg)">
								<div class="title">Contact us now</div>
								<div class="help">If need help!</div>
								<a class="phone" href="tel:+91 78698 18226">+91 78698 18226</a>
								<div class="form">or go to contact form:</div>
								<div class="button-box text-center">
									<a href="#">Let’s start now <span class="fa-solid fa-link fa-fw"></span></a>
								</div>
							</div>
						</div>
						
					</aside>
				</div>
				
				<!-- Content Side -->
                <div class="content-side right-sidebar col-lg-8 col-md-12 col-sm-12">
                    <div class="service-detail">
                        <div class="inner-box">
                            <div class="image">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/resource/Custom Web Development.png" alt="Custom Web Development" />
                            </div>
                            <h3>Custom Web Development</h3>
                            <p>We specialize in building powerful, scalable, and tailored web solutions that match your unique business requirements. Whether it's a dynamic web app, custom CMS, or advanced eCommerce platform, our team ensures pixel-perfect functionality and performance. From front-end to back-end, we craft digital experiences that are secure, optimized, and ready to scale.</p>
                            <div class="row clearfix">

                                <!-- Feature Two -->
                                <div class="feature-two col-lg-6 col-md-6 col-sm-12">
                                    <div class="feature-two_inner">
                                        <div class="feature-two_content">
                                            <span class="feature-two_icon"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/feature-6.png" alt="Custom Solutions" /></span>
                                            <h5 class="feature-two_heading">Tailored Solutions</h5>
                                            <div class="feature-two_text">Every website we build is customized to meet your business needs, with seamless integration and top-notch functionality.</div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Feature Two -->
                                <div class="feature-two col-lg-6 col-md-6 col-sm-12">
                                    <div class="feature-two_inner">
                                        <div class="feature-two_content">
                                            <span class="feature-two_icon"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/feature-7.png" alt="Performance Focused" /></span>
                                            <h5 class="feature-two_heading">High Performance</h5>
                                            <div class="feature-two_text">Optimized code and robust architecture ensure your website performs fast, secure, and reliably under any load.</div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row clearfix">
                                <!-- Column -->
                                <div class="column col-lg-12 col-md-6 col-sm-12">
                                    <h4>We build for performance and growth</h4>
                                    <p>Our custom development process is rooted in strategy and collaboration. We work closely with you to define functionality, plan architecture, and execute flawlessly. The result is a high-quality, scalable web solution built to support your long-term goals.</p>
                                </div>
                            </div>

                            <div class="feature-lower_box">
                                <div class="row clearfix">

                                    <!-- Feature Three -->
                                    <div class="feature-three col-lg-4 col-md-4 col-sm-6">
                                        <div class="feature-three_inner">
                                            <span class="feature-three_icon"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/service-35.png" alt="Clean Code" /></span>
                                            Clean & Scalable Code
                                        </div>
                                    </div>

                                    <!-- Feature Three -->
                                    <div class="feature-three col-lg-4 col-md-4 col-sm-6">
                                        <div class="feature-three_inner">
                                            <span class="feature-three_icon"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/service-36.png" alt="Secure Systems" /></span>
                                            Secure Development
                                        </div>
                                    </div>

                                    <!-- Feature Three -->
                                    <div class="feature-three col-lg-4 col-md-4 col-sm-6">
                                        <div class="feature-three_inner">
                                            <span class="feature-three_icon"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/service-37.png" alt="Optimized Delivery" /></span>
                                            SEO & Speed Optimized
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>

			</div>
		</div>
	</div>
	<!-- End Sidebar Page Container -->

<?php
    get_footer();
?>