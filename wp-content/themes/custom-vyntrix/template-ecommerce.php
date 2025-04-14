<?php
    //Template Name: ecommerce-development
    get_header();
?>

	<!-- Page Title -->
    <section class="page-title" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/background/7.jpg)">
        <div class="auto-container">
			<h2>E-commerce Development</h2>
			<ul class="bread-crumb clearfix">
				<li><a href="<?php echo get_permalink(7); ?>">Home</a></li>
				<li>E-commerce Development</li>
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
                                <img src="<?php echo get_template_directory_uri(); ?>/images/resource/E-Commerce.png" alt="E-commerce Development Service" />
                            </div>
                            <h3>E-commerce Development</h3>
                            <p>We build scalable and secure e-commerce platforms that elevate your brand and streamline online shopping experiences. Whether you're launching a new store or optimizing an existing one, we provide tailor-made solutions to boost your sales and customer engagement.</p>
                            <div class="row clearfix">
                                
                                <!-- Feature Two -->
                                <div class="feature-two col-lg-6 col-md-6 col-sm-12">
                                    <div class="feature-two_inner">
                                        <div class="feature-two_content">
                                            <span class="feature-two_icon"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/feature-6.png" alt="Custom Store Icon" /></span>
                                            <h5 class="feature-two_heading">Custom Store Development</h5>
                                            <div class="feature-two_text">We design and develop fully customized online stores using platforms like WooCommerce, Shopify, and Magento to match your business needs.</div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Feature Two -->
                                <div class="feature-two col-lg-6 col-md-6 col-sm-12">
                                    <div class="feature-two_inner">
                                        <div class="feature-two_content">
                                            <span class="feature-two_icon"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/feature-7.png" alt="User Experience Icon" /></span>
                                            <h5 class="feature-two_heading">User-Focused Experience</h5>
                                            <div class="feature-two_text">Our interfaces are optimized for performance, responsiveness, and easy navigation—ensuring a smooth shopping experience across all devices.</div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            
                            <div class="row clearfix">
                                <!-- Column -->
                                <div class="column col-lg-12 col-md-6 col-sm-12">
                                    <h4>From storefront to checkout – we handle it all</h4>
                                    <p>We integrate secure payment gateways, manage product inventories, and ensure your online store is fully functional and easy to maintain. From product display to final checkout, we craft seamless e-commerce journeys that convert.</p>
                                </div>
                            </div>
                            
                            <div class="feature-lower_box">
                                <div class="row clearfix">
                                    
                                    <!-- Feature Three -->
                                    <div class="feature-three col-lg-4 col-md-4 col-sm-6">
                                        <div class="feature-three_inner">
                                            <span class="feature-three_icon"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/service-35.png" alt="WooCommerce Icon" /></span>
                                            WooCommerce Integration
                                        </div>
                                    </div>
                                    
                                    <!-- Feature Three -->
                                    <div class="feature-three col-lg-4 col-md-4 col-sm-6">
                                        <div class="feature-three_inner">
                                            <span class="feature-three_icon"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/service-36.png" alt="Payment Gateway Icon" /></span>
                                            Secure Payment Gateways
                                        </div>
                                    </div>
                                    
                                    <!-- Feature Three -->
                                    <div class="feature-three col-lg-4 col-md-4 col-sm-6">
                                        <div class="feature-three_inner">
                                            <span class="feature-three_icon"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/service-37.png" alt="Inventory Icon" /></span>
                                            Inventory Management Systems
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