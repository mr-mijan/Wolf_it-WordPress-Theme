<section class="breadcrumb_area" style="background: url(<?php $page_header = get_field('page_header_image', 'options'); echo $page_header['url']; ?>);">
        <div class="breadcrumb_overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb_text">
                            <h1><?php the_archive_title(); ?></h1>
                            <ul>
                                <li><a href="<?php echo get_home_url();?>"><?php echo esc_html('Home'); ?></a></li>
                                <li><a href=""><?php echo str_replace("Archives: ", "", get_the_archive_title()); ?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>