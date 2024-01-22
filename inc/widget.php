<?php
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
*/
function wolf_it_widget_register(){

	// Footer Sidebar 01
	register_sidebar( array(
        'name' => esc_html__('Footer-01', 'wolf_it'),
        'id'   => 'footer_1',
		'description'    => esc_html__( 'Add widgets here.', 'wolf_it' ),
		'class'          => '',
		'before_widget'  => '<section id="%1$s" class="widget %2$s">',
		'after_widget'   => "</section>\n",
		'before_title'   => '<h3 class="title text-white">',
		'after_title'    => "</h3>\n",
		'before_sidebar' => '',
		'after_sidebar'  => '',
		'show_in_rest'   => false,
    ) );


	// Footer Sidebar 02
	register_sidebar( array(
		'name' => esc_html__('Footer-02', 'wolf_it'),
		'id'   => 'footer_2',
		'description'    => esc_html__( 'Add widgets here.', 'wolf_it' ),
		'class'          => '',
		'before_widget'  => '<section id="%1$s" class="widget %2$s">',
		'after_widget'   => "</section>\n",
		'before_title'   => '<h3 class="title text-white">',
		'after_title'    => "</h3>\n",
		'before_sidebar' => '',
		'after_sidebar'  => '',
		'show_in_rest'   => false,
	) );

	// Footer Sidebar 03
	register_sidebar( array(
		'name' => esc_html__('Footer-03', 'wolf_it'),
		'id'   => 'footer_3',
		'description'    => esc_html__( 'Add widgets here.', 'wolf_it' ),
		'class'          => '',
		'before_widget'  => '<section id="%1$s" class="widget %2$s">',
		'after_widget'   => "</section>\n",
		'before_title'   => '<h3 class="title text-white">',
		'after_title'    => "</h3>\n",
		'before_sidebar' => '',
		'after_sidebar'  => '',
		'show_in_rest'   => false,
	) );

	// Footer Sidebar 04
	register_sidebar( array(
		'name' => esc_html__('Footer-04', 'wolf_it'),
		'id'   => 'footer_4',
		'description'    => esc_html__( 'Add widgets here.', 'wolf_it' ),
		'class'          => '',
		'before_widget'  => '<section id="%1$s" class="widget %2$s">',
		'after_widget'   => "</section>\n",
		'before_title'   => '<h3 class="title text-white">',
		'after_title'    => "</h3>\n",
		'before_sidebar' => '',
		'after_sidebar'  => '',
		'show_in_rest'   => false,
	) );


	// Blog Sidebar
    register_sidebar( array(
        'name' => esc_html__('Blog Sidebar', 'wolf_it'),
        'id'   => 'sidebar-1',
		'description'    => esc_html__( 'Add widgets here.', 'wolf_it' ),
		'class'          => '',
		'before_widget'  => '<section id="%1$s" class="sidebar mb_60 %2$s">',
		'after_widget'   => "</section>\n",
		'before_title'   => '<h3 class="title">',
		'after_title'    => "</h3>\n",
		'before_sidebar' => '',
		'after_sidebar'  => '',
		'show_in_rest'   => false,
    ) );

}
add_action( 'widgets_init', 'wolf_it_widget_register' );


class wolf_it_Latest_Post_Widget extends WP_Widget {

    // Constructor
    public function __construct() {
        parent::__construct(
            'wolf_it_latest_post_widget',
            'Custom Latest Post',
            array( 'description' => 'A custom widget to display the latest posts with a user-defined limit and title.' )
        );
    }
    
