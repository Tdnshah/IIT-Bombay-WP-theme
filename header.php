<!DOCTYPE html>
<html>
<head>
    <meta charset="<?php bloginfo('charset');?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name');?></title>
    <?php wp_head();?>
    <script>
    </script>
</head>
<body <?php body_class();?> >
    <header>
    <div class="container-fluid" id=top-navbar >
      <div class="container">
      <?php wp_nav_menu( array( 'theme_location' => 'topnav' ) ); ?>
        </div>
      </div>
  <div class="container-fluid" id="logo-section">
    <div class="container">
      <div class="row logo">
        <div class="col-sm-3">
          <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_url( get_theme_mod( 'iitb_theme_institute_setting' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'iitb_theme_primary_logo' ) ); ?>' alt='<?php echo esc_url( get_theme_mod( 'iitb_theme_institute_setting' ) ); ?>' id="primary-logo" ></a>
          <div class="logo-text" id="logo-text">
            <?php echo get_theme_mod( 'iitb_theme_institute_setting' ); ?>
          </div>
        </div> 
        <div class="col-sm-7 text-center">
          <h3 style="padding-top:20px;"> <strong><?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?><br><?php bloginfo( 'description' );?> </strong></h3>
        </div>          
                 
        <div class="col-sm-2">
          <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'iitb_theme_secondary_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' id="secondary-logo" ></a>
        </div>
      </div>
    </div>
  </div>
  <div class="containner-fluid" id="mainmenu-section">
    <div class="container">
    <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
    </div>
  </div>    
</header>
    