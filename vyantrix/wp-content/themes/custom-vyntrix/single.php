<?php
    get_header();
?>

<?php 
$bg_image = get_the_post_thumbnail_url(get_the_ID(), 'full'); 
?>

<section class="page-title" style="background-image:url('<?php echo esc_url($bg_image); ?>')">
    <div class="auto-container">
        <h2><?php the_title(); ?></h2>
        <ul class="bread-crumb clearfix">
            <li><a href="<?php echo home_url(); ?>">Home</a></li>
            <li><?php the_title(); ?></li>
        </ul>
    </div>
</section>


<!-- Sidebar Page Container -->
<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix">

            <!--Content Side-->
            <div class="content-side col-xl-9 col-lg-8 col-md-12 col-sm-12">
                <div class="blog-single">
                    <div class="inner-box">
                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <div class="image">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('full'); ?>
                                <?php endif; ?>
                            </div>

                            <div class="lower-content">
                                <ul class="post-meta">
                                    <li><span class="icon fa-solid fa-clock fa-fw"></span><?php echo get_the_date(); ?></li>
                                    <li><span class="icon fa-solid fa-user fa-fw"></span>by <strong><?php the_author(); ?></strong></li>
                                    <li><span class="icon fa-solid fa-tag fa-fw"></span><?php the_category(', '); ?></li>
                                </ul>

                                <?php the_content(); ?>

                                <div class="post-share-options">
                                    <div class="post-share-inner d-flex justify-content-between flex-wrap">
                                        <div class="post-tags">
                                            <span>Tags: </span><?php the_tags('', ' ', ''); ?>
                                        </div>
                                        <ul class="social-links clearfix">
                                            <li><a href="#" class="fa-brands fa-facebook-f fa-fw"></a></li>
                                            <li><a href="#" class="fa-brands fa-twitter fa-fw"></a></li>
                                            <li><a href="#" class="fa-brands fa-linkedin fa-fw"></a></li>
                                            <li><a href="#" class="fa-brands fa-dribbble fa-fw"></a></li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Comment Section -->
                                <?php comments_template(); ?>
                            </div>
                        <?php endwhile; endif; ?>
                    </div>
                </div>
            </div>

            <!--Sidebar Side-->
            <div class="sidebar-side col-xl-3 col-lg-4 col-md-12 col-sm-12">
                <aside class="sidebar sticky-top">

                    <!-- Search -->
                    <div class="sidebar-widget search-box">
                        <?php get_search_form(); ?>
                    </div>

                    <!-- Categories -->
                    <div class="sidebar-widget sidebar-blog-category">
                        <div class="sidebar-title">
                            <h4>Categories</h4>
                        </div>
                        <ul class="blog-cat">
                            <?php wp_list_categories(array(
                                'title_li' => '',
                                'show_count' => true
                            )); ?>
                        </ul>
                    </div>

                    <!-- Recent Posts -->
                    <div class="sidebar-widget popular-posts">
                        <div class="sidebar-title">
                            <h4>Recent News</h4>
                        </div>

                        <?php
                        $recent_posts = wp_get_recent_posts(array('numberposts' => 3));
                        foreach ($recent_posts as $post) : ?>
                            <article class="post">
                                <figure class="post-thumb">
                                    <a href="<?php echo get_permalink($post['ID']); ?>">
                                        <?php echo get_the_post_thumbnail($post['ID'], 'thumbnail'); ?>
                                    </a>
                                </figure>
                                <div class="text">
                                    <a href="<?php echo get_permalink($post['ID']); ?>"><?php echo $post['post_title']; ?></a>
                                </div>
                                <div class="post-info"><?php echo get_the_date('', $post['ID']); ?></div>
                            </article>
                        <?php endforeach; ?>
                    </div>

                    <!-- Archives -->
                    <div class="sidebar-widget sidebar-blog-category">
                        <div class="sidebar-title">
                            <h4>Archive</h4>
                        </div>
                        <ul class="blog-cat">
                            <?php wp_get_archives(array('type' => 'monthly')); ?>
                        </ul>
                    </div>

                </aside>
            </div>

        </div>
    </div>
</div>

<?php
    get_footer();
?>