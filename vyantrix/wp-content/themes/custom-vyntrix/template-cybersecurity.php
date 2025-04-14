<?php
    //Template Name: cybersecurity
    get_header();
?>

	<!-- Page Title -->
    <section class="page-title" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/background/7.jpg)">
        <div class="auto-container">
			<h2>Cybersecurity & Threat Protection</h2>
			<ul class="bread-crumb clearfix">
				<li><a href="<?php echo get_permalink(7); ?>">Home</a></li>
				<li>Cybersecurity & Threat Protection</li>
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
                                <img src="<?php echo get_template_directory_uri(); ?>/images/resource/Cybersecurity and Threat Protection.png" alt="Cybersecurity Service" />
                            </div>
                            <h3>Cybersecurity & Threat Protection</h3>
                            <p>Protect your digital assets with our cutting-edge cybersecurity and threat protection solutions. We help businesses defend against malware, ransomware, phishing, and other sophisticated cyber threats. Our proactive strategies ensure your data, applications, and networks remain secure around the clock.</p>
                            <div class="row clearfix">
                                
                                <!-- Feature Two -->
                                <div class="feature-two col-lg-6 col-md-6 col-sm-12">
                                    <div class="feature-two_inner">
                                        <div class="feature-two_content">
                                            <span class="feature-two_icon"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/feature-6.png" alt="Threat Detection Icon" /></span>
                                            <h5 class="feature-two_heading">Real-Time Threat Detection</h5>
                                            <div class="feature-two_text">We monitor your systems 24/7 to detect and neutralize threats before they cause harm.</div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Feature Two -->
                                <div class="feature-two col-lg-6 col-md-6 col-sm-12">
                                    <div class="feature-two_inner">
                                        <div class="feature-two_content">
                                            <span class="feature-two_icon"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/feature-7.png" alt="Network Security Icon" /></span>
                                            <h5 class="feature-two_heading">Advanced Network Security</h5>
                                            <div class="feature-two_text">We implement firewalls, encryption, and multi-layered security protocols to safeguard your infrastructure.</div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            
                            <div class="row clearfix">
                                <!-- Column -->
                                <div class="column col-lg-12 col-md-6 col-sm-12">
                                    <h4>We secure what matters most</h4>
                                    <p>Our cybersecurity experts work closely with you to identify vulnerabilities, deploy robust protection, and respond swiftly to incidents. Whether you’re a small business or a large enterprise, we tailor our approach to meet your specific security needs and compliance requirements.</p>
                                </div>
                            </div>
                            
                            <div class="feature-lower_box">
                                <div class="row clearfix">
                                    
                                    <!-- Feature Three -->
                                    <div class="feature-three col-lg-4 col-md-4 col-sm-6">
                                        <div class="feature-three_inner">
                                            <span class="feature-three_icon"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/service-35.png" alt="Firewall Protection Icon" /></span>
                                            Firewall Protection
                                        </div>
                                    </div>
                                    
                                    <!-- Feature Three -->
                                    <div class="feature-three col-lg-4 col-md-4 col-sm-6">
                                        <div class="feature-three_inner">
                                            <span class="feature-three_icon"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/service-36.png" alt="Data Encryption Icon" /></span>
                                            Data Encryption
                                        </div>
                                    </div>
                                    
                                    <!-- Feature Three -->
                                    <div class="feature-three col-lg-4 col-md-4 col-sm-6">
                                        <div class="feature-three_inner">
                                            <span class="feature-three_icon"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/service-37.png" alt="Security Audits Icon" /></span>
                                            Security Audits
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