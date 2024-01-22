<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport"
    content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi" />
    <?php wp_head();?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-md-8 d-none d-md-block">
                    <ul class="header_info d-flex flex-wrap">
                        <li>
                            <?php 
                            $header_number = get_field('phone_number', 'options');
                            if($header_number){ 
                                ?><a href="tel:<?php echo $header_number; ?>"> <i class="fas fa-phone-alt"></i><?php echo $header_number; ?></a><?php
                            }
                            ?>
                        </li>
                        <li>
                            <?php 
                                $header_email = get_field('email', 'options');
                                if($header_email){ 
                                    ?><a href="mailto:<?php echo $header_email; ?>"> <i class="fas fa-phone-alt"></i><?php echo $header_email; ?></a><?php
                                }
                            ?>
                        </li>
                    </ul>
                </div>
                <div class="col-xl-4 col-md-4">
                  
                        <ul class="header_icon d-flex flex-wrap">
                        <?php 
                        $header_social = get_field('header_social','options');
                        if ($header_social){
                            foreach ($header_social as $social){
                                ?>    
                                <li>
                                <a href="<?php echo $social ['social_url']; ?>" target="_blank"><i class="<?php echo $social ['social_icons']; ?>"></i></a>
                                </li>
                                <?php
                            }}
                        ?>
                    </ul>
                        <?php
                    ?>
                </div>
            </div>
        </div>
    </header>

    <nav class="navbar navbar-expand-lg main_menu">
        <div class="container">
            <?php if(has_custom_logo( 'custom-logo' )){
                the_custom_logo();
                }else{
                ?>
                <a href="<?php echo get_home_url(); ?>" class="text-logo text-uppercase"><?php bloginfo(); ?></a>
            <?php
            } ?>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="far fa-bars menu_bar_icon"></i>
                <i class="far fa-times menu_close_icon"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'Primary_Menu',
                    'container' => '',
                    'menu_class' => 'nav navbar-nav m-auto',
                    'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                    'items_wrap' => '<ul id="%1$s" class=" %2$s">%3$s</ul>',
                    'depth' => 3,
                    'walker' => new bootstrap_5_wp_nav_menu_walker()
                ));
                ?>
                <ul class="right_menu d-flex flex-wrap">
                    <li>
                        <a class="cart_view" href="cart_view.html">
                        <i class="fas fa-shopping-cart"></i>
                            <b>2</b>
                        </a>
                    </li>
                    <li>
                        <span class="search_icon"><i class="fas fa-search"></i>
                        </span>
                    </li>
                    <li>    
                    <?php 
                        $header_button_text = get_field('button_text', 'options');
                        $header_button_url = get_field('button_url', 'options');
                        if($header_button_text){
                            ?>
                            <a href="<?php echo $header_button_url;?>"><?php echo $header_button_text;?></a>
                            <?php
                        }
                        ?> 
                </li>                      
                </ul>
            </div>
        </div>
    </nav>
    <div class="menu_search">
        <form role="search" method="get" action="<?php echo esc_url (home_url( '/' )) ?>">
            <input type="search" placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>" value="<?php the_search_query(); ?>" name="s">
            <button type="submit" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>"> Search</button>
            <span class="close_search"><i class="far fa-times"></i></span>
        </form>
    </div>