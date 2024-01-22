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

    <section class="blog_details pt_120 xs_pt_80 pb_120 xs_pb_80">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 wow fadeInLeft" data-wow-duration="1s">
                    <div class="blog_details_content">
                        <div class="blog_details_img">
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="img-fluid w-100">
                        </div>
                        <ul class="blog_det_header">
                            <?php global $post; $author_id = $post->post_author;?>
                            <li class="text-capitalize"><i class="far fa-user-circle"></i> By <?php echo get_the_author_meta( 'display_name', $author_id ); ?></li>
                            <li><i class="far fa-comment-alt-dots"></i><?php comments_number(); ?></li>
                            <li><i class="fal fa-calendar-alt"></i><?php echo get_the_date(); ?></li>
                        </ul>
                        <div class="blog_details_text">
                            <h2><?php the_title(); ?></h2>
                            <?php the_content(); ?>
                            </div>
                        <ul class="blog_details_share d-flex flex-wrap">
                            <li>Share This Blog :</li>
                            <?php if (function_exists('display_custom_social_share')) : ?>
                                <?php display_custom_social_share(); ?>
                            <?php endif; ?>
                        </ul>

                        <div class="comment_area mt_70">
                            <?php
                            //If comments are open or we have at least one comment, load up the comment template.
                                if ( comments_open() || get_comments_number() ) :
                                    comments_template();
                                endif;
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 wow fadeInRight" data-wow-duration="1s">
                    <div id="sticky_sidebar" class="sidebar">
                        <?php dynamic_sidebar('sidebar-1'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php get_footer(); ?>