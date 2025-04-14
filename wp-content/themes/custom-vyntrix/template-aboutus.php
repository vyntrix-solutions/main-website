<?php
    //Template Name: about-us
    get_header();
?>

	<!-- Page Title -->
    <section class="page-title" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/background/7.jpg)">
        <div class="auto-container">
			<h2>About Us</h2>
			<ul class="bread-crumb clearfix">
				<li><a href="index-2.html">Home</a></li>
				<li>About Us</li>
			</ul>
        </div>
    </section>
    <!-- End Page Title -->
	
    <!-- About One -->
    <section class="about-one">
        <div class="auto-container">
            <div class="row clearfix">
                <!-- Content Column -->
                <div class="about-one_content col-lg-6 col-md-12 col-sm-12">
                    <div class="about-one_content-inner">
                        <div class="sec-title">
                            <div class="sec-title_title">About us</div>
                            <h2 class="sec-title_heading">Welcome to <span>Vyntrix</span> Solutions</h2>
                            <div class="sec-title_text">
                                Founded in mid-2023, Vyntrix Solutions entered the digital space with a mission to reshape how businesses experience technology and design.
                            </div>
                        </div>
                        
                        <!-- About Info Tabs -->
                        <div class="about-info-tabs">
                            <!-- About Tabs -->
                            <div class="about-tabs tabs-box">
                                <!-- Tab Btns -->
                                <ul class="tab-btns tab-buttons clearfix">
                                    <li data-tab="#prod-mission" class="tab-btn active-btn">Our Mission</li>
                                    <li data-tab="#prod-vision" class="tab-btn">What We Do</li>
                                    <li data-tab="#prod-value" class="tab-btn">Our Values</li>
                                </ul>
                                
                                <!-- Tabs Container -->
                                <div class="tabs-content">
                                    <!-- Tab / Active Tab -->
                                    <div class="tab active-tab" id="prod-mission">
                                        <div class="content">
                                            <div class="text">
                                                Our journey is driven by innovation, integrity, and a deep understanding of digital transformation. We help brands across industries scale smart, stand out, and stay ahead — together.
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Tab -->
                                    <div class="tab" id="prod-vision">
                                        <div class="content">
                                            <div class="text">
                                                We specialize in:<br>
                                                - Web & Mobile Development<br>
                                                - UI/UX Design & Brand Identity<br>
                                                - Digital Marketing & Strategy<br>
                                                - IT Support Services<br>
                                                From real estate and travel to finance, education, and hospitality — we craft intuitive, scalable digital experiences.
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Tab -->
                                    <div class="tab" id="prod-value">
                                        <div class="content">
                                            <div class="text">
                                                At Vyntrix, every pixel, line of code, and marketing move has purpose. Our core values include:<br>
                                                - Transparent Communication<br>
                                                - Timely Deliveries<br>
                                                - High-Quality, Cost-Effective Solutions<br>
                                                - A Passionate Team of Creators & Thinkers
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        
                        <!-- About One Detail -->
                        <a class="about-one_detail lightbox-video" href="https://www.linkedin.com/company/vyntrix-solutions/posts/?feedView=all">
                            Check details about our company
                            <span class="play-icon"><span class="fa-solid fa-play fa-fw"></span><i class="ripple"></i></span>
                        </a>
                        
                    </div>
                </div>

                <!-- Image Column -->
                <div class="about-one_image-column-two col-lg-6 col-md-12 col-sm-12">
                    <div class="about-one-image-inner-two">
                        <div class="about-cicle_layer-two">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/background/pattern-45.png" alt="" />
                        </div>
                        <div class="about-one_image-two">
                            <!-- Counter Column -->
                            <div class="about-one_counter-block">
                                <div class="dots-layer" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/icons/about-dots.png)"></div>
                                <div class="about-one_counter-number"><span class="odometer" data-count="4"></span>+</div>
                                <div class="about-one_counter-text">years of <br>experience</div>
                            </div>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/resource/about-4.jpg" alt="" />
                            <div class="about-one_award">
                                <div class="about-one_award-inner">
                                    <div class="about-one_award-icon">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/icons/award.png" alt="" />
                                    </div>
                                    <strong>“Brands That Make Sense & Sales”</strong>
                                    Vyntrix is more than a name — it's a promise to turn vision into real-world impact.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End About One -->

	
    <!-- Process One -->
    <section class="process-one">
        <div class="auto-container">
            <div class="process-one_inner-conatiner">
                <div class="four-item-carousel owl-carousel owl-theme">

                    <?php
                    // Define updated timeline data
                    $process_items = [
                        [
                            'year' => '2020',
                            'image' => 'process-1.png',
                            'heading' => 'Digital Transformation',
                            'text' => 'Shifted focus to digital platforms to adapt to the global pandemic landscape.',
                            'style' => '',
                        ],
                        [
                            'year' => '2021',
                            'image' => 'process-2.png',
                            'heading' => 'Remote Expansion',
                            'text' => 'Expanded remote teams and embraced hybrid working models across departments.',
                            'style' => 'style-two',
                        ],
                        [
                            'year' => '2022',
                            'image' => 'process-3.png',
                            'heading' => 'Innovation Milestone',
                            'text' => 'Launched an AI-powered product that boosted customer engagement by 40%.',
                            'style' => 'style-three',
                        ],
                        [
                            'year' => '2023',
                            'image' => 'process-4.png',
                            'heading' => 'Global Recognition',
                            'text' => 'Received the International Business Excellence Award for innovation.',
                            'style' => 'style-four',
                        ],
                        [
                            'year' => '2024',
                            'image' => 'process-1.png',
                            'heading' => 'Sustainable Growth',
                            'text' => 'Invested in green technologies and achieved carbon neutrality in operations.',
                            'style' => '',
                        ],
                        [
                            'year' => '2025',
                            'image' => 'process-2.png',
                            'heading' => 'Next-Gen Strategy',
                            'text' => 'Rolled out a visionary roadmap focusing on Web3 and decentralized technologies.',
                            'style' => 'style-two',
                        ],
                    ];

                    foreach ($process_items as $item) :
                    ?>
                        <div class="process-one_block">
                            <div class="process-one_block-inner">
                                <div class="process-one_image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/resource/<?php echo esc_attr($item['image']); ?>" alt="" />
                                </div>
                                <div class="process-one_year <?php echo esc_attr($item['style']); ?>"><?php echo esc_html($item['year']); ?></div>
                                <h5 class="process-one_heading"><?php echo esc_html($item['heading']); ?></h5>
                                <div class="process-one_text"><?php echo esc_html($item['text']); ?></div>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </div>
    </section>
    <!-- End Process One -->
	
	<!-- Counter One -->
	<section class="counter-one" style="margin-top: 50px;">
		<div class="auto-container">
			<div class="counter-one_inner-container" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/background/1.jpg)">
				<div class="row clearfix">
					
					<!-- Counter Column -->
					<div class="counter-one_block col-lg-3 col-md-6 col-sm-6">
						<div class="counter-one_inner">
							<span class="counter-one_icon fa-solid fa-user-plus fa-fw"></span>
							<div class="counter-one_counter"><span class="odometer" data-count="105"></span>+</div>
							<div class="counter-one_text">Team members</div>
						</div>
					</div>
					
					<!-- Counter Column -->
					<div class="counter-one_block col-lg-3 col-md-6 col-sm-6">
						<div class="counter-one_inner">
							<span class="counter-one_icon fa-solid fa-award fa-fw"></span>
							<div class="counter-one_counter"><span class="odometer" data-count="15"></span>+</div>
							<div class="counter-one_text">Winning awards</div>
						</div>
					</div>
					
					<!-- Counter Column -->
					<div class="counter-one_block col-lg-3 col-md-6 col-sm-6">
						<div class="counter-one_inner">
							<span class="counter-one_icon fa-regular fa-file fa-fw"></span>
							<div class="counter-one_counter"><span class="odometer" data-count="10"></span>K+</div>
							<div class="counter-one_text">Completed project</div>
						</div>
					</div>
					
					<!-- Counter Column -->
					<div class="counter-one_block col-lg-3 col-md-6 col-sm-6">
						<div class="counter-one_inner">
							<span class="counter-one_icon fa-solid fa-user-tie fa-fw"></span>
							<div class="counter-one_counter"><span class="odometer" data-count="850"></span>k+</div>
							<div class="counter-one_text">Client’s reviews</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</section>
	<!-- End Counter One -->
	
    <!-- Testimonial Three -->
    <section class="testimonial-three">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Carousel Column -->
                <div class="testimonial-three_carousel-column col-lg-6 col-md-12 col-sm-12">
                    <div class="testimonial-three_carousel-inner">
                        <!-- Sec Title -->
                        <div class="sec-title">
                            <div class="sec-title_title">Team Member</div>
                            <h2 class="sec-title_heading">Passionate Personalities, <br> <span class="theme_color">Versatile</span> Brains</h2>
                        </div>
                        <div class="testimonial-three_review">Clients Reviews:</div>
                        <div class="single-item-carousel owl-carousel owl-theme">

                            <!-- Testimonial Block One -->
                            <div class="testimonial-block_three">
                                <div class="testimonial-block_three-inner">
                                    <div class="testimonial-block_three-text">“Working with this team was a smooth and professional experience. They understood our requirements and delivered a stunning website on time.”</div>
                                    <div class="author-box">
                                        <div class="box-inner">
                                            <span class="author-image">
                                                <img src="<?php echo get_template_directory_uri(); ?>/images/resource/author-india1.jpg" alt="" />
                                            </span>
                                            <h5>Ritika Sharma</h5>
                                            <div class="designation">Marketing Manager, Mumbai Textiles</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Testimonial Block Two -->
                            <div class="testimonial-block_three">
                                <div class="testimonial-block_three-inner">
                                    <div class="testimonial-block_three-text">“Their commitment to detail and user experience really stood out. We’ve seen a noticeable increase in customer engagement.”</div>
                                    <div class="author-box">
                                        <div class="box-inner">
                                            <span class="author-image">
                                                <img src="<?php echo get_template_directory_uri(); ?>/images/resource/author-india2.jpg" alt="" />
                                            </span>
                                            <h5>Arjun Mehta</h5>
                                            <div class="designation">Founder, Jaipur Handicrafts</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Testimonial Block Three -->
                            <div class="testimonial-block_three">
                                <div class="testimonial-block_three-inner">
                                    <div class="testimonial-block_three-text">“Reliable, responsive and innovative — the team brought our startup’s online vision to life beyond expectations.”</div>
                                    <div class="author-box">
                                        <div class="box-inner">
                                            <span class="author-image">
                                                <img src="<?php echo get_template_directory_uri(); ?>/images/resource/author-india3.jpg" alt="" />
                                            </span>
                                            <h5>Priya Nair</h5>
                                            <div class="designation">Operations Head, Kochi Startups</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Testimonial Block Four -->
                            <div class="testimonial-block_three">
                                <div class="testimonial-block_three-inner">
                                    <div class="testimonial-block_three-text">“They delivered exactly what we imagined. The design was fresh and functional — highly recommended for e-commerce platforms.”</div>
                                    <div class="author-box">
                                        <div class="box-inner">
                                            <span class="author-image">
                                                <img src="<?php echo get_template_directory_uri(); ?>/images/resource/author-india4.jpg" alt="" />
                                            </span>
                                            <h5>Vikram Reddy</h5>
                                            <div class="designation">CEO, Hyderabadi Foods Pvt Ltd</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Image Column -->
                <div class="testimonial-three_image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="testimonial-three_image-inner">
                        <div class="testimonial-three_image">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/resource/testimonial-2.png" alt="" />
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Testimonial Three -->


<?php
    get_footer();
?>
