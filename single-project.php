<?php get_header(); ?>


<section class="breadcrumb_area" style="background: url(<?php $page_header = get_field('page_header_image', 'options'); echo $page_header['url']; ?>);">
        <div class="breadcrumb_overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb_text">
                            <h1><?php the_title(); ?></h1>
                            <ul>
                                <li><a href="<?php echo get_home_url();?>">Home</a></li>
                                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============================
        BREADCRUMB END
    =============================-->


    <!--==============================
        PROJECTS DETAILS START
    ===============================-->
    <section class="projects_details pt_120 xs_pt_80 pb_110 xs_pb_70">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 wow fadeInLeft" data-wow-duration="1s">
                    <div class="projects_details_contect">
                        <div class="projects_details_img">
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="img-fluid w-100">
                        </div>
                        <div class="projects_details_text">
                            <h2><?php the_title(); ?></h2>
                                <?php the_content(); ?>
                        </div>
                        <ul class="details_next_preview">
                        <?php
                            // Get the current post ID
                            $current_post_id = get_the_ID();

                            // Get the next post
                            $next_post = get_adjacent_post(false, '', false);

                            // Get the previous post
                            $prev_post = get_adjacent_post(false, '', true);

                            // Check if there is a next post
                            if ($next_post) {
                                ?>
                                    <li><a href="<?php echo get_permalink($next_post->ID); ?>"><span><i class="fas fa-chevron-left"></i></span>Previous Project</a></li>
                                <?php
                            }

                            // Check if there is a previous post
                            if ($prev_post) {
                                ?>
                                    <li><a href="<?php echo get_permalink($prev_post->ID); ?>">Previous Project<span><i class="fas fa-chevron-right"></i></span></a></li>
                                <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInRight" data-wow-duration="1s">
                    <div id="sticky_sidebar" class="sidebar">
                        <div class="sidebar_project_info">
                            <h2>Project Information</h2>
                            <ul class="list">
   
                                                    <?php 
                        $project_information = get_field('project_information');
                        if ($project_information){
                            foreach ($project_information as $project_info){
                                ?>    
                                <li>
                                <li><span><?php echo $project_info ['project_title']; ?> :</span> <?php echo $project_info ['project_descrption']; ?></li>
                                </li>
                                <?php
                            }}
                        ?>
                            </ul>
                    
                            <ul class="blog_details_share d-flex flex-wrap">
                            <p>Share Now :</p>
                                <?php if (function_exists('display_custom_social_share')) : ?>
                                    <?php display_custom_social_share(); ?>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
        PROJECTS DETAILS END
    ===============================-->
    

    <!--==============================
        RELATED PROJECTS START
    ===============================-->
    <section class="projects related_project pb_110 xs_pb_70">
        <div class="container">
            <h2>Related Projects</h2>
            <div class="row team_slider">
            <?php
                // Get the current post ID
                $current_post_id = get_the_ID();

                // Get the current post categories
                $post_categories = wp_get_post_categories($current_post_id);

                // Setup the custom query
                $args = array(
                    'post_type'      => 'project', // Adjust to your custom post type if needed
                    'posts_per_page' => -1,      // Number of related posts to display
                    'post__not_in'   => array($current_post_id), // Exclude the current post
                    'category__in'   => $post_categories, // Query posts in the same category
                    'orderby'        => 'rand',  // Order by random to get diverse results
                );

                $related_posts_query = new WP_Query($args);

                // Check if there are related posts
                if ($related_posts_query->have_posts()) {
                    while ($related_posts_query->have_posts()) : $related_posts_query->the_post(); 
                    ?>
                        <div class="col-lg-3 wow fadeInUp" data-wow-duration="1s">
                        <div class="project_item">
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="img-fluid w-100">
                            <div class="project_item_text">
                                <h3><?php the_title(); ?></h3>
                                <a href="<?php the_permalink(); ?>">Read More <i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                    <?php
                    // Restore original post data
                    wp_reset_postdata();
                }
                ?>
            </div>
        </div>
    </section>
    <!--==============================
        RELATED PROJECTS END
    ===============================-->


   <?php get_footer(); ?>