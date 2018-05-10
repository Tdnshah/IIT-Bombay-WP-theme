<!DOCTYPE html>
<html>
<head>
    <meta charset="<?php bloginfo('charset');?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name');?></title>
    <?php wp_head();?>
    <script>
   jQuery(function($) {
    $('.navbar .dropdown').hover(function() {
      $(this).find('.dropdown-menu').first().stop(true, true).delay(250).slideDown();

    }, function() {
      $(this).find('.dropdown-menu').first().stop(true, true).delay(100).slideUp();

    });

    $('.navbar .dropdown > a').click(function() {
      location.href = this.href;
    });

  
});

    </script>
</head>
<body <?php body_class();?> >
    <header>
    <div class="container-fluid" id=top-navbar >
      <div class="container">
        <nav class="navbar navbar-expand-sm" >
            <ul class="nav mr-auto">
                <li class="nav-item"><a href="" class="nav-link ">English</a></li>
                <li class="nav-item"><a href="" class="nav-link">Hindi</a></li>
              </ul>  
          <ul class="nav ml-auto">
              <li class="nav-item"><a href="" class="nav-link ">Facebook</a></li>
              <li class="nav-item"><a href="" class="nav-link">Twitter</a></li>
              <li class="nav-item"><a href="" class="nav-link">LinkedIN</a></li>
              <li class="nav-item"><a href="" class="nav-link"></a></li>
            </ul>
          </nav>
        </div>
      </div>
  <div class="container-fluid" id="logo-section">
    <div class="container">
      <div class="row logo">
      <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_url( get_theme_mod( 'iitb_theme_institute_setting' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'iitb_theme_primary_logo' ) ); ?>' alt='<?php echo esc_url( get_theme_mod( 'iitb_theme_institute_setting' ) ); ?>' id="primary-logo" ></a>   
          <div class="logo-text" id="logo-text">
          <?php echo get_theme_mod( 'iitb_theme_institute_setting' ); ?>
          </div>  
          <h3 style="padding-top:20px;padding-left:3rem;"> <strong><?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?><br><?php bloginfo( 'description' );?> </strong></h3>       
          <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'iitb_theme_secondary_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' id="secondary-logo" ></a>
      </div>
    </div>
  </div>
  <div class="containner-fluid" id="mainmenu-section">
    <div class="container">
    <nav class="navbar navbar-expand-md navbar-light" role="navigation">
  	  <!-- Brand and toggle get grouped for better mobile display -->
	    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
	  	<span class="navbar-toggler-icon"></span>
	    </button>
		  <?php
        wp_nav_menu( array(
          'theme_location'    => 'primary',
          'depth'             => 5,
          'container'         => 'div',
          'container_class'   => 'collapse navbar-collapse',
          'container_id'      => 'bs-example-navbar-collapse-1',
          'menu_class'        => 'navbar-nav mr-auto',
          'fallback_cb'     => 'bs4navwalker::fallback',
          'walker'          => new bs4navwalker()
        ) );
	  	?>
	
    </nav>
    </div>
  </div>    
</header>
    