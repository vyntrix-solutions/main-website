<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<title>Vyntrix Solutions</title>
<!-- Stylesheets -->
<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/css/responsive.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">

<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png" type="image/x-icon">
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

</head>

<body>
 
<div class="page-wrapper">
	
   
 	<!-- Main Header / Header Style Two -->
    <header class="main-header header-style-two">
    	
		<!-- Header Top -->
		<div class="header-top_two">
			<div class="auto-container">
				<div class="d-flex justify-content-center align-items-center flex-wrap">
					
					<!-- Info List -->
					<ul class="info-list">
						<li>
							<a href="tel:+917869818226">
								<span class="icon fa-solid fa-phone fa-fw"></span> +91 78698 18226
							</a>
						</li>
						<li>
							<a href="mailto:vyntrixsolutions@gmail.com">
								<span class="icon fa-solid fa-envelope fa-fw"></span> vyntrixsolutions@gmail.com
							</a>
						</li>
						<li>
							<a href="https://www.google.com/maps?q=380+Satya+Sai+Indore+Madhya+Pradesh" target="_blank">
								<span class="icon fa-solid fa-map fa-fw"></span> 380 Satya Sai, Indore, Madhya Pradesh
							</a>
						</li>
					</ul>

					
					<!-- Social Box -->
					<ul class="header-social_box">
						<li><a href="https://www.facebook.com/" class="fa-brands fa-twitter fa-fw"></a></li>
						<li><a href="https://www.linkedin.com/company/vyntrix-solutions/" class="fa-brands fa-linkedin fa-fw"></a></li>
						<li><a href="https://www.instagram.com/vyntrix_solutions?igsh=MWowN3FkNDJ5YjlsZA==" class="fa-solid fa-instagram fa-fw"></a></li>
					</ul>
					
				</div>
			</div>
		</div>
		<!-- End Header Top -->
		
		<!-- Header Upper -->
        <div class="header-upper">
            <div class="auto-container">
				<div class="inner-container d-flex">
					<!-- Logo Box -->
					<div class="logo"><a href="<?php the_permalink(7); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="" title=""></a></div>
					
					<!-- Upper Right -->
					<div class="upper-right">
						<div class="nav-outer d-flex justify-content-between align-items-center flex-wrap">
						
							<!-- Main Menu -->
							<nav class="main-menu show navbar-expand-md">
								<div class="navbar-header">
									<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
								
								<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
									<ul class="navigation clearfix">
										<li class="<?php echo (get_the_ID() == 7) ? 'current' : ''; ?>">
											<a href="<?php echo get_permalink(7); ?>">Home</a>
										</li>
										<li class="<?php echo (get_the_ID() == 9) ? 'current' : ''; ?>">
											<a href="<?php echo get_permalink(9); ?>">About Us</a>
										</li>
										<li class="<?php echo (get_the_ID() == 11) ? 'current' : ''; ?>">
											<a href="<?php echo get_permalink(11); ?>">Services</a>
										</li>
										<li>
											<a href="https://vyntrix-solutions.github.io/portfolio/" target="_blank">Portfolio</a>
										</li>
										<li class="<?php echo (get_the_ID() == 13) ? 'current' : ''; ?>">
											<a href="<?php echo get_permalink(13); ?>">Blog</a>
										</li>
										<li class="<?php echo (get_the_ID() == 15) ? 'current' : ''; ?>">
											<a href="<?php echo get_permalink(15); ?>">Contact</a>
										</li>
									</ul>
								</div>

							</nav>
							<!-- Main Menu End-->
							
							<div class="outer-box d-flex align-items-center">
								
								<!-- Search Box -->
								<div class="search-box">
									<form method="post" action="#">
										<div class="form-group">
											<input type="search" name="search-field" value="" placeholder="Search..." required>
											<button type="submit"><span class="icon fa fa-search"></span></button>
										</div>
									</form>
								</div>
								
								<!-- Language -->
								<div class="language dropdown">
									<button class="btn dropdown-toggle" type="button" id="dropdownMenu1" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-globe fa-fw"></i>English &nbsp;<span class="fa fa-angle-down"></span></button>
									<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
										<li><a href="#">English Branch</a></li>
										<li><a href="#">German Branch</a></li>
										<li><a href="#">UAE Branch</a></li>
										<li><a href="#">Qatar Branch</a></li>
									</ul>
								</div>
								
								<div class="button-box">
									<a class="btn-style-three theme-btn btn-item" href="#">
										<div class="btn-wrap">
											<span class="text-one">Get a quote now <i class="fa-solid fa-arrow-right fa-fw"></i></span>
											<span class="text-two">Get a quote now <i class="fa-solid fa-arrow-right fa-fw"></i></span>
										</div>
									</a>
								</div>
								
								<!-- Mobile Navigation Toggler -->
								<div class="mobile-nav-toggler"><span class="icon fa-solid fa-bars fa-fw"></span></div>
								
							</div>
							
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
        <!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="auto-container">
				<div class="d-flex justify-content-between align-items-center">
					<!-- Logo -->
					<div class="logo">
						<a href="<?php the_permalink(7); ?>" title=""><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="" title=""></a>
					</div>
					
					<!-- Right Col -->
					<div class="right-box d-flex align-items-center flex-wrap">
						<!-- Main Menu -->
						<nav class="main-menu">
							<!--Keep This Empty / Menu will come through Javascript-->
						</nav>
						<!-- Main Menu End-->
						
						<div class="outer-box d-flex align-items-center">
								
							<!-- Search Box -->
							<div class="search-box">
								<form method="post" action="#">
									<div class="form-group">
										<input type="search" name="search-field" value="" placeholder="Search..." required>
										<button type="submit"><span class="icon fa fa-search"></span></button>
									</div>
								</form>
							</div>
							
							<!-- Language -->
							<div class="language dropdown">
								<button class="btn dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-globe fa-fw"></i>English &nbsp;<span class="fa fa-angle-down"></span></button>
								<ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
									<li><a href="#">English Branch</a></li>
									<li><a href="#">German Branch</a></li>
									<li><a href="#">UAE Branch</a></li>
									<li><a href="#">Qatar Branch</a></li>
								</ul>
							</div>
							
							<div class="button-box">
								<a class="btn-style-three theme-btn btn-item" href="#">
									<div class="btn-wrap">
										<span class="text-one">Get a quote now <i class="fa-solid fa-arrow-right fa-fw"></i></span>
										<span class="text-two">Get a quote now <i class="fa-solid fa-arrow-right fa-fw"></i></span>
									</div>
								</a>
							</div>
							
							<!-- Mobile Navigation Toggler -->
							<div class="mobile-nav-toggler"><span class="icon fa-solid fa-bars fa-fw"></span></div>
							
						</div>
						
					</div>
					
				</div>
            </div>
        </div>
		<!-- End Sticky Menu -->
        
		<!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-020-x-mark"></span></div>
            <nav class="menu-box">
                <div class="nav-logo"><a href="<?php echo get_permalink(7); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="" title=""></a></div>
				<!-- Search -->
				
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            </nav>
        </div>
		<!-- End Mobile Menu -->
	
    </header>
    <!-- End Main Header -->