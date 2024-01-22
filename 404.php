<?php get_header(); ?>

    <section class="breadcrumb_area" style="background: url(<?php $page_header = get_field('page_header_image', 'options'); echo $page_header['url']; ?>);">
        <div class="breadcrumb_overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb_text">
                            <h1>Error/404</h1>
                            <ul>
                                <li><a href="<?php echo get_home_url(); ?>">Home</a></li>
                                <li><a href="">Error</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="error_page pt_65 xs_pt_55 pb_115 xs_pb_75">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-8 m-auto wow fadeInUp" data-wow-duration="1s">
                    <div class="error_text">
                        <h2>404</h2>
                        <h4>Oops! Page Not Found!</h4>
                        <p>The page you are looking for does not exist. It might have been moved or deleted.</p>
                        <a class="common_btn" href="<?php echo get_home_url(); ?>">Back To Home</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php get_footer(); ?>