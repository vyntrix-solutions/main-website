<?php
    //Template Name: mobile-application-development
    get_header();
?>

	<!-- Page Title -->
    <section class="page-title" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/background/7.jpg)">
        <div class="auto-container">
			<h2>Mobile Application Development</h2>
			<ul class="bread-crumb clearfix">
				<li><a href="<?php echo get_permalink(7); ?>">Home</a></li>
				<li>Mobile Application Development</li>
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
                                <img src="<?php echo get_template_directory_uri(); ?>/images/resource/sMobile Application Development.png" alt="Mobile Application Development" />
                            </div>
                            <h3>Mobile Application Development</h3>
                            <p>We specialize in building high-performance, feature-rich mobile applications that deliver exceptional user experiences across iOS and Android platforms. Whether it's a native app or a cross-platform solution, we turn your ideas into powerful mobile tools.</p>
                            <div class="row clearfix">
                                
                                <!-- Feature Two -->
                                <div class="feature-two col-lg-6 col-md-6 col-sm-12">
                                    <div class="feature-two_inner">
                                        <div class="feature-two_content">
                                            <span class="feature-two_icon">
                                                <img src="<?php echo get_template_directory_uri(); ?>/images/icons/feature-6.png" alt="Native App Icon" />
                                            </span>
                                            <h5 class="feature-two_heading">Native & Cross-Platform</h5>
                                            <div class="feature-two_text">We develop both native apps for iOS and Android, and cross-platform apps using frameworks like Flutter and React Native.</div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Feature Two -->
                                <div class="feature-two col-lg-6 col-md-6 col-sm-12">
                                    <div class="feature-two_inner">
                                        <div class="feature-two_content">
                                            <span class="feature-two_icon">
                                                <img src="<?php echo get_template_directory_uri(); ?>/images/icons/feature-7.png" alt="UI UX Icon" />
                                            </span>
                                            <h5 class="feature-two_heading">UI/UX Focused Design</h5>
                                            <div class="feature-two_text">Our design-first approach ensures intuitive interfaces and seamless navigation to boost user engagement and retention.</div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            
                            <div class="row clearfix">
                                <!-- Column -->
                                <div class="column col-lg-12 col-md-6 col-sm-12">
                                    <h4>Scalable, Secure & Future-Ready Apps</h4>
                                    <p>From planning to deployment, we follow best practices to deliver robust mobile applications that scale with your business. We also provide ongoing support and updates to keep your app ahead of the curve.</p>
                                </div>
                            </div>
                            
                            <div class="feature-lower_box">
                                <div class="row clearfix">
                                    
                                    <!-- Feature Three -->
                                    <div class="feature-three col-lg-4 col-md-4 col-sm-6">
                                        <div class="feature-three_inner">
                                            <span class="feature-three_icon">
                                                <img src="<?php echo get_template_directory_uri(); ?>/images/icons/service-35.png" alt="Flutter Icon" />
                                            </span>
                                            Flutter & React Native
                                        </div>
                                    </div>
                                    
                                    <!-- Feature Three -->
                                    <div class="feature-three col-lg-4 col-md-4 col-sm-6">
                                        <div class="feature-three_inner">
                                            <span class="feature-three_icon">
                                                <img src="<?php echo get_template_directory_uri(); ?>/images/icons/service-36.png" alt="App Store Icon" />
                                            </span>
                                            App Store & Play Store Deployment
                                        </div>
                                    </div>
                                    
                                    <!-- Feature Three -->
                                    <div class="feature-three col-lg-4 col-md-4 col-sm-6">
                                        <div class="feature-three_inner">
                                            <span class="feature-three_icon">
                                                <img src="<?php echo get_template_directory_uri(); ?>/images/icons/service-37.png" alt="Maintenance Icon" />
                                            </span>
                                            Maintenance & Support
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