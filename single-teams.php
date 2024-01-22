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


    <!--==============================
        TEAM DETAILS START
    ===============================-->
    <section class="team_details pt_120 xs_pt_80 pb_100 xs_pb_60">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 wow fadeInLeft" data-wow-duration="1s">
                    <div class="team_detils_img">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="img-fluid w-100">
                    </div>
                </div>
                <div class="col-lg-7 wow fadeInRight" data-wow-duration="1s">
                    <div class="team_detils_text">
                        <h2><?php the_title(); ?></h2>
                        <h6><?php the_field('team_subtitle') ?></h6>
                        <?php the_content(); ?>
                        <span>Follow Me</span>
                        <ul class="d-flex flex-wrap">
                        <?php 
                        $team_social = get_field('team_social');
                        if ($team_social){
                            foreach ($team_social as $social){
                                ?>    
                                <li>
                                <a href="<?php echo $social ['team_social_url']; ?>" target="_blank"><i class="<?php echo $social ['team_social_icon']; ?>" aria-hidden="true"></i></a>
                                </li>
                                <?php
                            }}
                        ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
        TEAM DETAILS END
    ===============================-->


    <!--============================
        RELATED TEAM START
    =============================-->
    <section class="related_team pt_115 xs_pt_75 pb_110 xs_pb_70">
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    <div class="section_heading pb_20">
                        <h3>Our Team</h3>
                        <h2>Others Team Member</h2>
                    </div>
                </div>
            </div>
            <div class="row team_slider">
            <?php
            // The Query
            $args = array(
                'post_type'      => 'teams', // Replace with your custom post type
                'posts_per_page' => 5,          // Number of posts to display
                'orderby'        => 'date',     // Order by date
                'order'          => 'DESC',     // Sort in descending order
            );

            $query = new WP_Query($args);

            // The Loop
            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();

                    // Your loop content here
                    ?>
                         <div class="col-xl-3 wow fadeInUp" data-wow-duration="1s">
                    <div class="single_team">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="img-fluid w-100">
                        <div class="text">
                            <a href="team_details.html"><?php the_title(); ?></a>
                            <p><?php the_field('team_subtitle') ?></p>
                        </div>
                        <ul>
                        <?php 
                        $team_social = get_field('team_social');
                        if ($team_social){
                            foreach ($team_social as $social){
                                ?>    
                                <li>
                                <a href="<?php echo $social ['team_social_url']; ?>" target="_blank"><i class="<?php echo $social ['team_social_icon']; ?>" aria-hidden="true"></i></a>
                                </li>
                                <?php
                            }}
                        ?>
                        </ul>
                    </div>
                </div>
                    <?php
                }

                // Restore original Post Data
                wp_reset_postdata();
            } else {
                // No posts found
                echo 'No projects found.';
            }
            ?>
            </div>
        </div>
    </section>
    <!--============================
        RELATED TEAM END
    =============================-->

<?php get_footer(); ?>