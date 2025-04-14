<?php
    //Template Name: blog
    get_header();
?>

	<!-- Page Title -->
    <section class="page-title" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/background/7.jpg)">
        <div class="auto-container">
			<h2>Our Blog</h2>
			<ul class="bread-crumb clearfix">
				<li><a href="index-2.html">Home</a></li>
				<li>Our Blog</li>
			</ul>
        </div>
    </section>
    <!-- End Page Title -->
	
	<section class="news-page">
        <div class="auto-container">
            <div class="row clearfix">
                <?php
                $args = array(
                    'post_type'      => 'post',
                    'posts_per_page' => 6, // Adjust how many posts you want to display
                );
                $query = new WP_Query($args);

                if ($query->have_posts()):
                    while ($query->have_posts()): $query->the_post();
                ?>
                        <div class="news-block_one col-xl-4 col-lg-6 col-md-6 col-sm-12">
                            <div class="news-block_one-inner">
                                <div class="news-block_one-image">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php if (has_post_thumbnail()): ?>
                                            <?php the_post_thumbnail('medium'); ?>
                                        <?php else: ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/resource/news-default.jpg" alt="">
                                        <?php endif; ?>
                                    </a>
                                </div>
                                <div class="news-block_one-content">
                                    <ul class="news-block_one-info">
                                        <li><span class="news-block_one-icon fa fa-calendar fa-fw"></span><?php echo get_the_date(); ?></li>
                                        <li><span class="news-block_one-icon fa fa-user fa-fw"></span><?php the_author(); ?></li>
                                    </ul>
                                    <h5 class="news-one_heading">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h5>
                                    <div class="news-one_text"><?php echo wp_trim_words(get_the_excerpt(), 15); ?></div>
                                    <!-- Button Box -->
                                    <div class="news-one_button-box text-center">
                                        <a class="theme-btn news-one_load-btn" href="<?php the_permalink(); ?>">
                                            Read More
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                else:
                    echo '<p>No news found.</p>';
                endif;
                ?>
            </div>
        </div>
    </section>


<?php
    get_footer();
?>
