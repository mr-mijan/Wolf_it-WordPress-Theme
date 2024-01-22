<section class="blog_page pt_95 xs_pt_55 pb_120 xs_pb_80">
        <div class="container">
            <div class="row">
                <?php 
                    if ( have_posts() ) :
                    while ( have_posts() ) : the_post();
                ?>
                <div class="col-xl-4 col-md-6 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                    <div class="single_blog">
                        <div class="single_blog_img">
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="img-fluid w-100">
                            <?php the_category(); ?>
                        </div>
                        <div class="single_blog_text">
                            <ul>
                                <li class="text-capitalize"><i class="far fa-user-circle "></i> By <?php the_author(); ?></li>
                                <li><i class="fal fa-calendar-alt"></i><?php echo get_the_date(); ?></li>
                            </ul>
                            <a class="title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            <p><?php the_excerpt(); ?></p>
                            <a class="more_btn" href="<?php the_permalink(); ?>">Read More<i class="far fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <?php endwhile; else: _e('No post found');
                    endif; 
                ?>
            </div>
            <div class="pagination_area mt_60">
                <div class="row">
                    <div class="col-12">
                        <nav>
                            <ul class="pagination">
                                <?php the_posts_pagination( array(
                                    'mid_size'  => 2,
                                    'prev_text' => __( '<i class="fas fa-chevron-double-left"></i>', 'kaliar' ),
                                    'next_text' => __( '<i class="fas fa-chevron-double-right"></i>', 'kaliar' ),
                                ) ); ?>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>