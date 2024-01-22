<?php get_header(); ?>

<!-- Breadcrumb -->
<section class="breadcrumb_area" style="background: url(<?php $page_header = get_field('page_header_image', 'options'); echo $page_header['url']; ?>);">
        <div class="breadcrumb_overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb_text">
                            <h1>Search resultats for : <?php echo get_search_query()?></h1>
                            <ul>
                                <li><a href="<?php echo get_home_url();?>"><?php echo esc_html('Home'); ?></a></li>
                                <li class="text-white"><?php $allsearch = new WP_Query("s=$s&showposts=-1"); $key = esc_html($s, 1); $count = $allsearch->post_count; echo $count . ' - '; wp_reset_query(); ?> Articles were found for keyword  <strong> <?php echo get_search_query()?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- Blog Template -->
<?php get_template_part( 'template_parts/content'); ?>

<?php get_footer(); ?>