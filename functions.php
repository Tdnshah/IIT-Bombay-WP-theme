<?php
require_once(get_template_directory().'/our-team-cpt/team-profile.php' );
// require_once( get_template_directory() . '/inc/customizer/customizer.php' );
require_once(get_template_directory() . '/inc/blogroll-widget.php');
require_once(get_template_directory() . '/inc/Herosection_Widget.php');

/* scripts and stylesheets loader*/
function iitb_theme_resource_loading(){
    wp_enqueue_script('jquery331',get_template_directory_uri() .'/assets/jquery/jquery-3.3.1.min.js');
    wp_enqueue_style('bootstrapcss',get_template_directory_uri() .'/assets/bootstrap/css/bootstrap.min.css');
    wp_enqueue_script('bootstrapjs',get_template_directory_uri() .'/assets/bootstrap/js/bootstrap.min.js');
    wp_enqueue_script('scriptjs',get_template_directory_uri() .'/script.js');
    wp_enqueue_style('style',get_stylesheet_uri() );
    wp_enqueue_style( 'team-template', get_template_directory_uri()  . '/our-team-cpt/team.css' );
}
add_action( 'wp_enqueue_scripts', 'iitb_theme_resource_loading');
/************ adding featured image support *******/

add_theme_support('post-thumbnails');

/* Customiser Institute Settings functions */
function iitb_theme_institute_settings($wp_customize){
    $wp_customize->add_section( 'iitb_theme_institute_section' , array(
        'title'       => __( 'Institute Settings', 'iitb_theme' ),
        'priority'    => 30,
        'description' => 'Institute Details Settings',
    ) );
    $wp_customize->add_setting( 'iitb_theme_institute_setting', array(
        'capability' => 'edit_theme_options',
        'default' => 'Enter Your Institutes Name Here',
        'sanitize_callback' => 'sanitize_text_field',
      ) );
    $wp_customize->add_control('iitb_theme_institute_setting', array(
        'label'   => 'Institute Name',
        'section' => 'iitb_theme_institute_section',
        'type'    => 'text',
   ) ) ;
};
add_action( 'customize_register', 'iitb_theme_institute_settings' );

/* Customiser Front Page Section functions */
function iitb_theme_frontpage_settings($wp_customize){
    $wp_customize->add_section( 'iitb_theme_frontpage_section' , array(
        'title'       => __( 'Front Page Setting', 'iitb_theme' ),
        'priority'    => 30,
        'description' => 'Here You can enable or disable mulitiple feature of the home page like slider, home page title',
    ) );
    $wp_customize->add_setting( 'iitb_theme_frontpage_slider_activation_setting', array(
        'capability' => 'edit_theme_options',
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
      ) );
    $wp_customize->add_control('iitb_theme_frontpage_slider_activation_setting', array(
        'label'   => 'Slider Enable',
        'section' => 'iitb_theme_frontpage_section',
        'type'    => 'checkbox',
   ) ) ;

   $wp_customize->add_setting( 'iitb_theme_frontpage_Title_setting', array(
    'capability' => 'edit_theme_options',
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control('iitb_theme_frontpage_Title_setting', array(
    'label'   => 'Title Enable',
    'section' => 'iitb_theme_frontpage_section',
    'type'    => 'checkbox',
) ) ;
};
add_action( 'customize_register', 'iitb_theme_frontpage_settings' );


/* Customiser Logo Uploader functions */
function iitb_theme_primary_logo_uploader($wp_customize){
    $wp_customize->add_section( 'iitb_theme_logo_section' , array(
        'title'       => __( 'Logo', 'iitb_theme' ),
        'priority'    => 30,
        'description' => 'Upload a logo to replace the default site name and description in the header',
    ) );
    $wp_customize->add_setting( 'iitb_theme_primary_logo' );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'iitb_theme_logo', array(
        'label'    => __( 'Primary Logo', 'iitb_theme' ),
        'section'  => 'iitb_theme_logo_section',
        'settings' => 'iitb_theme_primary_logo',
   ) ) );
};
add_action( 'customize_register', 'iitb_theme_primary_logo_uploader' );



