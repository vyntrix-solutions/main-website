<?php
    //Template Name: ui-ux
    get_header();
?>

	<!-- Page Title -->
    <section class="page-title" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/background/7.jpg)">
        <div class="auto-container">
			<h2>UX & UI</h2>
			<ul class="bread-crumb clearfix">
				<li><a href="<?php echo get_permalink(7); ?>">Home</a></li>
				<li>UX & UI</li>
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
                                <img src="<?php echo get_template_directory_uri(); ?>/images/resource/UI_UX.png" alt="UX & UI Design" />
                            </div>
                            <h3>UX & UI Design</h3>
                            <p>We craft intuitive and visually stunning user experiences that drive engagement and boost conversions. Our UX & UI design services focus on user-centric designs that align with your brand’s identity and business goals.</p>
                            <div class="row clearfix">
                                
                                <!-- Feature Two -->
                                <div class="feature-two col-lg-6 col-md-6 col-sm-12">
                                    <div class="feature-two_inner">
                                        <div class="feature-two_content">
                                            <span class="feature-two_icon">
                                                <img src="<?php echo get_template_directory_uri(); ?>/images/icons/feature-6.png" alt="User Research Icon" />
                                            </span>
                                            <h5 class="feature-two_heading">User Research & Prototyping</h5>
                                            <div class="feature-two_text">We begin with in-depth research to understand your users and develop wireframes and prototypes that streamline the user journey.</div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Feature Two -->
                                <div class="feature-two col-lg-6 col-md-6 col-sm-12">
                                    <div class="feature-two_inner">
                                        <div class="feature-two_content">
                                            <span class="feature-two_icon">
                                                <img src="<?php echo get_template_directory_uri(); ?>/images/icons/feature-7.png" alt="Visual Design Icon" />
                                            </span>
                                            <h5 class="feature-two_heading">Modern Visual Design</h5>
                                            <div class="feature-two_text">We create visually appealing and brand-consistent UI components that enhance the look and feel of your product.</div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            
                            <div class="row clearfix">

                                <!-- Column -->
                                <div class="column col-lg-12 col-md-6 col-sm-12">
                                    <h4>Responsive, Mobile-First & Accessible</h4>
                                    <p>Our designs are built to perform across all devices and screen sizes. We follow accessibility best practices to ensure inclusivity and compliance with WCAG standards.</p>
                                </div>
                            </div>
                            
                            <div class="feature-lower_box">
                                <div class="row clearfix">
                                    
                                    <!-- Feature Three -->
                                    <div class="feature-three col-lg-4 col-md-4 col-sm-6">
                                        <div class="feature-three_inner">
                                            <span class="feature-three_icon">
                                                <img src="<?php echo get_template_directory_uri(); ?>/images/icons/service-35.png" alt="Optimized Delivery" />
                                            </span>
                                            Wireframing & Prototyping
                                        </div>
                                    </div>
                                    
                                    <!-- Feature Three -->
                                    <div class="feature-three col-lg-4 col-md-4 col-sm-6">
                                        <div class="feature-three_inner">
                                            <span class="feature-three_icon"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/service-36.png"  /></span>
                                            Design Systems & Style Guides
                                        </div>
                                    </div>
                                    
                                    <!-- Feature Three -->
                                    <div class="feature-three col-lg-4 col-md-4 col-sm-6">
                                    <div class="feature-three_inner">
                                            <span class="feature-three_icon"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/service-37.png"  /></span>
                                            Usability Testing & Feedback
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