    // Widget form creation
    public function form( $instance ) {
        $post_limit = isset( $instance['post_limit'] ) ? esc_attr( $instance['post_limit'] ) : 5;
        $title = isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : 'Latest Posts';
    
        ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>">Title:</label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $title; ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'post_limit' ); ?>">Post Limit:</label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'post_limit' ); ?>" name="<?php echo $this->get_field_name( 'post_limit' ); ?>" type="number" value="<?php echo $post_limit; ?>" />
        </p>
        <?php
    }
    
    // Widget update
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( !empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : 'Latest Posts';
        $instance['post_limit'] = ( !empty( $new_instance['post_limit'] ) ) ? sanitize_text_field( $new_instance['post_limit'] ) : 5;
    
        return $instance;
    }
    
    // Widget display
    public function widget( $args, $instance ) {
        $post_limit = isset( $instance['post_limit'] ) ? intval( $instance['post_limit'] ) : 5;
        $title = isset( $instance['title'] ) ? apply_filters( 'widget_title', $instance['title'] ) : 'Latest Posts';
    
        // Query latest posts
        $latest_posts = new WP_Query( array(
            'post_type'      => 'post',
            'posts_per_page' => $post_limit,
        ) );
    
        // Display widget content
        if ( $latest_posts->have_posts() ) {
            echo $args['before_widget'];
            echo $args['before_title'] . $title . $args['after_title'];
            while ( $latest_posts->have_posts() ) {
                $latest_posts->the_post();
               ?>
               <div class="sidebar_post">
               <ul>
                <li>
                    <div class="img">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="img-fluid w-100">
                    </div>
                    <div class="text">
                        <p><i class="fal fa-calendar-alt" aria-hidden="true"></i><?php echo get_the_date(); ?></p>
                        <a href="blog_details.html"><?php the_title(); ?></a>
                    </div>
                </li>
                </ul>
                </div>
               <?php
            }
            echo $args['after_widget'];
            wp_reset_postdata();
        }
    }
    }
    
    
    function register_wolf_it_custom_latest_post_widget() {
    register_widget( 'wolf_it_Latest_Post_Widget' );
    }
    add_action( 'widgets_init', 'register_wolf_it_custom_latest_post_widget' );



// About Widet
class wolf_it_About_Image_Widget extends WP_Widget {

    // Constructor
    public function __construct() {
        parent::__construct(
            'custom_image_widget',
            'Custom About Widget',
            array( 'description' => 'A custom widget with image upload, title, and text fields.' )
        );
    }

    // Widget form creation
    public function form( $instance ) {
        $title = isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : '';
        $text = isset( $instance['text'] ) ? esc_textarea( $instance['text'] ) : '';
        $image_url = isset( $instance['image_url'] ) ? esc_url( $instance['image_url'] ) : '';

        ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>">Title:</label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $title; ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'text' ); ?>">Text:</label>
            <textarea class="widefat" id="<?php echo $this->get_field_id( 'text' ); ?>" name="<?php echo $this->get_field_name( 'text' ); ?>" rows="5"><?php echo $text; ?></textarea>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'image_url' ); ?>">Image URL:</label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'image_url' ); ?>" name="<?php echo $this->get_field_name( 'image_url' ); ?>" type="text" value="<?php echo $image_url; ?>" />
            <input class="button widefat" type="button" value="Upload Image" onclick="uploadImage(this);" />
            <script>
                function uploadImage(button) {
                    var customUploader = wp.media({
                        title: 'Choose Image',
                        button: {
                            text: 'Choose Image'
                        },
                        multiple: false
                    });

                    customUploader.on('select', function () {
                        var attachment = customUploader.state().get('selection').first().toJSON();
                        jQuery(button).prev().val(attachment.url);
                    });

                    customUploader.open();
                }
            </script>
        </p>
        <?php
    }

    // Widget update
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( !empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : '';
        $instance['text'] = ( !empty( $new_instance['text'] ) ) ? sanitize_textarea_field( $new_instance['text'] ) : '';
        $instance['image_url'] = ( !empty( $new_instance['image_url'] ) ) ? esc_url_raw( $new_instance['image_url'] ) : '';

        return $instance;
    }

    // Widget display
    public function widget( $args, $instance ) {
        $title = isset( $instance['title'] ) ? apply_filters( 'widget_title', $instance['title'] ) : '';
        $text = isset( $instance['text'] ) ? wpautop( $instance['text'] ) : '';
        $image_url = isset( $instance['image_url'] ) ? esc_url( $instance['image_url'] ) : '';

        echo $args['before_widget'];
        if ( !empty( $title ) ) {
            echo $args['before_title'] . $title . $args['after_title'];
        }
        if ( !empty( $image_url ) ) {
            echo '<img src="' . $image_url . '" alt="' . $title . '" />';
        }
        echo '<div class="widget-text text-white">' . $text . '</div>';
        echo $args['after_widget'];
    }
}

// Register the widget
function register_custom_about_image_widget() {
    register_widget( 'wolf_it_About_Image_Widget' );
}
add_action( 'widgets_init', 'register_custom_about_image_widget' );


