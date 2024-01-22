<footer class="xs_pt_80">
<div class="container">
    <!-- <div class="row pb_55">
        <div class="col-lg-4 col-sm-12">
            <div class="footer_contact">
                <h4>E-Mail Us</h4>
                <p>
                    <a href="mailto:support@yourmail.com">support@yourmail.com</a>
                </p>
            </div>
        </div>
        <div class="col-lg-4 col-sm-12">
            <div class="footer_contact">
                <h4>Call Us</h4>
                <p>
                    <a href="callto:+125656800065">+1256- 568-00065</a>
                </p>
            </div>
        </div>
        <div class="col-lg-4 col-sm-12">
            <div class="footer_contact contact_with">
                <h4>Contact With</h4>
                <ul>
                    <li>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div> -->
    <div class="footer_body pt_75 pb_75 xs_pt_50 xs_pb_50">
        <div class="row justify-content-between">
            <div class="col-xl-3 col-lg-3 col-md-6">
                <div class="footer_content">
                    <?php dynamic_sidebar( 'footer_1' ) ?>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-sm-6 col-md-6 xs_mb_50">
                <div class="footer_content">
                    <?php dynamic_sidebar( 'footer_2' ) ?>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-sm-6 col-md-6 xs_mb_50">
                <div class="footer_content">
                    <?php dynamic_sidebar( 'footer_3' ) ?>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 xs_mb_30">
                <div class="footer_content">
                    <?php dynamic_sidebar( 'footer_4' ) ?>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_bottom pt_45 pb_45  xs_pb_25">
        <div class="row ">
            <div class="col-12">
                <div class="copy text-center">
                    <?php
                    $copyright = get_field('copyright_text', 'options');
                    if ($copyright){
                        ?>
                            <p><?php echo $copyright; ?></p>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
</footer>


<div class="scroll_btn">
<i class="fas fa-chevron-up"></i>
</div>


<?php wp_footer(); ?>
</body>
</html>