function iitb_theme_secondary_logo_uploader($wp_customize){
    
    $wp_customize->add_setting( 'iitb_theme_secondary_logo' );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'iitb_theme_secondary_logo', array(
        'label'    => __( 'Seondary Logo', 'iitb_theme' ),
        'section'  => 'iitb_theme_logo_section',
        'settings' => 'iitb_theme_secondary_logo',
   ) ) );
};
add_action( 'customize_register', 'iitb_theme_secondary_logo_uploader' );

/********************************** Registreing Wordpress Primary & secondary Menu ***************************/

add_action( 'after_setup_theme', 'wpt_setup' );
    if ( ! function_exists( 'wpt_setup' ) ):
        function wpt_setup() {  
            register_nav_menu( 'primary', __( 'Primary navigation', 'iitb_theme' ) );
            register_nav_menu( 'topnav', __('Top Navigation','iitb_theme' ));
        } endif;


/********************************** Registreing Widget sections for front-page ***************************/
if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'Events',
    'id'            => 'events',
    'before_widget' => '<div class = "events-Widgets">',
    'after_widget' => '</div>',
    'before_title' => '<div class="headingdeco"><h5>',
    'after_title' => '</h5></div>',
  )
);
register_sidebar(array(
    'name' => 'Announcement',
    'id'            => 'announcements',
    'before_widget' => '<div class = "announcements-Widgets">',
    'after_widget' => '</div>',
    'before_title' => '<div class="headingdeco"><h5>',
    'after_title' => '</h5></div>',
  )
);

register_sidebar(array(
    'name' => 'Footer 1',
    'id'            => 'footer1',
    'before_widget' => '<div class = "footer1-Widgets">',
    'after_widget' => '</div>',
    'before_title' => '<div class="headingdeco"><h5>',
    'after_title' => '</h5></div>',
  )
);

register_sidebar(array(
    'name' => 'Footer 2',
    'id'            => 'footer2',
    'before_widget' => '<div class = "footer2-Widgets">',
    'after_widget' => '</div>',
    'before_title' => '<div class="headingdeco"><h5>',
    'after_title' => '</h5></div>',
  )
);

register_sidebar(array(
    'name' => 'Footer 3',
    'id'            => 'footer3',
    'before_widget' => '<div class = "footer3-Widgets">',
    'after_widget' => '</div>',
    'before_title' => '<div class="headingdeco"><h5>',
    'after_title' => '</h5></div>',
  )
);

register_sidebar(array(
    'name' => 'Footer 4',
    'id'            => 'footer4',
    'before_widget' => '<div class = "footer4-Widgets">',
    'after_widget' => '</div>',
    'before_title' => '<div class="headingdeco"><h5>',
    'after_title' => '</h5></div>',
  )
);
register_sidebar(array(
    'name' => 'SideBar',
    'id'            => 'sidebar',
    'before_widget' => '<div class = "sidebar">',
    'after_widget' => '</div>',
    'before_title' => '<div class="headingdeco"><h5>',
    'after_title' => '</h5></div>',
  )
);

register_sidebar(array(
    'name' => 'Hero Section 1 ',
    'id'            => 'herosection1',
    'before_widget' => '<div class = "herosection1">',
    'after_widget' => '</div>',
    'before_title' => '<div class="herosection1"><h3>',
    'after_title' => '</h3></div>',
  )
);

register_sidebar(array(
    'name' => 'Hero Section 2 ',
    'id'            => 'herosection2',
    'before_widget' => '<div class = "herosection2">',
    'after_widget' => '</div>',
    'before_title' => '<div class="herosection2"><h3>',
    'after_title' => '</h3></div>',
  )
);

add_action( 'wp_enqueue_scripts', 'load_dashicons_front_end' );
function load_dashicons_front_end() {
  wp_enqueue_style( 'dashicons' );
}

?>


