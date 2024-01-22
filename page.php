<?php get_header(); ?>

<section class="breadcrumb_area" style="background: url(<?php $page_header = get_field('page_header_image', 'options'); echo $page_header['url']; ?>);">
        <div class="breadcrumb_overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb_text">
                            <h1><?php the_title(); ?></h1>
                            <ul>
                                <li><a href="<?php echo get_home_url();?>"><?php echo esc_html('Home'); ?></a></li>
                                <li><a href=""><?php the_title(); ?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Content -->
    <section class="contact mt_120 xs_mt_80 mb_120 xs_mb_80">
            <?php the_content(); ?>
    </section>

<?php get_footer() ;?>